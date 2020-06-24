<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, MailerInterface $mailer) {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // Management of the profil photo
            $image = $form->get('image')->getData();
            
            $username = $user->getUsername();
            $file = 'photo-profil-user-' . $username . '.' . $image->guessExtension();

            $image->move(
                $this->getParameter('profil_photo_directory'),
                $file
            );

            $user->setImage($file);


            // Management of the password
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            // We generate the activation_token
            $user->setActivationToken(md5(uniqid()));


            $manager->persist($user);
            $manager->flush();

            //Send an email to the user with the token
            $message = (new TemplatedEmail())
                ->from('jerome.lacquemant@gmail.com')
                ->to($user->getEmail())
                ->subject('activation de votre compte')
                ->htmlTemplate('emails/activation.html.twig')
                ->context([
                    'user' => $user
                ])
            ;

            $mailer->send($message);
        

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/connexion", name="security_login")
     */
    public function login() {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout() {}

    /**
     * @Route("/activation{token}", name="activation")
     */
    public function activation($token, UserRepository $userRepo) {
        //We check if the user has a token
        $user = $userRepo->findOneBy(['activation_token' => $token]);

        if(!$user) {
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas.');
        }

        // Suppression of the token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('message', 'Vous avez bien activé votre compte');

        return $this->redirectToRoute('blog');



    }

}

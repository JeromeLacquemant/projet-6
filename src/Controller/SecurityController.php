<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\ResetType;
use App\Form\ResetPassType;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer) {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // Management of the profil photo
            
            $image = $form->get('image')->getData();
            
            if($image){

            $username = $user->getUsername();
            $file = 'photo-profil-user-' . $username . '.' . $image->guessExtension();

            $image->move(
                $this->getParameter('profil_photo_directory'),
                $file
            );
            $user->setImage($file);
            }
            else{
                $file = 'avatar.jpg';
                $user->setImage($file);
            }

            // Management of the password
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            // We generate the activation_token
            $user->setActivationToken(md5(uniqid()));

            $manager->persist($user);
            $manager->flush();

            //Send an email to the user with the token
            $message = (new \Swift_Message('Activation de votre compte'))
                ->setFrom('jacques.jacquemont@gmail.com')
                ->setTo($user->getEmail())
                ->setBody(
                        $this->renderView(
                            'emails/activation.html.twig', ['user' => $user]
                        ),
                        'text/html'
                        );

            $mailer->send($message);
            
            //We create a flash message
            $this->addFlash('message', 'Un email pour activer votre compte vous a été envoyé');
        
            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/connexion", name="security_login", methods={"GET", "POST"})
     */
    public function login(Request $request) {
               
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
            return $this->redirectToRoute('security_login');
        }

        // Suppression of the token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('message', 'Vous avez bien activé votre compte');

        return $this->redirectToRoute('security_login');
    }

    /**
     * @Route("/oublipass", name="app_forgotten_password")
     */
    public function forgottenPass(Request $request, \Swift_Mailer $mailer, UserRepository $userRepo, TokenGeneratorInterface $tokenGenerator) {
//We create the form
        $form = $this->createForm(ResetPassType::class);

        // We manage the form
        $form->handleRequest($request);
        
        // If the form is valid
        if($form->isSubmitted() && $form->isValid()) {
            $donnees = $form->getData();

            //We search if a user has this email
            $user = $userRepo->findOneByEmail($donnees['email']);

            //If the user doesn't exist
            if(!$user) {
                //We send a flash message
                $this->addFlash('danger', 'Cette adresse n\'existe pas');

                return $this->redirectToRoute('security_login');
            }

            //We generate a token
            $token = $tokenGenerator->generateToken();

            try{
                $user->setResetToken($token);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
            }catch(\Exception $e) {
                $this->addFlash('warning', 'Une erreur est survenue : '.$e->getMessage());
                return $this->redirectToRoute('security_login');
            }

            //We send the email
            $message = (new \Swift_Message('Récupération de votre mot de passe'))
            ->setFrom('jacques.jacquemont@gmail.com')
            ->setTo($user->getEmail())
            ->setBody(
                    $this->renderView(
                        'emails/reset_password.html.twig', ['user' => $user->getResetToken()]
                    ),
                    'text/html'
                    );
            
        $mailer->send($message);

        //We create a flash message
        $this->addFlash('message', 'Un email de réinitialisation de mot de passe vous a été envoyé');
    
        return $this->redirectToRoute('security_login');
        }

        // We redirect 
        return $this->render('security/forgotten_password.html.twig', ['emailForm' => $form->createView()]);
    }

    /**
     * @Route("/reset-pass/{token}", name="app_reset_password")
     */
    public function resetPassword($token, Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        // We search the user with the given token
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['reset_token' => $token]);

        $form = $this->createForm(ResetType::class, $user);

        $form->handleRequest($request);

        if(!$user){
            return $this->redirectToRoute('security_login');
        }

        // If the form is sent by the method POST
        if($form->isSubmitted() && $form->isValid()) {
            // We delete the token
            $user->setResetToken(null);

            //We encode the password
            $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Mot de passe modifié avec succès');

            return $this->redirectToRoute('security_login');
        }else{
            return $this->render('security/reset_pass.html.twig', [
                'token' => $token,
                'form' => $form->createView()]);
        }
    }
}

<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Figure;
use App\Entity\Images;
use App\Entity\Videos;
use App\Entity\Comment;
use App\Form\FigureType;
use App\Form\CommentType;
use App\Repository\FigureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(FigureRepository $repo) {
        $figures = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'figures' => $figures,
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [
            'title' => "Salut les amis du Snow"
        ]);
    }

    /**
     * @Route("/blog/new", name="figure_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */
    public function form(Figure $figure = null, Request $request, EntityManagerInterface $manager) {
        if(!$figure){
            $figure = new Figure();
        }

        $form = $this->createForm(FigureType::class, $figure);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            // We recover transmitted images
            $images = $form->get('images')->getData();

            // Delete the null contains in the array
            $images = array_filter($images);

            if($images){
                // Loop on images
                foreach($images as $image){
                    // Generation of a new name of file
                    $file = $image->getName();
                    $fileName = uniqid() . '.' . $file->guessExtension();

                    //Copy of the file in uploads file
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );

                    // We stock image in the database with its name
                    $img = new Images();
                    $img->setName($fileName);
                    $figure->addImage($img);
                }
            }

            $videos = $form->get('videos')->getData();

            // Delete the null contains in the array
            $videos = array_filter($videos);

            if($videos) {
            foreach ($videos as $video) {
                $vid = new Videos();
                $figure->addVideo($video);
            }
        }

            if(!$figure->getId()){
                $figure->setCreatedAt(new \DateTime());
            }

            $manager->persist($figure);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $figure->getId()]);
        }

        return $this->render('blog/create.html.twig', [
            'formFigure' => $form->createView(),
            'editMode' => $figure->getId() !== null,
            'figure' => $figure,
        ]);
    }

    /**
     * @Route("blog/{id}", name="blog_show")
     */
    public function show(Figure $figure, Request $request, EntityManagerInterface $manager) {
        $comment = new Comment();
        
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $comment    ->setCreatedAt(new \DateTime())
                        ->setFigure($figure)
                        ->setCommentUser($comment_user = $this->getUser());

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', [
                'id' => $figure->getId()
            ]);
        }

        return $this->render('blog/show.html.twig', [
            'figure' => $figure,
            'commentForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("blog/{id}/delete", name="blog_delete")
     */
    public function delete_figure(Figure $figure, EntityManagerInterface $manager) {
        $manager->remove($figure);
        $manager->flush();

        return $this->redirectToRoute('blog');
    }

    /**
     * @Route("/delete/image/{id}", name="figure_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request) {
        $data = json_decode($request->getContent(), true);

        // We check if the token is valid
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            // In this case we need the name to remove it from the folder uploads.
            $name = $image->getName(); 
            // We remove the file
            unlink($this->getParameter('images_directory').'/'.$name);
            // We remove from the database
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            //Response in json
            return new JsonResponse(['success' => 1]);
        
        }else {
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }

    /**
     * @Route("/delete/video/{id}", name="figure_delete_video", methods={"DELETE"})
     */
    public function deleteVideo(Videos $video, Request $request) {
        $data = json_decode($request->getContent(), true);

        if($this->isCsrfTokenValid('delete'.$video->getId(), $data['_token'])){
            $em = $this->getDoctrine()->getManager();
            $em->remove($video);
            $em->flush();

            return new JsonResponse(['success' => 1]);
        
        }else {
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }
}

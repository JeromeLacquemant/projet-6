<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Entity\Comment;
use App\Form\FigureType;
use App\Form\CommentType;
use App\Repository\FigureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        ]);
    }

    /**
     * @Route("blog/{id}", name="blog_show")
     */
    public function show(Figure $figure) {
        $comment = new Comment();
        
        $form = $this->createForm(CommentType::class, $comment);

        return $this->render('blog/show.html.twig', [
            'figure' => $figure,
            'commentForm' => $form->createView()
        ]);
    }


}

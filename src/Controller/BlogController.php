<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Entity\Comment;
use App\Form\FigureType;
use App\Form\CommentType;
use App\Repository\FigureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
    public function show(Figure $figure, Request $request, EntityManagerInterface $manager) {
        $comment = new Comment();
        
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $comment    ->setCreatedAt(new \DateTime())
                        ->setFigure($figure);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', [
                'id' => $figure->getId()
            ]);
        }

        return $this->render('blog/show.html.twig', [
            'figure' => $figure,
            'commentForm' => $form->createView()
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
 * Controller Index action
 *
 * @param integer $page The current page passed via URL
 */
public function indexAction($page = 1)
{
    // ... get posts from DB...
    // Controller Action
    $posts = $repo->getAllPosts($currentPage); // Returns 5 posts out of 20

    // You can also call the count methods (check PHPDoc for `paginate()`)
    # Total fetched (ie: `5` posts)
    $totalPostsReturned = $posts->getIterator()->count();

    # Count of ALL posts (ie: `20` posts)
    $totalPosts = $posts->count();

    # ArrayIterator
    $iterator = $posts->getIterator();

    // render the view (below)
    $limit = 5;
    $maxPages = ceil($paginator->count() / $limit);
    $thisPage = $page;
    // Pass through the 3 above variables to calculate pages in twig
    return $this->render('view.twig.html', compact('categories', 'maxPages', 'thisPage'));
}
}

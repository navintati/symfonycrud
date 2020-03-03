<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/post", name="show_post_route")
     */
    public function showAllPostAction(Request $request)
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/create", name="create_post_route")
     */
    public function createPostAction(Request $request)
    {
        return $this->render('pages/create.html.twig');
    }

    /**
     * @Route("/view/{id}", name="view_post_route")
     */
    public function viewPostAction($id)
    {
        return $this->render('pages/view.html.twig');
    }

    /**
     * @Route("/edit/{id}", name="edit_post_route")
     */
    public function editPostAction($id)
    {
        return $this->render('pages/edit.html.twig');
    }

    /**
     * @Route("/delete/{id}", name="delete_post_route")
     */
    public function deletePostsAction($id)
    {
        return $this->render('pages/delete.html.twig');
    }


}

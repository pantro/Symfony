<?php

namespace Acme\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Muspelheim\InfinitePaginatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MuspelheimInfinitePaginatorBundle:Default:index.html.twig', array('name' => $name));
    }
}

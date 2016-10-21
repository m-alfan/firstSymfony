<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/hello")
 */
class HomeController extends Controller
{
    /**
     * @Route("/world/")
     * @Method({"POST"})
     * 
     * @return Response
     */
    public function helloWolrdAction()
    {
        return new Response('Hello World!');
    }

    /**
     * @Route("/{name}/")
     *
     * @param string $name
     * @return Response
     */
    public function helloYouAction($name)
    {
        return new Response(sprintf('Hello %s', $name));
    }

    /**
     * @Route("/world/{name}/")
     *
     * @param string $name
     * @return Response
     */
    public function helloTemplateAction($name)
    {
        return $this->render('AppBundle:home:hellotemplate.html.twig', ['name' => $name]);
    }

}

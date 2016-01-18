<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request)
    {
        // Get a reference to the logged-in user.
        $user = $this->get('security.token_storage')->getToken()->getUser();
        
        return $this->render(
            'default/dashboard.html.twig',
            [
                'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                'user' => $user,
            ]);
        return new Response('<html><body>Dashboard</body></html>');
    }
}

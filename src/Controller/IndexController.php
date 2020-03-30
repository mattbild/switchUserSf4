<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'routes' => $this->getRoutes(),
        ]);
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        $this->generateUrl('admin');
        return $this->render('index/admin.html.twig', [
            'routes' => $this->getRoutes(),
        ]);
    }

    private function getRoutes(){
        $routes['home'] = $this->generateUrl('home');
        $routes['admin'] = $this->generateUrl('admin');
        return $routes;

    }
}

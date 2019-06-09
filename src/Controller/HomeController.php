<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/", name="accueil")
     */
    public function home()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/AI", name="ai")
     */
    public function ai()
    {
        return $this->render('home/ai.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/ACI", name="aci")
     */
    public function aci()
    {
        return $this->render('home/aci.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/Accompagnement", name="accompagnement")
     */
    public function accompagnement()
    {
        return $this->render('home/accompagnement.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/Formation", name="formation")
     */
    public function formation()
    {
        return $this->render('home/formation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/Partenaires", name="partenaires")
     */
    public function partenaires()
    {
        return $this->render('home/partenaires.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/testform", name="formulaire")
     */
    public function formulaire()
    {
        return $this->render('home/testform.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}

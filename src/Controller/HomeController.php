<?php
//src/Controller/HomeController.php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
    
    /**
     * @Route("/home/{string}", name="home")
     */
    public function home($string = "defualt") {
        //$test = "this is a test for home";
        return $this->render('home.html.twig', [
            'test' => $string,
        ]);
    }
} 
?>
<?php
//src/Controller/HomeController.php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{
    
    /**
     * @Route("/home")
     */
    public function home() {
        $test = "this is a test for home";
        return new Response (
            '<html><body> String is: '.$test.'!</body></html>'
        );
    }
}


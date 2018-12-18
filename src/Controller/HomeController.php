<?php
//This is a new php file

namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Routes;

class HomeController {
    
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


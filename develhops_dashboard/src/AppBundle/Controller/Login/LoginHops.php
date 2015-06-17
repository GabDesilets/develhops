<?php

namespace AppBundle\Controller\Login;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginHops extends Controller
{
    /**asd
     * @Route("/app/login", name="login")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:login:login.html.twig',
            array(
                'error' => '',
                'last_username' => ''
            )
        );
    }
}

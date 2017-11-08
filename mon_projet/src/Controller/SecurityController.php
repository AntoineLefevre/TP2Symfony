<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 08/11/17
 * Time: 10:58
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller{


    /**
     * @Route("/user/login",name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils) {

        $error = $authUtils->getLastAuthenticationError();

        $lastUsername = $authUtils->getLastUsername();

        return $this->render('Login/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error
        ));
    }

}
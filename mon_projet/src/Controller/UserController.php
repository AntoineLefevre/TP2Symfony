<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 08/11/17
 * Time: 08:49
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller{


    /**
     * @Route("/user",name="user")
     */
    public function user() {

        $this->getUser();
        return $this->render(
            'User/user.html.twig'
        );
    }

}
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

class AdminController extends Controller{


    /**
     * @Route("/admin",name="admin")
     */
    public function admin() {

        $this->getUser();
        return $this->render(
            'Admin/admin.html.twig'
        );
    }

}
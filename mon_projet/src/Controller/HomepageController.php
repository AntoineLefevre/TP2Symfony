<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 08/11/17
 * Time: 08:48
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends Controller{


    /**
     * @Route("/",name="homepage")
     */
    public function homepage() {

        $this->getUser();
        return $this->render(
            'Homepage/homepage.html.twig'
        );
    }

}
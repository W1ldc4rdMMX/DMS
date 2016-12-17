<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/12/17
 * Time: 2:00 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class testController extends Controller
{
    /**
     * @Route("/test")
     */

    public function showAction()
    {
        return $this->render('catalogue/test.html.twig');
    }
}
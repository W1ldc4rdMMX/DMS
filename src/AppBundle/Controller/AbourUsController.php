<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/12/06
 * Time: 10:22 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AbourUsController extends  Controller
{
    /**
     * @Route("/AboutUs", name="about_us")
     */
    public function showAction()
    {
        return $this->render('catalogue/aboutus.html.twig');
    }
}
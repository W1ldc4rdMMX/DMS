<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/12/06
 * Time: 10:20 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PromotionsController extends  Controller
{
    /**
     * @Route("/Promotions", name="promotions")
     */
    public function showAction()
    {
        return $this->render('catalogue/promotions.html.twig');
    }
}
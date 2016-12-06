<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/12/06
 * Time: 10:21 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StoreLocatorController extends  Controller
{
    /**
     * @Route("/StoreLocator", name="store_locator")
     */
    public function showAction()
    {
        return $this->render('catalogue/storelocator.html.twig');
    }
}
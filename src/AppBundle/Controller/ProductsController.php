<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/12/06
 * Time: 10:05 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/Products", name="products")
     */
    public function showAction()
    {
        return $this->render('catalogue/products.html.twig');
    }
}
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

class OurTeamController extends  Controller
{
    /**
     * @Route("/OurTeam", name="Our_Team")
     */
    public function showAction()
    {
        return $this->render('catalogue/ourteam.html.twig');
    }
}
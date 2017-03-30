<?php
/**
 * Created by PhpStorm.
 * User: Abul
 * Date: 31.03.2017
 * Time: 1:16
 */

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{

    public function aboutUsAction()
    {
        return $this->render('BlogBundle:Page:about_us.html.twig');
    }
    
}
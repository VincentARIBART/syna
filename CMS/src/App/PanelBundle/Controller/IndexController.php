<?php

namespace App\PanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{

    public function iAction(Request $request)
    {
        dump($request);
        return $this->render('PanelBundle:Index:i.html.twig');
    }

}
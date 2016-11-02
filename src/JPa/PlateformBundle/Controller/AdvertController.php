<?php

namespace JPa\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Hérite de la class Controller
class AdvertController extends Controller
{
    public function indexAction()
    {
        //return new Response("Hello World !");

        // templating --> récupere le contenu d'un template grâce au render 
        $content = $this
        	->get('templating')
        	->render('JPaPlateformBundle:Advert:index.html.twig', array(
        		'name' => 'JeanPa')
        	);
    	return new Response($content);
    }
}

<?php

namespace JPa\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Hérite de la class Controller
class AdvertController extends Controller
{
    public function indexAction()
    {
        
    }

    public function viewAction($id)
    {
        return $this->render(
          'JPaPlateformBundle:Advert:view.html.twig',
          array('id'  => $id)
        );

        //Gestion de tag
        //$tag = $request->query->get('tag');
        //return new Response("Affichage de l'annonce d'id : ".$id.", avec le tag : ".$tag);

        //Redirection
        //return $this->redirectToRoute('jpa_plateform_home')
     }

    public function errorAction()
    {
        $response = new Response();
        $response->setContent("Ceci est une page d'erreur 404");
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
        return $response;
    }
}

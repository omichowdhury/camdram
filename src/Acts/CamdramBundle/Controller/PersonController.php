<?php

namespace Acts\CamdramBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Acts\CamdramBundle\Entity\Person;


/**
 * @RouteResource("Person")
 */
class PersonController extends FOSRestController
{

    public function getAction($slug)
    {
        $repo = $this->getDoctrine()->getManager()->getRepository('ActsCamdramBundle:Person');

        $person = $repo->findOneBySlug($slug);

        if (!$person) {
            throw $this->createNotFoundException('That person does not exist');
        }

        $view = $this->view($person, 200)
            ->setTemplate("ActsCamdramBundle:Person:index.html.twig")
            ->setTemplateVar('person')
        ;
        
        return $view;
    }
}

<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventController extends AbstractController {
    // Sepicy the Route
/**
 * @Route("/")
 * @Method({"GET"})
 */

    public function index(): Response{
        // return new Response('<html><body>Hello</body></html>');
    
    $events = ['Event 1', 'Event 2'];

        return $this->render('events/index.html.twig', array
    ('events'=> $events));
    }

/**
 * @Route("/event/save")
 */

   public function save(){
       $entityManager=$this->getDoctrine()->getManager();

       $event = new Event();
       $event->setTitle('Event One');
       $event->setDescription('This is the description for Event One');
       
       //What persist does is that it tells us we would like to eventually save 
       $entityManager->persist($event);

       $entityManager->flush();

       return new Response('Saves an Event with the id of
       '.$event->getId());
   } 

}
<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class EventController extends AbstractController {
    // Specify the Route
/**
 * @Route("/", name="event_list")
 * @Method({"GET"})
 */

    public function index(): Response{
        // return new Response('<html><body>Hello</body></html>');
    
    $events = $this->getDoctrine()->getRepository
    (Event::class)->findAll();

        return $this->render('events/index.html.twig', array
    ('events'=> $events));
    }
    
/**
 * @Route("/event/new", name="new_event")
 * Method("{GET", "POST}")
 */
public function new(Request $request) {
       $event = new Event();

       $form =$this->createFormBuilder($event)
       ->add('title', TextType::class, array('attr'=>
        array('class' => 'form-control')))
       ->add('description', TextareaType::class, array(
        'required'=>true, 
        'attr'=> array('class' => 'form-control')
       ))
       ->add('email', TextareaType::class, array(
        'required'=>true, 
        'attr'=> array('class' => 'form-control')
       ))
        ->add('event_date', DateType::class, array(
            'required'=>false,
            'attr'=> array('class' => 'form-control')     
       ))
       ->add('start_time', TimeType::class, array(
        'required'=>false,
        'attr'=> array('class' => 'form-control')     
       ))
       ->add('image', TextareaType::class, array(
        'required'=>false,
        'attr'=> array('class' => 'form-control')     
       ))
       ->add('event_capacity', TextareaType::class, array(
        'required'=>false,
        'attr'=> array('class' => 'form-control')     
       ))
       ->add('contact', TextareaType::class, array(
        'required'=>false,
        'attr'=> array('class' => 'form-control')     
       ))
       ->add('event_address', TextareaType::class, array(
        'required'=>false,
        'attr'=> array('class' => 'form-control')     
       ))
       ->add('save', SubmitType::class, array(
           'label' => 'Create',
           'attr' => array('class' => 'btn btn-primary mt-3')
       ))
       ->getForm();

       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $event=$form->getData();

           $entityManager=$this->getDoctrine()->getManager();
           $entityManager->persist($event);
           $entityManager->flush();

           return $this->redirectToRoute('event_list');
       }
       return $this->render('events/new.html.twig', array(
           'form'=>$form->createView()
       ));
    }

    /**
    * @Route("/event/edit/{id}", name="edit_event")
    * Method("{GET", "POST}")
    */
    public function edit(Request $request, $id) {
    $event = new Event();
    $event=$this->getDoctrine()->getRepository
    (Event::class)->find($id);

    $form =$this->createFormBuilder($event)
    ->add('title', TextType::class, array('attr'=>
     array('class' => 'form-control')))
    ->add('description', TextareaType::class, array(
     'required'=>true, 
     'attr'=> array('class' => 'form-control')
    ))
    ->add('email', TextareaType::class, array(
     'required'=>true, 
     'attr'=> array('class' => 'form-control')
    ))
     ->add('event_date', DateType::class, array(
         'required'=>false,
         'attr'=> array('class' => 'form-control')     
    ))
    ->add('start_time', TimeType::class, array(
     'required'=>false,
     'attr'=> array('class' => 'form-control')     
    ))
    ->add('image', TextareaType::class, array(
     'required'=>false,
     'attr'=> array('class' => 'form-control')     
    ))
    ->add('event_capacity', TextareaType::class, array(
     'required'=>false,
     'attr'=> array('class' => 'form-control')     
    ))
    ->add('contact', TextareaType::class, array(
     'required'=>false,
     'attr'=> array('class' => 'form-control')     
    ))
    ->add('event_address', TextareaType::class, array(
     'required'=>false,
     'attr'=> array('class' => 'form-control')     
    ))
    ->add('save', SubmitType::class, array(
        'label' => 'Update',
        'attr' => array('class' => 'btn btn-primary mt-3')
    ))
    ->getForm();

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->flush();

        return $this->redirectToRoute('event_list');
    }
    return $this->render('events/edit.html.twig', array(
        'form'=>$form->createView()
    ));
 }

    /**
     * @Route("/event/{id}", name="event_show")
     * @Method({"GET"})
    */
    public function show($id){
    $event=$this->getDoctrine()->getRepository
    (Event::class)->find($id);

    return $this->render('events/show.html.twig', 
    array('event'=>$event));
    }

   /**
     * @Route("/event/delete/{id}")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
    $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
  
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($event);
        $entityManager->flush();
  
        $response = new Response();
        $response->send();
      }
  



}


// Saving data to the DataBase
// /**
//  * @Route("/event/save")
//  */
//    public function save(){
//        $entityManager=$this->getDoctrine()->getManager();

//        $event = new Event();
//        $event->setTitle('Event One');
//        $event->setDescription('This is the description for Event One');
       
//        //What persist does is that it tells us we would like to eventually save 
//        $entityManager->persist($event);

//        $entityManager->flush();

//        return new Response('Saves an Event with the id of
//        '.$event->getId());
//    } 

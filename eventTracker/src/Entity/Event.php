<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text",  length=100)
     */
    private $title;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text",  length=100)
     */
    private $email;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $event_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_time;

     /**
     * @ORM\Column(type="text")
     */
    private $image;

    /**
     * @ORM\Column(type="smallint")
     */
    private $event_capacity;

    /**
     * @ORM\Column(type="text")
     */
    private $contact;
    
    /**
     * @ORM\Column(type="text", length=100)
     */
    private $event_address;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $events_url;
    

    //Getters && Setters
  
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function setTitle($title){
        $this->title = $title;
    }
    
    public function getDescription(){
        return $this->title;
    }
    
    public function setDescription($description){
        $this->description = $description;
    }
}

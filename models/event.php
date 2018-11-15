<?php

namespace models;
use models\Category as Category;
use models\Calendar as Calendar;

class Event{

    private $name;
    private $category;
    private $calendar;
    private $img;

    public function __construct($name, $category, $img){

        $this->name = $name;
        $this->category = new Category($category);
        $this->calendar = array();
        $this->img = $img;
    }

    public function setName($name){

        $this->name = $name;
    }

    public function setCategory($categoryName){

        $this->category = new Category($categoryName);
    }

    public function setCalendar($eventDate, $eventPlace, $artistList){

        $calendario = new Calendar($eventDate, $this->name, $eventPlace);
        $calendario->setArtistList($artistList);
        array_push($this->calendar, $calendario);
    }

    public function getName(){

        return $this->name;
    }

    public function getCategory(){

        return $this->category;
    }

    public function getCalendar(){
        
        return $this->calendar;
    }

    public function getImg(){

        return $this->img;
    }
}

?>
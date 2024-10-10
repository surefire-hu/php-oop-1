<?php
class Movie {
    public $title;
    public $comingDate;
    public $author;
    public $genre;
    public $description;
    public $time;

    function __construct($_title, $_comingOut) {
        $this->title = $_title;
        $this->comingDate = $_comingOut;
    }

    public function setTitle($title) {
        if($title !== '') {
            $this->title = $title;
        } else {
            $this->title = 'NotFound';
        }
    }
    public function getTitle() {
        return $this->title;
    }

    public function setDateComing($date) {
        if($date !== '') {
            $this->comingDate = $date;
        } else {
            $this->comingDate = 'NotFound';
        }
    }
    public function getDate() {
        return $this->comingDate;
    }

    public function setAuthor($name) {
        if($name !== '') {
            $this->author = $name;
        } else {
            $this->author = 'NotFound';
        }
    }
    public function getAuthor() {
        return $this->author;
    }
    
    public function setGenre($type) {
        if($type !== '') {
            $this->genre = $type;
        } else {
            $this->genre = 'NotFound';
        }
    }
    public function getGenre() {
        return $this->genre;
    }
    
    public function setDescription($description) {
        if($description !== '') {
            $this->description = $description;
        } else {
            $this->description = 'NotFound';
        }
    }

    public function getDescription() {
        return $this->description;
    }
    
    public function setTime($durata) {
        if($durata !== '') {
            $this->time = $durata;
        } else {
            $this->time = 'NotFound';
        }
    }

    public function getTime() {
        return $this->time;
    }
};
?>
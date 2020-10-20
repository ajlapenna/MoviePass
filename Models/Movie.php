<?php
namespace Models;

class Movie {
    private $id_movie;
    private $title;
    private $language;
    private $duration; 
    private $image;

    public function __construct($id_movie,$title,$language,$duration,$image)
	{
        $this->id_movie = $id_movie;
        $this->title = $title;
        $this->language = $language;
        $this->duration = $duration;
        $this->image = $image;

    }
    
    public function getId_movie()
    {
        return $this->id_movie;
    }

    public function setId_movie($id_movie)
    {
        $this->id_movie = $id_movie;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;

    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;

    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

    }
}

?>
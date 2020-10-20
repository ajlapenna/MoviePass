<?php
namespace DAO;

use Models\Movie as Movie;
use DAO\Imovie as Imovie;

class MovieDao implements Imovie{

    private $listMovie = array();
    private $fileJsonMovie;
 
    public function __construct(){

        $this->fileJsonMovie = ROOT."/Data/Movie.json";
    }

    public function addMovie(Movie $movie){
        $this->retrieveData();
        array_push($this->listMovie,$movie);
        $this->saveData();
    }

    public function deleteMovie($id_Movie){
        $this->retrieveData();
		$newList = array();
		foreach ($this->listMovie as $movie ) {
			if( $movie->getId_movie() != $id_Movie){
				array_push($newList,$movie);
			}
		}
		$this->listMovie = $newList;
		$this->saveData();
    }
    
    public function getAllCinema(){
        $this->retrieveData();
        return $this->listMovie;
    
    }

 private function retrieveData(){

       $this->listMovie = array();

       if (file_exists($this->fileJsonMovie)){
           $jsonContent = file_get_contents($this->fileJsonMovie);

           $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true):array();

           foreach($arrayToDecode as $valueArray){
               $movie = new Movie($valueArray["id_movie"],$valueArray["title"],$valueArray["language"],$valueArray["duration"],$valueArray["image"]);
               array_push($this->listMovie,$movie);
           }
       }
    }


    private function saveData(){

		$arrayToEncode = array();

		foreach ($this->listMovie as $movie) {
			$valueArray['id_movie'] =$movie->getId_movie();
			$valueArray['title'] =$movie->getTitle() ;
			$valueArray['language'] =$movie->getLanguage();
			$valueArray['duration'] = $movie->getDuration();
			$valueArray['imagen'] = $movie->getImage();
			array_push($arrayToEncode, $valueArray);
			
        }
        
		$jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
		file_put_contents($this->fileJsonMovie, $jsonContent);
	}
	
}

?>
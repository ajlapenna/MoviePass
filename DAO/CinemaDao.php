<?php 
namespace DAO;

use DAO\Icinema as Icinema;
use Models\Cinema as Cinema;

class CinemaDao implements Icinema 
{

    private $listCinema = array();
    private $fileJsonCinema;
 
    public function __construct()
    {
      $this->fileJsonCinema = ROOT."/Data/Cinema.json";
    }

    private function GetNextId_cinema(){
        $id_cinema = 0;

        foreach($this->listCinema as $cinema){
            $id = ($cinema->getId_Cinema() > $id_Cinema) ?$cinema->getId_Cinema() : $id_cinema;
        }
    return $id_cinema + 1;
    }

    public function addCinema(Cinema $cinema){
        $this->retrieveData();
        $cinema->setId_Cinema($this->GetNextId_cinema());
        array_push($this->listCinema,$cinema);
        $this->saveData();
    }

     public function deleteCinema($id_Cinema){
        $this->retrieveData();
		$newList = array();
		foreach ($this->listCinema as $cinema ) {
			if( $cinema->getId_Cinema()!= $id_Cinema){
				array_push($newList,$cinema);
			}
		}
		$this->listCinema = $newList;
		$this->saveData();
    }
    
     public function getAllCinema(){
        $this->retrieveData();
        return $this->listCinema;
    
    }

 private function retrieveData(){

       $this->listCinema = array();

       if (file_exists($this->fileJsonCinema)){
           $jsonContent = file_get_contents($this->fileJsonCinema);

           $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true):array();

           foreach($arrayToDecode as $valueArray){
               $cinema = new Cinema($valueArray["id_Cinema"],$valueArray["name"],$valueArray["address"],$valueArray["ticketValue"]);
               array_push($this->listCinema,$cinema);
           }
       }
    }


    private function saveData(){

		$arrayToEncode = array();

		foreach ($this->listCinema as $cinema) {
			$valueArray['id_Cinema'] =$cinema->getId_Cinema();
			$valueArray['name'] =$cinema->getName() ;
			$valueArray['address'] =$cinema->getAddress() ;
			$valueArray['ticketValue'] = $cinema-> getTicketValue();
			
			array_push($arrayToEncode, $valueArray);
			
        }
        
		$jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
		file_put_contents($this->fileJsonCinema, $jsonContent);
	}
	

}

?>
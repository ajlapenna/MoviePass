<?php
    namespace Controllers;

    use Models\Cinema as Cinema;
    use DAO\CinemaDao as CinemaDAO;

    class CinemaController
    {       
        private $cinemaDAO;

        public function __construct() {
            $this->cinemaDAO = new CinemaDAO(); 
        }

        public function ShowAddCinemaView($message = "") {
            require_once(VIEWS_PATH."add-cinema.php");
        }

        public function ShowListCinemaView()
        {
            $cinemaList = $this->cinemaDAO->getAllCinema();
            
            require_once(VIEWS_PATH."CinemaList.php");
        }

        public function AddCinema($name, $address, $capacity, $ticketValue)
        {
            $newCinema = new Cinema(0, $name, $address, $capacity, $ticketValue);
            
            if($_POST) {
                $this->cinemaDAO->addCinema($newCinema);
                $_SESSION["message"] = "Cinema added succesfully!";
                $this->ShowAddCinemaView("");
            }
            else
            {
                $_SESSION["message"] = "Failed in cinema adding!";
                $this->ShowAddCinemaView();
            }
        }
       
        
        public function Remove($id)
        {
            $this->cinemaDAO->deleteCinema($id);

            $this->ShowListcinemaView();
        }
    }
    
?>
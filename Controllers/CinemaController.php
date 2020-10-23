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

        public function AddCinema($id, $name, $address, $ticketValue)
        {
            $this->cinemaDAO = new CinemaDAO();
            $newCinema = new Cinema($id, $name, $address, $ticketValue);
            
            
            if($_POST) {
                $this->cinemaDAO->AddCinema($newCinema);
                $_SESSION["message"] = "Cinema added succesfully!";
                $this->ShowAddCinemaView("");
            }
            else
            {
                $_SESSION["message"] = "Failed in cinema adding!";
                $this->ShowAddCinemaView();
            }
        }

        public function getCinemaList() {
            return $this->cinemaDAO->getAllCinema();
        }

        public function ListCinemas() {
            require_once(VIEWS_PATH."cinemaList.php");
        } 
    }
?>
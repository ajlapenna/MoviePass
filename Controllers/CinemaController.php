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
            
            require_once(VIEWS_PATH."cinema-add.php");
        }

        public function ShowListCinemaView()
        {
            $cinemaList = $this->cinemaDAO->getAllCinema();
            
            require_once(VIEWS_PATH."cinema-list.php");
        }

        public function AddCinema($name, $address, $capacity, $ticketValue)
        {
            $newCinema = new Cinema(0, $name, $address, $capacity, $ticketValue);
            
            if($_POST) {
                $this->cinemaDAO->addCinema($newCinema);
                /* $_SESSION["message"] = "Cinema added succesfully!"; */
                $message = "Cinema added succesfully!";
                $this->ShowAddCinemaView($message);
            }
            else
            {
                /* $_SESSION["message"] = "Failed in cinema adding!"; */
                $message = "Failed in cinema adding!";
                $this->ShowAddCinemaView("Failed in cinema adding!");
            }
        }       
        
        public function Remove($id)
        {
            $this->cinemaDAO->deleteCinema($id);

            $this->ShowListcinemaView();
        }

        public function getCinemasList() {

            return $this->cinemaDAO->getAllCinema();
        }
    }
    
?>
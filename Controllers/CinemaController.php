<?php
    namespace Controllers;

    use Models\Cinema as Cinema;
    use DAO\CinemaDao as CinemaDAO;

    class CinemaController
    {       
        private $cinemaDAO;

        public function ShowAddCinemaView($message = "") {
            require_once(VIEWS_PATH."add-cinema.php");
        }

        public function AddCinema($id, $name, $address, $ticketValue)
        {
            $cinemaDAO = new CinemaDAO();
            $newCinema = new Cinema($id, $name, $address, $ticketValue);
            
            if($_POST) {
                $cinemaDAO->AddCinema($newCinema);
                echo "<script> if(alert('Cinema added succesfully!'));
                </script>";
                $this->ShowAddCinemaView();
            }
            else
            {
                echo "<script> if(alert('Failed in cinema adding!'));
                </script>";
                $this->ShowAddCinemaView();
            }
        }

      /*   public function ShowLastId()
        {
            $this->cinemaDAO = new CinemaDAO();
            echo $this->cinemaDAO->GetNextId_cinema();
        } */
    }
?>
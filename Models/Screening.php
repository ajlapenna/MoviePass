<?php 

    namespace Models;

    //Class Screening, represent the screening of the movies

    class Screening {

        private $id_screening; //Screening ID
        private $week_day_screening; //Screening Day
        private $hour_screening; //Screening Hate
        private $room_screening; //Room where the movie is goin to be Screened
        private $id_movie_screening; //Movie_ID to be screened 
        private $id_cinema_screening; //Cinema_ID where it gonna be screened the movie

        public function __construct($id_screening, $date_screening, $id_movie_screening, $id_cinema_screening) {
            $this->id_screening = $id_screening;
            $this->date_screening = $date_screening;
            $this->id_movie_screening = $id_movie_screening;
            $this->id_cinema_screening = $id_cinema_screening;
        }

        public function getId_screening()
        {
                return $this->id_screening;
        }
    
        public function setId_screening($id_screening)
        {
                $this->id_screening = $id_screening;
        }

        public function getDate_screening()
        {
                return $this->date_screening;
        }

        public function setDate_screening($date_screening)
        {
                $this->date_screening = $date_screening;
        }

        public function getId_movie_screening()
        {
                return $this->id_movie_screening;
        }

        public function setId_movie_screening($id_movie_screening)
        {
                $this->id_movie_screening = $id_movie_screening;
        }

        public function getId_cinema_screening()
        {
                return $this->id_cinema_screening;
        }

        public function setId_cinema_screening($id_cinema_screening)
        {
                $this->id_cinema_screening = $id_cinema_screening;
        }
    }





?>
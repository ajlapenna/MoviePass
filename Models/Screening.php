<?php 

    namespace Models;

    //Class Screening, represent the screening of the movies

    class Screening {

        private $id_screening; //Screening ID
        private $date_screening; //Screening Date
        private $hour_screening; //Screening Hour
        private $id_movie_screening; //Movie_ID to be screened 
        private $id_cinema_screening; //Cinema_ID where it gonna be screened the movie

        public function __construct($id_screening, $date_screening, $hour_screening, $id_movie_screening, $id_cinema_screening) {
            $this->id_screening = $id_screening;
            $this->date_screening = $date_screening;
            $this->hour_screening = $hour_screening;
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

        public function getHour_screening()
        {
                return $this->hour_screening;
        }

        public function setHour_screening($hour_screening)
        {
                $this->hour_screening = $hour_screening;
        }
    }





?>
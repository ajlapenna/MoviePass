<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."movieList.php");
        }        
        public function MostrarHome($message = "")
        {
            require_once(VIEWS_PATH."home.php");
        }
    }
?>
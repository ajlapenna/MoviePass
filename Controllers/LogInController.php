<?php
    namespace Controllers;

    class LogInController
    {
        public function ShowLogInView($message = "")
        {
            require_once(VIEWS_PATH."loginView.php");
        }       

        public function ShowAddCinema($message = "") {
            require_once(VIEWS_PATH."add-cinema.php");
        }

        public function CheckAdminLogin($userName, $password)
        {
            $defaultUser = 'admin';
            $defaultPass = '1234';
            $errorMsg = 0;

            if(isset($_POST)) {
                /* $username = $_POST['userName'];
                $password = $_POST['password']; */

                if (($userName == $defaultUser) && ($password == $defaultPass)) {
                    $_SESSION['username'] = $userName;
                    $_SESSION['password'] = $password;
                    $this->ShowAddCinema();
                } 
                else {
                    $errorMsg = 'Usuario incorrecto.';
                    
                }
            } 
            else {
                $errorMsg = 'Usuario incorrecto.';
                $this->ShowLogInView($errorMsg);
                
         }

        } 
    }
?>
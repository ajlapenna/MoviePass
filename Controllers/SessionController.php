<?php
    namespace Controllers;

    class SessionController
    {   
        //Funciones de LogIn

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
                    $_SESSION['userName'] = $userName;
                    $_SESSION['password'] = $password;
                    $this->ShowAddCinema();
                } 
                else {
                    $errorMsg = 'Usuario incorrecto.';
                    $this->ShowLogInView($errorMsg);
                    
                }
            } 
            else {
                $errorMsg = 'Usuario incorrecto.';
                $this->ShowLogInView($errorMsg);
                
         }

        } 

        //LogOutFunction

        public function SessionDestroy() {
            
            if(isset($_SESSION)) {
                session_destroy();
                $this->ShowLogInView();
            }

        }

        //SignUp function

        public function ShowSignUpView($message = "")
        {
            require_once(VIEWS_PATH."signup.php");
        } 
        
    }
?>
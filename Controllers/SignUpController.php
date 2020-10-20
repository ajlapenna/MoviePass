<?php
    namespace Controllers;

    class SignUpController
    {
        public function ShowSignUpView($message = "")
        {
            require_once(VIEWS_PATH."signup.php");
        }        
    }
?>
<?php
    namespace Controllers;

    use DAO\UserDao as UserDao;
    use Models\User as User;

    class SessionController
    {   
       
        private $userDAO ;

        public function __construct()
        {
           $this->userDAO = new UserDao();
        }

        //SignUp function

        public function ShowSignUpView($message = "")
        {
            require_once(VIEWS_PATH."signup.php");
        } 
        public function ShowLogInView($message = "")
        {
            
            require_once(VIEWS_PATH."loginView.php");
        }       

        public function ShowAddCinema() {
            require_once(VIEWS_PATH."validate-session.php");
            require_once(VIEWS_PATH."add-cinema.php");
        }
        
    
       public function CheckAdminLogin($username, $password)
        {
            $user = $this->userDAO->GetUserName($username);

            if(($user != null) && ($user->getPassword() === $password))
            {
                $_SESSION["loginUser"] = $user;
                
                $this->ShowAddCinema();
            }
            else{
                $this->ShowLogInView("incorrec user");
            }
        }
        
        //LogOutFunction

        public function SessionDestroy(){
                session_destroy();
                $this->ShowLogInView();
         }

    }    

        
?>
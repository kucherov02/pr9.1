<?php
class IndexController
{
   public function __construct($db)
   {
    $this->conn = $db->getConnect();
   }

   public function index()
   {
    include_once 'app/Models/UserModel.php';
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $user = (new User)::auth($this->conn, $email, $password);
       // виклик відображення
       include_once 'views/home.php';
   }

   public function logout() {
    
    $_SESSION['auth'] === false;
    header('Location: views/home.php'); 
    }
}

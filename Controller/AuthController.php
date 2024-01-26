<?php
namespace Controller;

use Config\View;

class AuthController
{
    public function login(){
        View::render('auth/login');
    }

    public function loginProcess(){
        $_SESSION['user'] = $_POST['user'];

        header("Location: /");
    }

    public function logout(){
        session_destroy();

        header("Location: /");
    }
}

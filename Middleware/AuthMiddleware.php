<?php

class AuthMiddleware implements MiddlewareInterface
{
    public function before(){
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }
    }
}

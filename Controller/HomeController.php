<?php

namespace Controller;

use Config\View;
use Model\User;

class HomeController
{
    public function index()
    {
        // echo $_SERVER['PATH_INFO'];
        View::render('welcome');
    }

    public function about()
    {
        $user = new User();
        View::render('iqbal', [
            'nama' => 'askdljhfasd fasdfalsd ',
            'users' => $user->get(),
        ]);
    }

    public function uts()
    {
        View::render('uts');
    }
}

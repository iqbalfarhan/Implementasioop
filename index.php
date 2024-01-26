<?php

ini_set("display_errors", true);

require "Config/Route.php";
require "Config/View.php";
require "Config/Database.php";
require "Model/User.php";
require "Controller/UserController.php";
require "Controller/HomeController.php";

use Config\Route;
use Controller\HomeController;
use Controller\UserController;

Route::add("GET", "/", HomeController::class, 'index');
Route::add("GET", "/about", HomeController::class, 'about');
Route::add("GET", "/uts", HomeController::class, 'uts');
Route::add("GET", "/user", UserController::class, 'index');
Route::add("GET", "/user/create", UserController::class, 'create');

Route::run();
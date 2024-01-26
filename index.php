<?php

session_start();

ini_set("display_errors", true);

require "Config/Route.php";
require "Config/View.php";
require "Config/Database.php";
require "Model/User.php";
require "Interface/MiddlewareInterface.php";
require "Middleware/AuthMiddleware.php";
require "Controller/UserController.php";
require "Controller/HomeController.php";
require "Controller/AuthController.php";

use Config\Route;
use Controller\HomeController;
use Controller\UserController;
use Controller\AuthController;

Route::add("GET", "/login", AuthController::class, 'login');
Route::add("POST", "/login", AuthController::class, 'loginProcess');
Route::add("GET", "/logout", AuthController::class, 'logout');

Route::add("GET", "/", HomeController::class, 'index');
Route::add("GET", "/about", HomeController::class, 'about');
Route::add("GET", "/uts", HomeController::class, 'uts', [
    AuthMiddleware::class
]);
Route::add("GET", "/user", UserController::class, 'index');
Route::add("GET", "/user/create", UserController::class, 'create');

Route::run();
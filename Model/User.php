<?php

namespace Model;

use Config\Database;
use PDO;

class User
{
    public $pdo;
    public function __construct(){

        $this->pdo = Database::connect();
    }

    public function get(){
        $st = $this->pdo->prepare("SELECT * FROM users");
        $st->execute();

        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id){
        $st = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $st->execute([$id]);

        return $st->fetch(PDO::FETCH_ASSOC);
    }
    
    public function store(){

    }
    public function update(){

    }
    public function delete(){

    }
}

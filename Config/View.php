<?php

namespace Config;

class View
{
    public static function render($filename, $model = []){
        extract($model);

        include __DIR__ . '/../View/templates/header.php';
        include __DIR__ . '/../View/'.$filename.'.php';
        include __DIR__ . '/../View/templates/footer.php';
    }
}

<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('users/plantilla.twig'
    // 'users/plantilla.twig',
    // ['mensaje' => 'Halamadrid',
    //  'alumno' => 'Hervas',
    //   'edad' => 8,
    //   'dias' => ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo']]
);

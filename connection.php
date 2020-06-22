<?php

//    $usuarios = [
//        array('login'=>'woxavier', 'password'=>'260200', 'name'=>'Winicius'),
//        array('login'=>'tamisousa', 'password'=>'123456', 'name'=>'Tamí'),
//        array('login'=>'wanderxavier', 'password'=>'111111', 'name'=>'Wanderley'),
//        array('login'=>'marixavier', 'password'=>'222222', 'name'=>'Mariana'),
//        array('login'=>'claraxavier', 'password'=>'333333', 'name'=>'Ana Clara'),
//    ];

$servername = "localhost";
$username = "root";
$password = "root";
$database = "sistema";

$connection = mysqli_connect($servername, $username, $password, $database);

if(!$connection){
    die("Conexão falhou: ".mysqli_connect_error());
}
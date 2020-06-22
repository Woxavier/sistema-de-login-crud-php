<?php

session_start();
require_once('../connection.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_SESSION['auth']['id'];

$query = "UPDATE users SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE id = $id";

if(mysqli_query($connection, $query)){
    $_SESSION['auth'] = ['id' => $id, 'username' => $username, 'name' => $name];
    header('location: /home.php');
} else{
    die(mysqli_error($connection));
};

header('location: /home.php');
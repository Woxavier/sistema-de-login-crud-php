<?php

session_start();
require_once('../connection.php');

$id = $_SESSION['auth']['id'];
$query = "DELETE FROM users WHERE `id` = $id";

if(mysqli_query($connection, $query)){
    unset($_SESSION['auth']);
    header('location: /login.php');
} else {
    header('location: /home.php');
};
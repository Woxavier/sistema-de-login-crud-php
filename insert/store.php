<?php
session_start();

require_once('../connection.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users (`name`, `username`, `password`) VALUES ('$name', '$username', '$password')";

$result = mysqli_query($connection, $query);

if($result){
    $id = mysqli_insert_id($connection);
    $_SESSION['auth'] = ['id' => $id,'username'=>$username, 'name'=>$name];
    header('Location: /home.php');
} else {
    header('Locatio: /login.php');
}
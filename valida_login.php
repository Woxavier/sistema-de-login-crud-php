<?php
session_start();

require('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT  `id`,`name`, `username` FROM users WHERE `username` = '$username' AND `password` = '$password'";

$result = mysqli_query($connection, $query);

$user = mysqli_fetch_assoc($result);

if($user){
    $_SESSION['auth'] = ['id' => $user['id'],'username'=>$user['username'], 'name'=>$user['name']];
    header('location: /home.php');

} else {
    $_SESSION['login_errado'] = true;
    header('location: /login.php');
}

<?php

session_start();
$_SESSION['user_id']=1;

$db = new PDO('mysql:dbname=users;host=localhost', 'root', '');

//Handle data
if(!isset($_SESSION['user_id'])){
    die("You are not signed in");
}

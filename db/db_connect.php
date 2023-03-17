<?php
// connection file with my sql 
$serv = "localhost";
$username = "root";
$pass = "";
$dbname="users";

$connex = mysqli_connect($serv, $username, $pass , $dbname);

if(!$connex){

    die("Connection failed" .mysqli_connect_error());
}

//echo " Connected Succefully !";
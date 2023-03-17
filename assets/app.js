// connection database mysqli
<?php

$serv="localhost";
$username="root";
$pass="";
$dbname="users";

$connex = mysqli_connect($serv, $username, $pass, $dbname);

if(!$connex){
    die("connection failed" .mysqli_connect_error());
}
echo " Connected !";

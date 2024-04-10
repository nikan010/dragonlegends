<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginvuurwerk";
//hier maakt de php conectie met de sql
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}

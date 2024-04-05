<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginvuurwerk";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}

<?php

session_start();
//hij zoekt je userid daarna zet hij je uit de userid
if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);

}

header("Location: login.php");
die;
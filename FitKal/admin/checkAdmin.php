<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION["adminLogin"]))
{
    header("Location: ../login.php");
}
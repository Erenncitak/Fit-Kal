<?php

if(isset($_SESSION['UserID']))
{
    header("Location: index.php");
    die();
}
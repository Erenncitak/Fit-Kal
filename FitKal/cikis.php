<?php

session_start();

if(isset($_SESSION["UserID"]))
{
    setcookie("rmb", 'false', time() -3600,'/');
    session_destroy();
}

if(isset($_SESSION["adminLogin"]))
{
    setcookie("rmbAdmin", 'false', time() -3600,'/');
    session_destroy();
}

header("Location: index.php");

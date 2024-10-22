<?php

    session_start();



if(!isset($_SESSION['username'])){
    header("locatin:login.php");
}  
?>
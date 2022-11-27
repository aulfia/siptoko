<?php

require 'function.php';

if(isset($_SESSION['login'])){
    //yaudah
} else {
    //belumlogin
    header('location:login.php');
}
?>
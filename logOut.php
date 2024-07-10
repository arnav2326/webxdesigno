<?php
include('config.php');
session_destroy();
header('location:SignIn.php');
?>
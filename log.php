<?php
require 'check.php';
session_start();
unset($_SESSION['id']);
session_destroy();
header("location:first.php");
?>
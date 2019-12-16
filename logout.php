<?php
require 'check1.php';
session_destroy();
header("location:login_admin.php");
?>
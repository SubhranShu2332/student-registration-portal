<?php
session_start();

session_unset();

header('Location: adminlogin.php?message=2');

?>
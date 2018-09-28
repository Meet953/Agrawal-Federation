<?php
	session_start();
	unset($_SESSION['user-login']);
	header('location:index.php');
?>
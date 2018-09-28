<?php
	session_start();
	// $var1=$_SERVER['HTTP_REFERER'];
	unset($_SESSION['edu-user']);
	header('location:index.php');
	// echo '<script>window.location.href="'.$var1.'"</script>';
?>







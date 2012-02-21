<?php
session_start();
if($_SESSION['tipo'] !='Cliente'){
	header('Location:index.php');
	}
?>
<?php
session_start();
if($_SESSION['tipo'] !='Admin'){
	header('Location:index.php');
	}
?>
<?php
session_start();
include('conex/conex.php');
$id=$_POST['miid'];
$tipo=$_POST['tipo'];

$us=mysql_query("select * from clientes where idCliente='".$id."' and tipo ='".$tipo."'");
$u=mysql_num_rows($us);
if($u!=0){
$_SESSION['id']=$id;
$_SESSION['tipo']=$tipo;
if($tipo=='Cliente'){
header('Location:cliente.php');
}else{header('Location:admincontrol.php');}

}else{
header('Location:index.php?no');
}

?>
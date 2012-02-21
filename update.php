<?php
include('conex/conex.php');

$datec=$_POST['dateC'];
$uploaddir = "uploads/"; 
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']); 
$error = $_FILES['avatar']['error']; 
$subido = false; 

if(isset($_POST['boton']) && $error=='UPLOAD_ERR_OK')
 { $subido = copy($_FILES['avatar']['tmp_name'], $uploadfile); 
 } 
 /*
 if($subido) 
 { echo "El archivo subio con exito";
  } else
   { echo "Se ha producido un error: ".$error; }*/

if($uploadfile != 'uploads/'){
if(mysql_query("UPDATE clientes SET nameC='".$_POST['nc']."',dateC='".$datec."',sexoC='".$_POST['sexo']."',paisC='".$_POST['pais']."',estadoC='".$_POST['estado']."',Ciudad='".$_POST['ciudad']."',avatarC='".$uploadfile."' where idCliente=".$_POST['idc'])){
	header('Location:http://localhost/test1/admincontrol.php?modi');
	}
}else{mysql_query("UPDATE clientes SET nameC='".$_POST['nc']."',dateC='".$datec."',sexoC='".$_POST['sexo']."',paisC='".$_POST['pais']."',estadoC='".$_POST['estado']."',Ciudad='".$_POST['ciudad']."',avatarC='img/ava.jpg' where idCliente=".$_POST['idc']);
	header('Location:http://localhost/test1/admincontrol.php?modi');
}

?>



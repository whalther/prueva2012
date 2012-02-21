<?php
include('conex/conex.php');
//veriphicar el id si ya existe
$q=mysql_query("select * from clientes where idCliente=".$_POST['idc']);
$n=mysql_num_rows($q);
if($n>0){
	header('Location:registro.php?existe');
	}else{
$datec=$_POST['datec'];
$mes=$_POST['mes'];
$dias=$_POST['dias'];
$datex= $datec.'-'.$mes.'-'.$dias;
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
if(mysql_query("INSERT INTO clientes(idCliente,nameC,dateC,sexoC,paisC,estadoC,Ciudad,avatarC,tipo)VALUE('".$_POST['idc']."','".$_POST['nc']."','".$datex."','".$_POST['sexo']."','".$_POST['pais']."','".$_POST['estado']."','".$_POST['ciudad']."','".$uploadfile."','".$_POST['tipo']."')")){
	header('Location: registro.php?exito');
	}else{echo 'none';
	}
}else{mysql_query("INSERT INTO clientes(idCliente,nameC,dateC,sexoC,paisC,estadoC,Ciudad,avatarC,tipo)VALUE('".$_POST['idc']."','".$_POST['nc']."','".$datex."','".$_POST['sexo']."','".$_POST['pais']."','".$_POST['estado']."','".$_POST['ciudad']."','img/ava.jpg','".$_POST['tipo']."')");
header('Location: registro.php?exito');
}
	}//end 
?>


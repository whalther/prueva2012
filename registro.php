<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Nuevo Cliente</title>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/registro.js"></script>
<style type="text/css">
.mire{
	width:300px; height:auto; padding:10px 10px 10px 10px;;
	}
.titulop{
width:99.20%;background-color:#333; height:20px;padding-left:3px;color:#FFF; border:1px solid #6E6E6E; text-align:center; box-shadow: 3px 3px 3px gray; margin-bottom:3px;font-family:erdana, Tahoma, Geneva, sans-serif;
	font-size:14px; padding-top:4px;
}
#conte{ width:301px; margin:auto; border:1px solid #999}
#enviar{
	width:250px;
	height:30px;
	}
</style>
</head>

<body>
<div id="conte">
<div class="titulop">Nuevo Usuario</div>
&nbsp;&nbsp;&nbsp;<a href="admincontrol.php">Volver</a>
| 
<?php
if(isset($_GET['exito'])){echo '<font color="#0066CC">Usuario Agregado Exitosamete!</font>';}
?>
<?php
if(isset($_GET['existe'])){echo '<font color="red">ID en uso intentelo de Nuevo.</font>';}
?>
<br />
<div class="mire">
<form action="registroEnd.php" method="post"id="mi" enctype="multipart/form-data" >
<table>
<tr><td>ID</td><td><input type="text" name="idc" id="idc" /></td></tr>
<tr><td>Nombre Completo</td><td><input type="text" name="nc" id="nc" /></td></tr>
<tr><td>Avatar</td><td><input type="file" name="avatar"  /></td></tr>
<tr><td>Fecha</td><td><select name="datec" id="datec">

</select>
<select name="mes" id="mes">

</select>
<select name="dias" id="dias">

</select></td></tr>

<tr><td>Sexo</td><td><input type="radio" value="Hombre" name="sexo" checked="checked" />Hombre
                     <input type="radio" value="Mujer" name="sexo" />Mujer
</td></tr>
<tr><td>Pa&iacute;s</td><td><select  name="pais" id="pais" >
<option value="0"></option>
<option value="El Salvador">El Salvador</option>
<option value="Honduras">Honduras</option>
</select>
</td></tr>
<tr><td>Estado</td><td><select name="estado" id="estado">
<option value="0" ></option>
</select>
</td></tr>
<tr><td>Ciudad</td><td><select name="ciudad" id="ciudad">
<option value="0" ></option>
</select>
</td></tr>
<tr><td>Tipo</td><td><select name="tipo">
<option value="Cliente" >Cliente</option>
<option value="Admin" >Administrador</option>
</select>
</td></tr>
<input type="hidden" name="boton" />
<tr><td colspan="2"><center><input type="button" id="enviar"  name="enviar" value="Crear" /></center></td></tr>
</table>
</form>
</div>
</div>
</body>
</html>
<?php
include('validar.php');
include('conex/conex.php');
$q=mysql_query("select nameC from clientes where idCliente=".$_SESSION['id']);
$user=mysql_fetch_assoc($q);
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/adminc.js"></script>
<style type="text/css">
#mod{ width: 350px; height:auto; border:1px solid #666; border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;
     background-color:#FFF; padding:7px 7px 7px 7px; position:absolute; top:90px; left:390px; box-shadow:0px 0px 10px #6E6E6E }
.contenedor{ width:740px; height:670px; padding:10px 10px 10px 10px; border:1px solid #D8D8D8; margin:auto;
 border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px; box-shadow:2px 2px 2px #E6E6E6;
 -webkit-box-shadow:2px 2px 2px #E6E6E6; -moz-box-shadow:2px 2px 2px #E6E6E6;}
#txtbus{
	color:#999;
	}
</style>
</head>

<body>
<div class="contenedor">
<font color="#999999">Admin: </font><?=$user['nameC']?> | <a href="Salir.php">Salir</a> | 
<?php
if(isset($_GET['modi'])){echo '<font color="#0066CC">Usuario Modificado Correctamente!</font>';}
?><br />
<a href="javascript:getUser()">Listar Usuarios</a> | <a href="registro.php" >Crear Usuarios</a> | <input type="text" name="buscar" value="Escribe el Nombre..." id="txtbus" onclick="txtlimpiar()" /><input type="button" value="Buscar" id="buscar" onclick="buscaru()" />

<div id="resultado"></div>
<div style="display:none" id="mod">

<form action="update.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>ID</td><td><input type="text" name="idc" id="idc" readonly="readonly" /></td></tr>
<tr><td>Nombre Completo</td><td><input type="text" name="nc" id="nc" /></td></tr>
<tr><td>Avatar</td><td><input type="file" name="avatar" id="avatar"  /></td></tr>
<tr><td>Fecha</td><td><input type="text" name="dateC" id="dateC"/></td></tr>

<tr><td>Sexo</td><td><input type="radio" value="Hombre" name="sexo"  />Hombre
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
<input type="hidden" name="boton" />
<tr><td colspan="2"><input type="button" onclick="ocultar()" value="Cancelar" /> <input type="submit" id="enviar"  name="enviar" value="Guardar" /></td></tr>
</table>
</form>
</div>
</div>

</body>
</html>
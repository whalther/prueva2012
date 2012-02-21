<style type="text/css">
.tabla{ border:1px solid #999;}
</style>
<?php
include('conex/conex.php');
$q=mysql_query("select * from clientes where tipo='Cliente'");
?>
<table class="tabla" cellspacing="0">
<tr bgcolor="#333333" style="color:#FFF"><td>Avatar</td><td>| ID </td><td>| Nombre</td><td>| Fecha Nacimiento</td><td>| Sexo</td><td>| Pais</td><td>| Estado</td><td>| Ciudad</td><td></td><td></td></tr>
<?php
while($r=mysql_fetch_array($q)){
	echo '<tr onMouseOver="style.backgroundColor=\'#E0ECF8\'" onMouseOut="style.backgroundColor=\'\'"><td><img src="'.$r['avatarC'].'" height="30"></td><td>&nbsp;&nbsp;'.$r['idCliente'].'</td><td>&nbsp;&nbsp;'.$r['nameC'].'</td><td>&nbsp;&nbsp;'.$r['dateC'].'</td><td>&nbsp;&nbsp;'.$r['sexoC'].'</td><td>&nbsp;&nbsp;'.$r['paisC'].'</td><td>&nbsp;&nbsp;'.$r['estadoC'].'</td><td>&nbsp;&nbsp;'.$r['Ciudad'].'</td><td>&nbsp;&nbsp;<a href="javascript:actua(\''.$r['idCliente'].'\',\''.$r['nameC'].'\',\''.$r['dateC'].'\',\''.$r['sexoC'].'\',\''.$r['paisC'].'\',\''.$r['estadoC'].'\',\''.$r['Ciudad'].'\',\''.$r['avatarC'].'\')"><img src="img/71.png" title="Actualizar info" border="0"></a></td><td><a href="javascript:eliminar(\''.$r['idCliente'].'\')"><img src="img/12.png" title="Eliminar" border="0"></a></td></tr>';
	}
?>
</table>


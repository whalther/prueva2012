<style type="text/css">
.tabla{ border:1px solid #999;}
</style>
<?php
include('conex/conex.php');
$q=mysql_query("SELECT * FROM clientes WHERE nameC LIKE '%".$_GET['nameC']."%' and tipo !='Admin'");
$n=mysql_num_rows($q);
if($n>0){
?>
<font color="#0066CC">Resultados:</font><br>
<table class="tabla" cellspacing="0">
<tr bgcolor="#333333" style="color:#FFF"><td>Avatar</td><td>| ID </td><td>| Nombre</td><td>| Fecha Nacimiento</td><td>| Sexo</td><td>| Pais</td><td>| Estado</td><td>| Ciudad</td><td></td><td></td></tr>
<?php
while($r=mysql_fetch_array($q)){
	echo '<tr onMouseOver="style.backgroundColor=\'#E0ECF8\'" onMouseOut="style.backgroundColor=\'\'"><td><img src="'.$r['avatarC'].'" height="30"></td><td>'.$r['idCliente'].'</td><td>'.$r['nameC'].'</td><td>'.$r['dateC'].'</td><td>'.$r['sexoC'].'</td><td>'.$r['paisC'].'</td><td>'.$r['estadoC'].'</td><td>'.$r['Ciudad'].'</td></td><td><a href="javascript:actua(\''.$r['idCliente'].'\',\''.$r['nameC'].'\',\''.$r['dateC'].'\',\''.$r['sexoC'].'\',\''.$r['paisC'].'\',\''.$r['estadoC'].'\',\''.$r['Ciudad'].'\',\''.$r['avatarC'].'\')"><img src="img/71.png" title="Actualizar info" border="0"></a></td><td><a href="javascript:eliminar(\''.$r['idCliente'].'\')"><img src="img/12.png" title="Eliminar" border="0"></a></td></tr>';
	}
?>
</table>
<?php
}else{echo '<center><h3><font color="red">Ningun Usuario Encontrado.</font></h3></center>';}

?>
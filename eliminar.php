<?php
include('conex/conex.php');
mysql_query("DELETE FROM clientes where idCliente='".$_GET['id']."'");
echo "DELETE FROM clientes where idCliente='".$_GET['id']."'";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio de Sesión</title>
<script type="application/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
function validar(){
	if($('#miid').get(0).value==''){alert('Ingrese su ID')}else{$('#mi').submit();}
}
</script>
<style type="text/css">
body{ background-color:#F2F2F2}
.sms{
	color:#F00;
	margin-left:10px;
   }
#miid{ height:33px; border:1px solid #999; box-shadow:0px 0px 4px gray;font-size:19px; width:160px}
#entrar{ height:40px;}
.label1{ font-size:17px; color:#086A87}
#conte{ border:1px solid #BDBDBD; width:222px; padding:7px 7px 7px 7px;
         border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;
		 box-shadow: 5px 5px 5px #BDBDBD;background-color:#FFF; margin:auto; margin-top:100px}
</style>
</head>

<body>
<div id="conte">
<form action="control.php" method="post" id="mi">
<span class="label1">Ingrese su ID para continuar</span><br /><input type="password" name="miid" id="miid" /><input type="button" name="entrar" onclick="validar()" value="Entrar" id="entrar"/><br />
<select name="tipo"><option value="Cliente">Cliente</option><option value="Admin">Administrador</option></select>
</form>
<?php
if(isset($_GET['no'])){echo '<span class="sms">ID Incorrecto.</span>';}
?></div>
</body>
</html>
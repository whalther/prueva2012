//UTILIZAR LA UNCION PARA CAMBIAR LOS COMBOS
var x=$(document);
x.ready(inicio);
function inicio(){
	var y = $('#pais');
	var e = $('#estado');
	y.change(mostrar);
	e.change(mostrar2);
	cargar();
	}
function mostrar(){
	var y = $('#pais').get(0).value;
	$("#estado").html('<option value="0"></option><option value="0"></option>"');
	$("#ciudad").html('<option value="0"></option><option value="0"></option>"');
    if(y=='Honduras'){
	$("#estado").html('<option value="0" ></option><option value="Atlántida">Atlántida</option><option value="Choluteca">Choluteca</option>                                          <option value="Colón">Colón</option>"');
	}else if(y=='El Salvador'){
		$("#estado").html('<option value="0" ></option><option value="Ahuachapán">Ahuachapán</option><option value="Santa Ana">Santa Ana</option>		                           <option value="Sonsonate">Sonsonate</option>"');
		}
	}

function mostrar2(){
	var y = $('#estado').get(0).value;
    switch(y){
			case 'Ahuachapán':
			  $("#ciudad").html('<option value="0" ></option><option value="Ahuachap&aacute;n">Ahuachapán</option><option value="Jujutla">Jujutla</option>                                        <option value="Ahuachapán">Atiquizaya</option>');
			 break;
			case 'Santa Ana':
			  $("#ciudad").html('<option value="0" ></option><option value="Chalchuapa">Chalchuapa</option><option value="Coatepeque">Coatepeque</option>                                        <option value="El Congo">El Congo</option>');
			 break;
            case 'Sonsonate':
			  $("#ciudad").html('<option value="0" ></option><option value="Acajutla">Acajutla</option><option value="Armenia">Armenia</option>                                        <option value="Caluco">Caluco</option>');
			 break;
			 case 'Atlántida':
			  $("#ciudad").html('<option value="0" ></option><option value="Arizona">Arizona</option><option value="El Porvenir">El Porvenir</option>                                        <option value="Esparta">Esparta</option>');
			 break;
            case 'Choluteca':
			  $("#ciudad").html('<option value="0" ></option><option value="Apacilagua">Apacilagua</option><option value="Choluteca">Choluteca</option>                                        <option value="Duyure">Duyure</option>');
			 break;
            case 'Colón':
			  $("#ciudad").html('<option value="0" ></option><option value="Balfate">Balfate</option><option value="Iriona">Iriona</option>                                        <option value="Limón">Limón</option>');
			 break;

			  default:
			$("#ciudad").html('<option value="0"></option><option value="0"></option>"');
			  }
}

//AND COMBOS
//PETICIONES AJAX
function getUser(){
var xhr = new XMLHttpRequest();
xhr.open("POST", "listar.php", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
 document.getElementById("resultado").innerHTML=xhr.responseText;

}}
xhr.send();
}

function crear(){
var xhr = new XMLHttpRequest();
xhr.open("POST", "registro.php", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
 document.getElementById("resultado").innerHTML=xhr.responseText;

}}
xhr.send();
}
function buscaru(){
var busc = $('#txtbus').get(0).value;
var xhr = new XMLHttpRequest();
xhr.open("GET", "buscar.php?nameC="+busc, true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
 document.getElementById("resultado").innerHTML=xhr.responseText;

}}
xhr.send();
}
//END AJAX
function ocultar(){	$('#mod').css('display','none');}
function actua(d1,d2,d3,d4,d5,d6,d7,d8){
//	alert(d1+ '-' +d2+ '-' +d3+ '-' +d4+ '-' +d5+ '-' +d6+ '-' +d7+ '-' +d8);
	$('#mod').css('display','run-in');
	$('#idc').val(d1);
	$('#nc').val(d2);
	$('#dateC').val(d3);
	$('#avatar').val(d8);
	$('#pais').html('<option value="'+d5+'" >'+d5+'</option><option value="El Salvador">El Salvador</option><option value="Honduras">Honduras    </option>');
	switch(d5){
		case 'El Salvador':
		$("#estado").html('<option value="'+d6+'" >'+d6+'</option><option value="Ahuachapán">Ahuachapán</option><option value="Santa Ana">Santa Ana</option>		                           <option value="Sonsonate">Sonsonate</option>"');
		break;
		case 'Honduras':
		$("#estado").html('<option value="'+d6+'" >'+d6+'</option><option value="Atlántida">Atlántida</option><option value="Choluteca">Choluteca</option>  <option value="Colón">Colón</option>"');
		break;
	    default:
		$("#estado").html('<option value="0"></option><option value="0"></option>"');
		}
	
		switch(d6){
			case 'Ahuachapán':
			  $("#ciudad").html('<option value="'+d7+'" >'+d7+'</option><option value="Ahuachap&aacute;n">Ahuachapán</option><option value="Jujutla">Jujutla</option>                                        <option value="Ahuachapán">Atiquizaya</option>');
			 break;
			case 'Santa Ana':
			  $("#ciudad").html('<option value="'+d7+'" >'+d7+'</option><option value="Chalchuapa">Chalchuapa</option><option value="Coatepeque">Coatepeque</option>                                        <option value="El Congo">El Congo</option>');
			 break;
            case 'Sonsonate':
			  $("#ciudad").html('<option value="'+d7+'" >'+d7+'</option><option value="Acajutla">Acajutla</option><option value="Armenia">Armenia</option>                                        <option value="Caluco">Caluco</option>');
			 break;
			 case 'Atlántida':
			  $("#ciudad").html('<option value="'+d7+'" >'+d7+'</option><option value="Arizona">Arizona</option><option value="El Porvenir">El Porvenir</option>                                        <option value="Esparta">Esparta</option>');
			 break;
            case 'Choluteca':
			  $("#ciudad").html('<option value="'+d7+'" >'+d7+'</option><option value="Apacilagua">Apacilagua</option><option value="Choluteca">Choluteca</option>                                        <option value="Duyure">Duyure</option>');
			 break;
            case 'Colón':
			  $("#ciudad").html('<option value="'+d7+'" >'+d7+'</option><option value="Balfate">Balfate</option><option value="Iriona">Iriona</option>                                        <option value="Limón">Limón</option>');
			 break;

			  default:
			$("#ciudad").html('<option value="0"></option><option value="0"></option>"');
			}
    if(d4=='Hombre'){
	$('input:radio[name=sexo][value=Hombre]').click();
	}else{$('input:radio[name=sexo][value=Mujer]').click();}
	}
function eliminar(id){
	var xhr = new XMLHttpRequest();
xhr.open("GET", "eliminar.php?id="+id, true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
getUser();

}}
xhr.send();
	}
function txtlimpiar(){
	$('#txtbus').val('');
	$('#txtbus').css('color','black');
}
function cargar(){
    var i,c,a,b;
	for (i=1999;i>=1940;i--){
	c+='<option value="'+ i +'" >'+ i +'</option>';
	}
	for (a=1;a<=31;a++){
	b+='<option value="'+ a +'" >'+ a +'</option>';
	}
	$("#datec").html(c);
	$("#dias").html(b);
	$("#mes").html('<option value="1" >Enero</option><option value="2" >Febrero</option><option value="3" >Marzo</option><option value="4" >Abril</option><option value="5" >Mayo</option><option value="6" >Junio</option><option value="7" >Julio</option><option value="8" >Agosto</option><option value="9" >Septiembre</option><option value="10" >Octubre</option><option value="11" >Noviembre</option><option value="12" >Diciembre</option>');
}

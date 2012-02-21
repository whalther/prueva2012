var x=$(document);
x.ready(inicio);
function inicio(){
	var y = $('#pais');
	var e = $('#estado');
	var c= $('#enviar');
	y.change(mostrar);
	e.change(mostrar2);
	c.click(validar);
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
function validar(){
	var n=0;
	if($('#idc').get(0).value==''){alert('Llene el campo ID')}else{n+=1;}
	if($('#nc').get(0).value==''){alert('Llene el campo Nombre Completo')}else{n+=1;}
	if($('#datec').get(0).value==''){alert('Seleccione su fecha de nacimiento')}else{n+=1;}
	if($('#pais').get(0).value==0){alert('Seleccione su País')}else{n+=1;}
	if($('#estado').get(0).value==0){alert('Seleccione su Estado')}else{n+=1;}
	if($('#ciudad').get(0).value==0){alert('Seleccione su Ciudad')}else{n+=1;}
	if(n==6){$('#mi').submit();}
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
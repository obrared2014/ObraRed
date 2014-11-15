function buscarMateriales(busqueda){
	
	$tipo = $("#tipo_material").val();
	
	if($tipo == ""){
			$("#material").html("<option value=''>Seleccione Material</option>");
                        $( "#material" ).change();
                        selecciona_otro();
	}else if($tipo == "otro"){
			$("#material").html("<option value='otro'>Otro</option>");                        
                            selecciona_otro();
                        
	}else {
		$.ajax({
			dataType: "json",
			data: {"tipo_material": $tipo},
			url:   'Controlador/Materiales/'+busqueda+'.php',
			type:  'post',
			beforeSend: function(){
				//Lo que se hace antes de enviar el formulario
				},
			success: function(respuesta){
				//lo que se si el destino devuelve algo
				$("#material").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
                selecciona_otro();
	}
        
}   
function buscarDetalles(){
	
	$tipo = $("#tipo_material").val();
	$material = $("#material").val();
//        alert($tipo);alert($material);
	if($material == ""){
			$("#detalleMaterial").html("<option value=''>Seleccione Material</option>");
                        selecciona_otro();
	}else if($material == "otro"){
			$("#detalleMaterial").html("<option value='otro'>Otro</option>");                        
                            selecciona_otro();
                        
	}else {
		$.ajax({
			dataType: "json",
			data: {"tipo_material": $tipo,"material": $material},
			url:   'Controlador/Materiales/buscarDetallesMantenedor.php',
			type:  'post',
			beforeSend: function(){
				//Lo que se hace antes de enviar el formulario
				},
			success: function(respuesta){
				//lo que se si el destino devuelve algo
				$("#detalleMaterial").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
//                selecciona_otro();
	}

}

//function buscarDetalles(){
//	
//	$tipo = $("#material").val();
//
//            selecciona_material($tipo);
//
//}


//Cubicar Medidas
function cubicarMedidas(){
    
    $alto = $("#alto").val();
    $largo = $("#largo").val();
    $ancho = $("#ancho").val();
    
    if($tipo==="2"){

        document.getElementById("div_medidas").style.display="block";
        document.getElementById("btn_cotizar").style.display="block";
        
    }else{
        document.getElementById("div_medidas").style.display="none";
    }
}
//Fin Cubicar Medidas
//Funciones para mostrar u ocultar divs
function ingresaMedidas(){
    $tipo = $("#construccion").val();
    
    if($tipo==="2"){
        document.getElementById("div_medidas").style.display="block";
        document.getElementById("btn_cotizar").style.display="block";
        document.getElementById("unidadMedida").style.display="block";
    }else{
        document.getElementById("btn_cotizar").style.display="none";
        document.getElementById("div_medidas").style.display="none";
        document.getElementById("unidadMedida").style.display="none";
    }
}
//Fin Funciones para mostrar u ocultar divs
//Validaciones
function soloNumeros(evt){
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) && theEvent.keyCode!='8' && theEvent.keyCode!='9'&& theEvent.keyCode!='46') {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

function isNumeric(o){
	//alert(o);
	r=(/^\d+(\.\d{1,2})?$/.test(o));
	//alert(r);
	return r;
}
//Fin Validaciones
//function activaCampos(){
function activaCampos(tipo_presu){
//    document.getElementById("alto").disabled=false;
//    document.getElementById("ancho").disabled=false;
//    document.getElementById("largo").disabled=false;

    if(tipo_presu == "presu"){
        document.getElementById("alto_presu").disabled=false;
        document.getElementById("ancho_presu").disabled=false;
        document.getElementById("largo_presu").disabled=false;
    }
    if(tipo_presu == "radier"){
        document.getElementById("alto_radier").disabled=false;
        document.getElementById("ancho_radier").disabled=false;
        document.getElementById("largo_radier").disabled=false;
    }
    if(tipo_presu == "muro"){
        document.getElementById("alto_muro").disabled=false;
        document.getElementById("ancho_muro").disabled=false;
        document.getElementById("largo_muro").disabled=false;
    }
    if(tipo_presu == "techo"){
        document.getElementById("aguas_techo").disabled=false;
        document.getElementById("ancho_techo").disabled=false;
        document.getElementById("largo_techo").disabled=false;
    }
    if(tipo_presu == "casa"){
        document.getElementById("alto_casa").disabled=false;
        document.getElementById("ancho_casa").disabled=false;
        document.getElementById("largo_casa").disabled=false;
    }
}

function cambiaUm(a,Um_presu){
   
    if(Um_presu == "presu"){
        alto=document.getElementById("alto_presu").value;
        ancho=document.getElementById("ancho_presu").value;
        largo=document.getElementById("largo_presu").value;
        if(a=="M"){
            document.getElementById("alto_presu").value=alto/100;
            document.getElementById("ancho_presu").value=ancho/100;
            document.getElementById("largo_presu").value=largo/100;        
        }else{
            document.getElementById("alto_presu").value=alto*100;
            document.getElementById("ancho_presu").value=ancho*100;
            document.getElementById("largo_presu").value=largo*100;          
        }
    }
    if(Um_presu == "radier"){
        alto=document.getElementById("alto_radier").value;
        ancho=document.getElementById("ancho_radier").value;
        largo=document.getElementById("largo_radier").value;
        if(a=="M"){
            document.getElementById("alto_radier").value=alto/100;
            document.getElementById("ancho_radier").value=ancho/100;
            document.getElementById("largo_radier").value=largo/100;        
        }else{
            document.getElementById("alto_radier").value=alto*100;
            document.getElementById("ancho_radier").value=ancho*100;
            document.getElementById("largo_radier").value=largo*100;          
        }
    }
    if(Um_presu == "muro"){
        alto=document.getElementById("alto_muro").value;
        ancho=document.getElementById("ancho_muro").value;
        largo=document.getElementById("largo_muro").value;
        if(a=="M"){
            document.getElementById("alto_muro").value=alto/100;
            document.getElementById("ancho_muro").value=ancho/100;
            document.getElementById("largo_muro").value=largo/100;        
        }else{
            document.getElementById("alto_muro").value=alto*100;
            document.getElementById("ancho_muro").value=ancho*100;
            document.getElementById("largo_muro").value=largo*100;          
        }
    }
    if(Um_presu == "techo"){
//        alto=document.getElementById("alto_techo").value;
        ancho=document.getElementById("ancho_techo").value;
        largo=document.getElementById("largo_techo").value;
        if(a=="M"){
//            document.getElementById("alto_techo").value=alto/100;
            document.getElementById("ancho_techo").value=ancho/100;
            document.getElementById("largo_techo").value=largo/100;        
        }else{
//            document.getElementById("alto_techo").value=alto*100;
            document.getElementById("ancho_techo").value=ancho*100;
            document.getElementById("largo_techo").value=largo*100;          
        }
    }
    if(Um_presu == "casa"){
        alto=document.getElementById("alto_casa").value;
        ancho=document.getElementById("ancho_casa").value;
        largo=document.getElementById("largo_casa").value;
        if(a=="M"){
            document.getElementById("alto_casa").value=alto/100;
            document.getElementById("ancho_casa").value=ancho/100;
            document.getElementById("largo_casa").value=largo/100;        
        }else{
            document.getElementById("alto_casa").value=alto*100;
            document.getElementById("ancho_casa").value=ancho*100;
            document.getElementById("largo_casa").value=largo*100;          
        }
    }
}

function imprSelec(muestra){
    var ficha=document.getElementById(muestra);
    var ventimp=window.open(' ','popimpr');
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}
function actvaAnchoMuro(){
    var casaOpandereta=document.getElementById("tipo_muro").value;
    
    if(casaOpandereta=='Pandereta'){
        document.getElementById("ancho_muro").value=0;
        document.getElementById("ancho_muro").readOnly=true;
    }else{
        document.getElementById("ancho_muro").readOnly=false;
    }
    //alert(document.getElementById("tipo_muro").value);
}
function actvaAnchoMuroAvanzado(){
    var casaOpandereta=document.getElementById("tipo_muro").value;
    
    if(casaOpandereta=='Pandereta'){
        document.getElementById("ancho_muro").value=0;
        document.getElementById("ancho_muro").readOnly=true;
        document.getElementById("detallePuerta").disabled=true;
        document.getElementById("detalleVentana").disabled=true;
    }else{
        document.getElementById("ancho_muro").readOnly=false;
        document.getElementById("detallePuerta").disabled=false;
        document.getElementById("detalleVentana").disabled=false;        
    }
    //alert(document.getElementById("tipo_muro").value);
}

//    1. 1 saco de cemento (42,5 kgs).
//    2. 93 lts de arena.
//    3. 160 lts de ripio.
//    4. 27 lts de agua.
//
//Esta mezcla rinde 167 lts.


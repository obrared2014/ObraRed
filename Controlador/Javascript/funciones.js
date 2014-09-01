function buscarMateriales(){
	
	$tipo = $("#tipo_material1").val();
	
	if($tipo === ""){
			$("#material1").html("<option value=''>Seleccione Material</option>");
	}else {
		$.ajax({
			dataType: "json",
			data: {"tipo_material": $tipo},
			url:   'Controlador/Materiales/buscar.php',
			type:  'post',
			beforeSend: function(){
				//Lo que se hace antes de enviar el formulario
				},
			success: function(respuesta){
				//lo que se si el destino devuelve algo
				$("#material1").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
	}
        
}   
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
function metrosCubicosRadier(){
//    alert("queeeee");
    var alto,ancho,largo,metrosCubicos,litros;
    alto=document.getElementById("alto").value;
    ancho=document.getElementById("ancho").value;
    largo=document.getElementById("largo").value;
    if(isNumeric(alto)&&isNumeric(ancho)&&isNumeric(largo)){
    var cemento=1;
    var arena=93;
    var ripio=160;
    var agua=27;
    
    var precioCemento=5000;
    var precioArena=16000;
    var precioRipio=18000;
    
    var mezcla;
    

    metrosCubicos=alto*ancho*largo;
    if(document.getElementById("centimetros").checked===true){
        metrosCubicos=metrosCubicos/1000000;
    }
    litros=metrosCubicos*1000;
    mezcla=litros/167;
    cemento=Math.round(cemento*mezcla);
    arena=Math.round((arena*mezcla));
    ripio=Math.round((ripio*mezcla));
    agua=Math.round(agua*mezcla);
    
    arena=arena/1000;
    ripio=ripio/1000;
    
    precioCemento=Math.round(precioCemento*cemento);
    precioArena=Math.round(precioArena*arena);
    precioRipio=Math.round(precioRipio*ripio);
    
        alert("Metros Cúbicos = "+metrosCubicos);   
        alert("Litros = "+litros); 
        alert("Cemento de 42,5 Kilos= "+cemento+", por un total de $"+precioCemento+".- pesos."); 
        alert("Arena = "+arena+"m3, por un total de $"+precioArena+".- pesos." ); 
        alert("Ripio = "+ripio+" m3, por un total de $"+precioRipio+".- pesos."); 
        alert("Agua = "+agua+" Litros"); 
        alert("El presupuesto aproximado es de $"+(precioArena+precioCemento+precioRipio)+".- pesos."); 

    }else{
        alert("Debe ingresar sólo valores numéricos");
    }
    
}

function activaCampos(){    
    document.getElementById("alto").disabled=false;
    document.getElementById("ancho").disabled=false;
    document.getElementById("largo").disabled=false;    
}

function cambiaUm(a){    
    alto=document.getElementById("alto").value;
    ancho=document.getElementById("ancho").value;
    largo=document.getElementById("largo").value; 
    if(a.value==="metros"){
        document.getElementById("alto").value=alto/100;
        document.getElementById("ancho").value=ancho/100;
        document.getElementById("largo").value=largo/100;        
    }else{
        document.getElementById("alto").value=alto*100;
        document.getElementById("ancho").value=ancho*100;
        document.getElementById("largo").value=largo*100;          
    }
}

//    1. 1 saco de cemento (42,5 kgs).
//    2. 93 lts de arena.
//    3. 160 lts de ripio.
//    4. 27 lts de agua.
//
//Esta mezcla rinde 167 lts.

//funciones formulario
function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57)) 
        event.returnValue = false;
}

function ValidaSoloLetras() {
 if ((event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

//validador de rut
$(document).ready(function(){
    $("#rut").Rut({
        format_on: 'keyup'
    })
    $('#rut').Rut({
        on_error: function(){ alert('Favor ingrese un rut correcto'); } 
    });
    $("#content > ul").tabs();
});

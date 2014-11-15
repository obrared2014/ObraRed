<?php

/* Archivo para funciones */
//include("datosBD.php");

function conectarDb($base,$port,$serv,$user,$pass){
        
    
	try{
//		$servidor = "localhost";
//		$puerto = "3306";
////		$basedatos = "db_obrared";
//		$usuario = "root";
//		$contrasena = "root";
	
		$conexion = new PDO("mysql:host=$serv;port=$port;dbname=$base",
							$user,
							$pass,
							array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $conexion;
	}
	catch (PDOException $e){
		die ("No se puede conectar a la base de datos". $e->getMessage());
	}
}

function devuelveTipoMaterial($base,$port,$serv,$user,$pass){
	$resultado = false;
	$consulta = "call tipos_materiales";
	
	$conexion = conectarDb($base,$port,$serv,$user,$pass);
	$sentencia = $conexion->prepare($consulta);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}

function devuelveMateriales($tipo = '',$basedatos,$puerto,$servidor,$usuario,$contrasena){
	$resultado = false;
	$consulta = "call lista_materiales";
	
	if($tipo != ''){
		$consulta .= "($tipo)";
	}
	
	$conexion = conectarDb($basedatos,$puerto,$servidor,$usuario,$contrasena);
	$sentencia = $conexion->prepare($consulta);
	$sentencia->bindParam('tipo_material',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}
function devuelveMaterialesDetalles($material = '',$base,$port,$serv,$user,$pass){
    
    
    
	$resultado = false;
	$consulta = "call lista_materiales_detalles";
	
	if($material != ''){
		$consulta .= "($material)";
	}
//	if($material == 'otro'){
//                $material='';
//		$consulta .= "($material)";
//	}	
	$conexion = conectarDb($base,$port,$serv,$user,$pass);
	$sentencia = $conexion->prepare($consulta);
	$sentencia->bindParam('material',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}
function traeDetallesMaterialesPresupuestos($nombreTipoConstruccion,$nombreMaterial,$base,$port,$serv,$user,$pass){
    
    	$resultado = false;
	$consulta="call materiales_detalles_presupuestos('$nombreTipoConstruccion','$nombreMaterial')";
	
	$conexion = conectarDb($base,$port,$serv,$user,$pass);
	$sentencia = $conexion->prepare($consulta);
	$sentencia->bindParam('material',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}
function traeDetallesMaterialesMantenedor($idTipo,$idMaterial,$base,$port,$serv,$user,$pass){
    
    	$resultado = false;
	$consulta="call materiales_detalles_mantenedor($idTipo,$idMaterial)";
	
	$conexion = conectarDb($base,$port,$serv,$user,$pass);
	$sentencia = $conexion->prepare($consulta);
	$sentencia->bindParam('material',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}
function mostrarMaterialesMantenedor($idMaterial,$base,$port,$serv,$user,$pass){
    
    	$resultado = false;
	$consulta="call mostrar_detalles_mantenedor($idMaterial)";
	
	$conexion = conectarDb($base,$port,$serv,$user,$pass);
	$sentencia = $conexion->prepare($consulta);
	$sentencia->bindParam('material',$estado);
	
	try {
		if(!$sentencia->execute()){
			print_r($sentencia->errorInfo());
		}
		$resultado = $sentencia->fetchAll();
		//$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		$sentencia->closeCursor();
	}
	catch(PDOException $e){
		echo "Error al ejecutar la sentencia: \n";
			print_r($e->getMessage());
	}
	
	return $resultado;
}
?>


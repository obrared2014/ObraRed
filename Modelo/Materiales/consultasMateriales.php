<?php

/* Archivo para funciones */
//include("conexion.php");
function conectarDb(){
	try{
		$servidor = "localhost";
		$puerto = "3306";
		$basedatos = "db_obrared";
		$usuario = "root";
		$contrasena = "root";
	
		$conexion = new PDO("mysql:host=$servidor;port=$puerto;dbname=$basedatos",
							$usuario,
							$contrasena,
							array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $conexion;
	}
	catch (PDOException $e){
		die ("No se puede conectar a la base de datos". $e->getMessage());
	}
}

function devuelveTipoMaterial(){
	$resultado = false;
	$consulta = "call tipos_materiales";
	
	$conexion = conectarDb();
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

function devuelveMateriales($tipo = ''){
	$resultado = false;
	$consulta = "call lista_materiales";
	
	if($tipo != ''){
		$consulta .= "($tipo)";
	}
	
	$conexion = conectarDb();
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
function devuelveMaterialesDetalles($material = ''){
	$resultado = false;
	$consulta = "call lista_materiales_detalles";
	
	if($material != ''){
		$consulta .= "($material)";
	}
//	if($material == 'otro'){
//                $material='';
//		$consulta .= "($material)";
//	}	
	$conexion = conectarDb();
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


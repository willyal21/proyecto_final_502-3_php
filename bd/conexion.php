<?php

include 'configuracion.php';
$tipo =$_POST['tipo'];

if($tipo == '1'){//CONSULTAR
    
    // Realizar una consulta SQL
    $sql = $_POST['query'];
    
    if (!$resultado = $mysqli->query($sql)) {
        
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        
        echo "Error: La ejecución de la consulta de tipo 1 falló debido a: \n";
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        echo "Filer: conexcion.php";
        exit;
    }
    
    if ($resultado->num_rows === 0) {
        
        echo "Lo sentimos. No se pudo encontrar datos para mostrar. Inténtelo de nuevo.";
        exit;
        
    }; 

    $columnas = $_POST['columnas'];
 
	$arr = array();
	$datos = '';
	$arreglo = '';
	$num = 0;
	
	while($row = $resultado->fetch_assoc()){
		
		for($i = 0; $i < count($columnas); $i++){
		
			$campo = $row [$columnas[$i]];
			$campo = '"'.$columnas[$i].'":"'.$campo.'"';
		
			if($i+1 < count($columnas)){$datos = $datos.$campo.',';}
			else{$datos = $datos.$campo;}
		
		}
		
		$arreglo = $arreglo.'{'.$datos.'},';
		$datos = '';
		
		
	}
	
	$arreglo = '['.$arreglo.']';
	echo $arreglo;
	
}

else if($tipo == '2'){ //ACTUALIZAR - INSERTAR
	
	$columnas = $_POST['columnas'];
	
	if(count($columnas) > 0){
	    
	    $sql = 'CALL '.$_POST['query'].'('.implode(",",$columnas).')';
	    
	}else{
	    
	    $sql = 'CALL '.$_POST['query'].'()';
	    
	}
	
	if (!$resultado = $mysqli->query($sql)) {
	    
	    echo "Lo sentimos, este sitio web está experimentando problemas.";
	    
	    echo "Error: La ejecución de la consulta de tipo 2 falló debido a: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
	    echo "Filer: conexcion.php";
	    exit;
	}
	
	while($row = $resultado->fetch_assoc()){
	    
	    $campo = $row;

	}
	
	echo implode($campo);
	
}

$mysqli->close();

?>
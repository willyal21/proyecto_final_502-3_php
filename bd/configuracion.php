<?php 
$user = "root";
$password = "";
$dbname = "curso_sc_506-3";
$host = "localhost";

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
    
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    echo "Filer: configuracion.php";
    exit;
}

?>
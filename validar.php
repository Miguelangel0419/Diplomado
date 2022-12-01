<?php
 
include_once("db.php");

$id_estudiante=$_POST["id_estudiante"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$carrera=$_POST["carrera"];

echo "<h2> Información recibida </h2>";
echo "los datos son los siguientes : <br>";
echo "El id del estudiante es: " . "$id_estudiante" . "<br>";
echo "El nombre es: " . "$nombre" . "<br>";
echo "El apellido es: " . "$apellido" . "<br>";
echo "El correo es: " . "$correo" . "<br>";
echo "La carrera es: " . "$carrera" . "<br>";

$conectar=conn();
$sql="INSERT INTO estudiantes (id_estudiante, nombre, apellido, correo, carrera)
VALUES ( '$id_estudiante', '$nombre', '$apellido', '$correo', '$carrera')";

$result = mysqli_query($conectar , $sql) or trigger_error("Query Falled! SQL- Error: ").mysqli_error($conectar); 

echo "$sql";


?>

<?php
//$id = $_POST['idLibro'];

$id = 1;

$servidor = "localhost:3306";
$basedatos = "baselibro";
$usuario = "root";
$password = "";
$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from libro where idLibro=$id";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);
//hola
?>
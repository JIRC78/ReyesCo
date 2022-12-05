<?php

$id = $_POST['idLibro'];

$servidor='localhost';
$basedatos='baselibro';
$usuario='root';
$password='';
//$port='3306';

//$idLibro=$_POST['par1'];

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "DELETE FROM libro WHERE idLibro LIKE $id";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

if($registros){
    header("Location:abc.html");
}
else{
    echo "arregla tu mamada";
}


?>
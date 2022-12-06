<?php
$id = $_POST['idLibro'];
$NOMBRE= $_POST['idNombre'];
$GENERO=$_POST['idGenero'];
$SUBGEN=$_POST['idsubGenero'];
$AUTOR=$_POST['idAutor'];
$IDIOMA=$_POST['idIdioma'];
$EDITORIAL=$_POST['idEditorial'];
$AÑO=$_POST['idAño'];


$servidor='localhost';
$basedatos='baselibro';
$usuario='root';
$password='';
//$port='3306';

//$idLibro=$_POST['par1'];

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "UPDATE libro SET Nombre = '$NOMBRE', Genero = '$GENERO', SubGenero = '$SUBGEN', Autor = '$AUTOR', Idioma = '$IDIOMA', Editorial = '$EDITORIAL', AÑO = '$AÑO' WHERE idLibro='$id'";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

if($registros){
    header("Location:abc.html");
}
else{
    echo "arregla tu mamada";
}






?>
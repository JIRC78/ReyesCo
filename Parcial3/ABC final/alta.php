<?php

$NOMBRE=$_POST['idNombre'];
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
$consulta = "INSERT INTO libro(Nombre, Genero, SubGenero, Autor, Idioma, Editorial, Año) VALUES('$NOMBRE','$GENERO','$SUBGEN','$AUTOR','$IDIOMA','$EDITORIAL','$AÑO')";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

if($registros){
    header("Location:abc.html");
}
else{
    echo "arregla tu mamada";
}





// try {
//     $con = new PDO($servidor,$usuario,$password,$basedatos);
// } catch(PDOException $e) {
//     echo "Error de conexion a la base de datos";
//     echo $e->getMessage();
//     exit();
// }

// //$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// try {
// $consultaSql = " Insert into libro (idLibro, Nombre, Genero, SubGenero, Autor, Idioma, Editorial, Año) VALUES ('$id',
// '$NOMBRE','$GENERO','$SUBGEN','$AUTOR','$IDIOMA','$EDITORIAL','$AÑO')";
// $consulta = $con -> prepare($consultaSql);
// $consulta -> execute();
// $consulta->closeCursor();
// echo "SE HAN INTRODUCIDO LOS DATOS DEL NUEVO REGISTRO CORRECTAMENTE";
// } catch(PDOException $e) {
//     echo "Error de consulta a la base de datos";
//     echo $e->getMessage();
// }


?>
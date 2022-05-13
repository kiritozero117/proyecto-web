<?php
include ("conexion.php");
$con=conectar();
  
$id=$_POST['id'];
$id_autor = $_POST['id_autor'];
$escritor=$_POST['escritor'];
$articulo=$_POST['articulo'];
$tema=$_POST['tema'];
$subtema=$_POST['subtema'];
$estatus=$_POST['estatus'];
$fecha=$_POST['fecha'];
$lugar=$_POST['lugar'];
$descu=$_POST['descu'];
$notas=$_POST['notas'];
$premios=$_POST['premios'];


$sql="INSERT INTO producto VALUES('$id', '$escritor', '$articulo', '$tema', '$estatus', '$fecha', '$lugar','$descu','$notas','$premios');";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
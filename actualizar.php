<?php

$nombres = !empty($_POST['txtnombre']) ? $_POST['txtnombre'] : '';
$app = !empty($_POST['txtapellidop']) ? $_POST['txtapellidop'] : '';
$apm = !empty($_POST['txtapellidom']) ? $_POST['txtapellidom'] : '';
$correo = !empty($_POST['txtcorreo']) ? $_POST['txtcorreo'] : '';
$nlinea =  !empty($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($nombres&&$app&&$apm&&$correo){
	include('conexion.php');
	$registro = "UPDATE usuarios set nombres='$nombres',app='$app',apm='$apm',correo='$correo' 
	WHERE id='$nlinea'";
	$resultado = mysqli_query($conexion,$registro);

}
header('Location: lista.php');
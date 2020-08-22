<?php
$nombres = !empty($_POST['txtnombre']) ? $_POST['txtnombre'] : '';
$app = !empty($_POST['txtapellidop']) ? $_POST['txtapellidop'] : '';
$apm = !empty($_POST['txtapellidom']) ? $_POST['txtapellidom'] : '';
$correo = !empty($_POST['txtcorreo']) ? $_POST['txtcorreo'] : '';

if($nombres&&$app&&$apm&&$correo){
    include('conexion.php');
    $consulta=<<<FIN
    insert into usuarios
    (nombres,app,apm,correo)
    values
    ('$nombres','$app','$apm','$correo')
FIN;
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
    }
}
header('Location: lista.php');
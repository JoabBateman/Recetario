<?php
 require_once('Conectandome.php');

$correo_email=$_POST['correo'];
$nombre_usuario=$_POST['nombre'];
$pass=password_hash($_POST['password'],PASSWORD_DEFAULT,['cost'=>15]);
//Senetncias de sql

$Registro_recetario="INSERT INTO  registro(correo_nombre_password)
     VALUES ('$correo_email','$nombre_usuario','$pass')";

    $comprobar=mysqli_query($connect,$Registro_recetario);

    if(!$comprobar){
        echo '<p>Oh no!, Hiciste algo mal :(<p/>';
    }else{
        echo '<p>Todo bien :)<p/>';
    }
?>
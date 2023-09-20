<?php
include("conexion.php");
if(isset($_POST['send'])){
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['mail'])>=1 &&
        strlen($_POST['message'])>=1
    ){
        $name = trim ($_POST['name']);
        $phone = trim ($_POST['phone']);
        $mail = trim ($_POST['mail']);
        $message = trim ($_POST['message']);
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) 
        VALUES ('$name', '$phone', '$mail', '$message')";
        $resultado = mysqli_query($conex, $consulta);
    }
}

if(isset($_POST['send1'])){
    if (
        strlen($_POST['placa']) >= 1 &&
        strlen($_POST['pesca']) >= 1 &&
        strlen($_POST['tpesca'])>=1 &&
        strlen($_POST['tpescado'])>=1
    ){
        $placa = trim ($_POST['placa']);
        $pesca = trim ($_POST['pesca']);
        $tpesca = trim ($_POST['tpesca']);
        $tpescado = trim ($_POST['tpescado']);
        $consulta = "INSERT INTO contenedor(placa, pesca, tpesca, tpescado) 
        VALUES ('$placa', '$pesca', '$tpesca', '$tpescado')";
        $resultado = mysqli_query($conex, $consulta);
    }
}
if(isset($_POST['send2'])){
    if (
        strlen($_POST['placa1']) >= 1 &&
        strlen($_POST['fechas']) >= 1 &&
        strlen($_POST['fechaf'])>=1 &&
        strlen($_POST['motivo'])>=1
    ){
        $placa1 = trim ($_POST['placa1']);
        $fechas = trim ($_POST['fechas']);
        $fechaf = trim ($_POST['fechaf']);
        $motivo = trim ($_POST['motivo']);
        $consulta = "INSERT INTO mantenimiento(placa1, fechas, fechaf, motivo) 
        VALUES ('$placa1', '$fechas', '$fechaf', '$motivo')";
        $resultado = mysqli_query($conex, $consulta);
    }
}
?>
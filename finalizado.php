<?php
$id=$_GET['id'];
include("conexion.php");
$sql="delete from mantenimiento where id='".$id."'";
$resultado = mysqli_query($conex, $sql);
if ($resultado) {
    echo "<script languaje='JavaScript'>
    alert('El mantenimiento fue realizado exitosamente');
    location.assign('mantenimientobarco.php');
    </script>";
}
?>
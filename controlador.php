<?php
if (!empty($_POST["send3"])){
    if (empty($_POST["user"]) and empty ($_POST["contra"])){
        echo "Los campos están vacíos";
    }else{
       $user=$_POST["user"];
       $contra=$_POST["contra"];
       $sql=$conex->query(" select * from usuarios where user='$user' and contra='$contra' ");
       if ($datos=$sql->fetch_object()){
        header("location: http://muelle-pesquero.azurewebsites.net/mantenimientobarco.php");
       }else{
        echo "Usuario no existente";
       }
    }
}
?>
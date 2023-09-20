<?php
            include("conexion.php");
            ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muelle_Pesquero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<header class="header"> 
        <div class="menu container">
            <a href="#" class="logo" ><img src="images/logo.png" class="menu-icono" alt="menu"> </a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu"> 
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="tecnicos.php">Salir</a></li>
                </ul> 
            </nav>
        </div>

        <div class="header-container container">
            <div class="header-txt">
                <h1>Mantenimiento de Barcos Pendientes</h1>
                <p>
                    A continuación se presentan los mantenimientos que están pendientes por hacer
                </p>
            </div>
           
        </div>
    </header> 
   
<div class="container">
    <h1 class="text-center" style="background-color: black; color:white" >Listado de mantenimientos pendientes</h1>
</div>
    <div class="container ">
    <div class="row">
        
        <table class="table">
        <tr>
            <th><b>Id</b></th>
            <th><b>Placa</b></th>
            <th><b>Fecha solicitud</b></th>
            <th><b>Fecha de fabricacion del barco</b></th>
            <th><b>Motivo</b></th>
            <th><b>Acciones</b></th>
        </tr>
<?php
$sql ="SELECT * from mantenimiento";
$result=mysqli_query($conex,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
    ?>
    <tr>
        <th><?php echo $mostrar ['id']?></th>
        <th><?php echo $mostrar ['placa1']?></th>
        <th><?php echo $mostrar ['fechas']?></th>
        <th><?php echo $mostrar ['fechaf']?></th>
        <th><?php echo $mostrar ['motivo']?></th>
        <th>
            <?php echo "<a href='finalizado.php?id=".$mostrar['id']."'  >Finalizado</a>";?>
        </th>
    </tr>
    <?php
}
?>
    </table>
        </div>

    </div>
</div>

   

    <footer class="footer">
        <div class="footer">
            <p style="text-align:center">MANTA - MANABÍ - ECUADOR © MUELLE PESQUERO "MANTA" 2023</p>

        </div>


    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muelle_Pesquero</title>
     <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header"> 
        <div class="menu container">
            <a href="#" class="logo" ><img src="images/logo.png" class="menu-icono" alt="menu"> </a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu"> 
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Volver al Inicio</a></li>
                </ul> 
            </nav>
        </div>

        <div class="header-container container">
            <div class="header-txt">
                <h1>Mantenimiento de Barcos</h1>
                <p>
                    En la presente pesataña se muestra un formulario en el cual puedes hacer la solicitud 
                    para la reparacion de un navío, el proceso es el siguiente:
                    <br></br>1. Ingresa la placa del barco  
                    <br></br>2. Ingresa la fecha de solicitud
                    <br></br>3. Ingresa fecha de fabricación
                    <br></br>4. Ingresa el motivo del mantenimiento

                </p>
            </div>
            <div class="header-img">
                <img src="images/img6.png" alt="">
            </div>
        </div>
    </header> 
    

   
    <section class="formulario container" id="contenedor">
        <form method="post" autocomplete="off">
            <h2> Solicitud para mantenimiento de barco</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="placa1" placeholder="Placa del barco">
                    <i class="fa-solid fa-ship"></i>
                </div>
                <div class="input-container">
                    <input type="text" name="fechas" placeholder="Fecha de la solicitud">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div class="input-container">
                    <input type="text" name="fechaf" placeholder="Fecha de fabricación">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div class="input-container">
                    <input type="text" name="motivo" placeholder="Motivo del mantenimiento">
                    <i class="fa-solid fa-message"></i>
                </div>
                <input type="submit" name="send2" class="btn" onClick="myFunction()">
                <div class="servicio-1">
                <a href="tecnicos.php" > <h3>Si eres técnico ingresa aquí</h3></a>
            </div>
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer">
            <p style="text-align:center">MANTA - MANABÍ - ECUADOR © MUELLE PESQUERO "MANTA" 2023</p>

        </div>


    </footer>
<?php
    include("send.php");
?>
<script>
    function myFunction(){
       window.location.href="https://muelle-pesquero.azurewebsites.net/"
    }
</script>

</body>

</html>
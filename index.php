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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul> 
            </nav>
        </div>

        <div class="header-container container">
            <div class="header-txt">
                <h1>Muelle Pesquero "Manta"</h1>
                <p>
                    Bienvenido al sistema de muelle pesquero de la ciudad de Manta en la siguiente página web
                    encontraras información sobre los servicios que ofrecemos al sector persquero, el cual es
                    una de las principales fuentes de ingreso de nuestra ciudad.    
                </p>
                <a href="#servicios" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="images/img1.png" alt="">
            </div>
        </div>
    </header> 
    <section class="about container" id="nosotros">
        <div class="about-img">
            <img src="images/img2.png" alt="">
        </div>
        <div>
            <h2 class="about-txt">
                Nosotros
            </h2>
            <p>
                Somos una entidad cuya meta es ofrecer al sector productivo pesquero ciertos servicios que sean de
                utilidad paara mejorar la calidad de procesos pesqueros cuando las embarcaciones arriban a nuestra ciudad
            </p>
        </div>

    </section>

    <main class="servicios" id="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-docker"></i>
                <a href="alquilercontenedores.php" > <h3>Alquiler de contenedores</h3></a>
            </div>

            <div class="servicios-content container">
            
                <div class="servicio-1">
                    <i class="fa-sharp fa-solid fa-ship"></i>
                    <a href="mantenimiento.php" > <h3>Mantenimiento de barcos</h3></a>
                </div>
        </div>

    </main>
    <section class="formulario container" id="contacto">
        <form method="post" autocomplete="off">
            <h2> Contactenos</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="mail" name="mail" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Detalle de la consulta"> </textarea>
                </div>
                <input type="submit" name="send" class="btn">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer"></div>
            <p style="text-align:center">MANTA - MANABÍ - ECUADOR © MUELLE PESQUERO "MANTA" 2023</p>

        </div>


    </footer>
<?php
    include("send.php");
    include("conexion.php");
?>

</body>

</html>
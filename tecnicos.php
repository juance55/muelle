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

        <section class="formulario container" id="contenedor">
        <form  method="post" >
            <h2> Ingrese sus credenciales</h2>
            <?php
            include("conexion.php");
            include("controlador.php");
            ?>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="user" placeholder="Ingrese su usuario">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="password" name="contra" placeholder="Ingrese su contraseña">
                    <i class="fa-solid fa-key"></i>
                </div>
                <input type="submit" name="send3" class="btn" >
                
            </div>
        </form>
    </section>
    </header> 
    

   
   

    <footer class="footer">
        <div class="footer">
            <p style="text-align:center">MANTA - MANABÍ - ECUADOR © MUELLE PESQUERO "MANTA" 2023</p>

        </div>


    </footer>



</body>

</html>
<?php

$conex = mysqli_init();
mysqli_ssl_set($conex,NULL,NULL, "ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conex, "dbhoteleria.mysql.database.azure.com", "Administrador", "Autenticacion1234", "muelle_pesquero", 3306, MYSQLI_CLIENT_SSL);
?>

 
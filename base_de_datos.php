<?php
/*
================================
Este archivo se encarga de conectar a la base de datos
y traer un objeto PDO

Recuerda cambiar tus credenciales, y tal vez ponerlas en
un archivo env: https://parzibyte.me/blog/2018/06/30/leer-archivo-configuracion-ini-php/
================================
 */
$passwd = "H380a140Z1$1nf";
$usuario = "azureOp";
$nombreBaseDeDatos = "dbtest";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
#$rutaServidor = "dbtestdev.database.windows.net";
$rutaServidor = "dbtestdev.ad.heb.com.mx";

try {
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos;Encrypt=true;TrustServerCertificate=true", $usuario, $passwd);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


#catch (Exception $e) {
#    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
#}

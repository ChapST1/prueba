<?php
//iniciar las variables 
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $base = "sales";

    //iniciar el controlador de errores
    //para capturar los posibles errores

    //PDO
    try {
        $con =  new PDO ( "mysql:host = $servidor; dbname = $base;", $usuario, $password);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Base de datos conectada correctamente....";
    } catch (Exception $e) {
        echo "Se encontrO un error : " . $e -> getMesagge();
    }

?>

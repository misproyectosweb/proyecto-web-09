<?php

    // Se crea una conexión a la base de datos. El constructor solicita tres argumentos:
    // 1-) DSN  Orígen de los datos. Indica el controlador de la base de datos y los parámetros de la conexión: Ip del servidor y nombre de la BD
    // 2-) DB_USER  Nombre de usuario de la base de datos
    // 3-) DB_PASS  Contraseña de la base de datos para ese usuario
    // 4-) DB_OPTIONS  Opciones de conexión (opcional)

    // Para saber si la conexión a la base de datos fue exitosa o se produjo un error se utiliza
    // una estructura try..catch..finally
    try {
        // Opciones de la conexión
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        
        // Objeto PDO, Controlador de BD, IP del servidor o localhost, nombre de la BD, usuario y contraseña
        // Para insertar datos en MariaDB
        $objetoPDO = new PDO('mysql:host=localhost:3310;dbname=clientestaller','root','', $opciones);
        
        // Para insertar datos en MySQLServer
//        $objetoPDO = new PDO('mysql:host=localhost:3306;dbname=clientestaller','root','<clave>', $opciones);
    }
    catch(PDOException $error){
        echo "ERROR: " . $error->getMessage();
    }


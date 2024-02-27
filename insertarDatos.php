<?php

    // Solictamos el archivo de conexión a la base de datos
    require 'conectar.php';
    
    // Recibimos los datos ingresados a los campos
    $nombre = filter_input(INPUT_POST, 'nombre');
    $correo = filter_input(INPUT_POST, 'correo');
    $direccion = filter_input(INPUT_POST, 'direccion');
    $telcasa = filter_input(INPUT_POST, 'telcasa');
    $telcelular = filter_input(INPUT_POST, 'telcelular');                   
    
    // Creamos la consulta para insertar datos
    $consulta = $objetoPDO->prepare("INSERT INTO datosclientes(Nombre, Correo, Direccion, Telefono_casa, Telefono_celular) VALUES(:nombre,:correo,:direccion,:telcasa,:telcelular)");
    
    // Creamos el vínculo entre los campos de la base de datos y los datos almacenados en las variables del formulario
    $consulta->bindParam(':nombre',$nombre);    
    $consulta->bindParam(':correo',$correo);
    $consulta->bindParam(':direccion',$direccion);
    $consulta->bindParam(':telcasa',$telcasa);
    $consulta->bindParam(':telcelular',$telcelular);
    
    // El condicional nos permite si la consulta se ejecutó con exito o no
    if($consulta->execute()) {
        
//        echo '<script>'.'location.href="index.php"'. '</script>';
        
        include 'msgConfirmacion.php';
    }
    else {
        
//        echo '<script>'.'location.href="index.php"'. '</script>';
        
        include 'msgError.php';
    }
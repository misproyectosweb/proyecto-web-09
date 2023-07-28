<?php

    /* 
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    
    // Realizamos las validaciones para el formulario. Verificamos si existe algún elemento con el nombre 'submit'
    if(isset($_POST['nombre'])) {
        
        // Verifica si el campo 'nombre' está vacío
        if(empty(filter_input(INPUT_POST, 'nombre'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega tu nombre</p>";                 
        } 
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen(filter_input(INPUT_POST, 'nombre')) < 10) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Debes agregar nombre y dos apellidos y solamente se permiten letras</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu nombre de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
        // Verifica si el campo 'correo' está vacío
        if(empty(filter_input(INPUT_POST, 'correo'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega tu dirección de correo</p>";
        }
        
        // Esta función verifica que el contenido de la variable sea el correcto usando el filtro especificado
        else if (!filter_var(filter_input(INPUT_POST, 'correo'), FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Has escrito mal tu dirección de correo</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu dirección de correo de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
        // Verifica si el campo 'direccion' está vacío
        if(empty(filter_input(INPUT_POST, 'direccion'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega la dirección donde resides</p>";                 
        } 
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen(filter_input(INPUT_POST, 'direccion')) < 10) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Debes agregar una dirección más específica</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste la direccion de forma correcta</p>";
        }
                
        // *****************************************************************************************************************

        // Verifica si el campo del teléfono de la casa está vacío        
        if(empty(filter_input(INPUT_POST, 'telcasa'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega el número teléfono de tu casa</p>";
        } 
        
        // Verifica que los datos ingresados no sean diferentes a valores numéricos
        else if (!is_numeric(filter_input(INPUT_POST, 'telcasa'))) {    
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: No se permiten letras, espacios ni símbolos como número telefónico</p>";
        }
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen(filter_input(INPUT_POST, 'telcasa')) < 8) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: La cantidad de números ingresados no corresponde a un número telefónico</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste el número telefónico de tu casa de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
        // Verifica si el campo del teléfono celular o móvil está vacío        
        if(empty(filter_input(INPUT_POST, 'telcelular'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega el número telefónico de tu celular</p>";
        } 
        
        // Verifica que los datos ingresados no sean diferentes a valores numéricos
        else if (!is_numeric(filter_input(INPUT_POST, 'telcelular'))) {    
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: No se permiten letras, espacios ni símbolos como número telefónico</p>";
        }
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen(filter_input(INPUT_POST, 'telcelular')) < 8) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: La cantidad de números ingresados no corresponde a un número telefónico</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste el número telefónico de tu celular de forma correcta</p>";
        }
                                        
        if(isset($_POST['submit'])) {
            require 'enviarCorreo.php';
        }
    }        
    

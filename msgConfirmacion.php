<!DOCTYPE html>

<!-- Mensaje para confirmar y agradecer al usuario por reservar la cita de servicio -->

<html lang="es">
    <head>
        <title>Confirmación</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>
        <link href="css/msjCorreo.css" rel="stylesheet" type="text/css"/>
        
        <!-- Utilizando google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400&display=swap" rel="stylesheet">
        
        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <!-- Utilizando iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
    </head>
    <body class="fondoCorreo">
        <div class="colorFondo">                    
            <div class="container py-5">
                <div class="row justify-content-center py-4">
                    <i class="bi bi-check-circle" style="font-size: 5rem; color:green"></i>
                </div>
                <div class="row justify-content-center py-4">
                    <h1 class="mb-0">Su solicitud de servicio fue enviada con éxito</h1>
                </div>
                <div class="row justify-content-center pb-5">
                    <h5 class="mb-0">Nos pondremos en contacto con usted a la mayor brevedad posible</h5>
                </div>        
                <div class="row justify-content-center py-4">
                    <img src="imagenes/LogoTaller_3.png" class="img-fluid" width="275" alt="Logo taller">                
                </div>
                <div class="row justify-content-center py-4">
                    <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Volver a inicio</a>
                </div> 
                <div class="row justify-content-around mt-5 border-bottom border-top border-secondary">    
                    <div class="my-2">                
                        <a href="#" target="_blank"><i class="bi bi-facebook text-primary" style="font-size: 2rem; color:black"></i></a>
                    </div>                
                    <div class="my-2">                
                        <a href="#" target="_blank"><i class="bi bi-whatsapp text-success" style="font-size: 2rem; color:black"></i></a>
                    </div>
                    <div class="my-2">                
                        <a href="#" target="_blank"><i class="bi bi-instagram text-danger" style="font-size: 2rem; color:black"></i></a>
                    </div>
                    <div class="my-2">                
                        <a href="#" target="_blank"><i class="bi bi-youtube text-danger" style="font-size: 2rem; color:black"></i></a>
                    </div>    
                </div>
            </div>
        </div>
                                
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        
        <?php
            // put your code here
        ?>
    </body>
</html>
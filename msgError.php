<!DOCTYPE html>

<!-- Mensaje que le indica al usuario que su solicitud no pudo ser enviada -->

<html lang="es">
    <head>
        <title>Error</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>
        <link href="css/msjCorreo.css" rel="stylesheet" type="text/css"/>
        
        <!-- Utilizando google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans:ital@0;1&display=swap" rel="stylesheet">
        
        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <!-- Utilizando iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    </head>
    <body class="fondoCorreo vh-100">
        <div class="colorFondo vh-100">                    
            <div class="container vh-100">
                <div class="row justify-content-center py-4">
                    <div class="d-flex flex-column">
                        <div class="text-center">
                            <i class="bi bi-x-circle" style="font-size: 5em; color:red"></i>
                        </div>
                        <div class="text-center py-3">
                            <h1 class="h1 mb-0 font-weight-bold">Su solicitud y comentarios no pudieron ser enviados</h1>
                        </div>
                        <div class="text-center py-3">
                            <h5 class="h5 mb-0">Revisa tu conexión a internet y vuelve a enviar tu solicitud</h5>
                        </div>
                        <div class="text-center py-3">
                            <img src="imagenes/LogoTaller.png" class="img-fluid w-25" alt="Logo sitio web taller">
                        </div>
                        <div class="text-center py-3">
                            <a href="index.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Volver a inicio</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around border-bottom border-top border-secondary">    
                    <div class="py-2">                
                        <a href="https://www.facebook.com/" target="_blank"><i class="iconoRedes bi bi-facebook text-primary"></i></a>
                    </div>                                    
                    <div class="py-2">                
                        <a href="http://instagram.com/" target="_blank"><i class="iconoRedes bi bi-instagram text-danger"></i></a>
                    </div>
                    <div class="py-2">                
                        <a href="https://www.pinterest.com/" target="_blank"><i class="iconoRedes bi bi-pinterest text-danger"></i></a>
                    </div>
                    <div class="py-2">                
                        <a href="http://www.youtube.com/" target="_blank"><i class="iconoRedes bi bi-youtube text-danger"></i></a>
                    </div>
                    <div class="py-2">                
                        <a href="https://twitter.com/" target="_blank"><i class="iconoRedes fa-brands fa-x-twitter text-dark"></i></a>
                    </div>
                    <div class="py-2">                
                        <a href="https://web.whatsapp.com/" target="_blank"><i class="iconoRedes bi bi-whatsapp text-success"></i></a>
                    </div>
                </div>                    
            </div>
        </div>
        
        <?php
        // put your code here
        ?>
                                
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        
    </body>
</html>
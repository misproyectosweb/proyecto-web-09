<!DOCTYPE html>

<!-- Creación de una Landing Page o página de aterrizaje para el taller de servicio automotriz -->

<html lang="es">
    <head>
        <title>Taller Enterprise</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>
                
        <!-- Utilizando google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400&display=swap" rel="stylesheet">

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <!-- Utilizando Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
        <!-- Archivos css -->
        <link rel="stylesheet" type="text/css" href="css/inicio.css">
        <link rel="stylesheet" href="librerias/sweetalert2.min.css">
                
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $telcasa = filter_input(INPUT_POST, 'telcasa');
                $telcelular = filter_input(INPUT_POST, 'telcelular');                
            } 
        ?>
        
        <main>            
            <div class="container-fluid imgFondo">
                <div class="row pt-3" style="background-color: rgba(0, 0, 0, 0.4);">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-3">
                        
                    </div>
                    <div class="col-6 d-flex flex-row justify-content-end align-items-center">
                        <a href="#"><i class="bi bi-facebook mx-4"></i></a> 
                        <a href="#"><i class="bi bi-twitter mx-4"></i></a>                        
                        <a href="#"><i class="bi bi-whatsapp mx-4"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-4"></i></a>
                        <a href="#"><i class="bi bi-youtube mx-4"></i></a>
                    </div>
                </div>
                <div class="row colorFondo justify-content-center py-3">
                    <div class="text-center">
                        <img src="imagenes/imgServTaller_2.png" class="img-fluid" alt=""/>
                        <h1 class="texto text-white pb-2">Confíe la reparación de su automóvil con el mejor equipo</h1>
                        <h3 class="titulo text-white pb-2">Registrate y reserva una cita de servicio con nosotros</h3>
                        <div class="pt-4">
                            <a class="btn btn-primary btn-lg" href="#formulario" role="button">Comienza ahora</a>
                        </div>                             
                    </div>
                </div>
            </div>
            
            <div class="container-fluid bg-light">
                <div class="row border-dark-50 border-bottom">
                    <div class="col-3 my-4">
                        <div class="d-flex flex-row align-items-center">                        
                            <img src="imagenes/towTruckAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Servicio de asistencia:</small><br><small>Despreocúpese si se le presenta alguna falla mecánica. Nuestro servicio de grúa está disponible cuando usted lo necesite, las 24 horas del día, los 7 días de la semana. Sin costo adicional</small></p>
                        </div>                                                
                    </div>
                    <div class="col-3 my-4">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/qualityAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Calidad en cada trabajo:</small><br><small>Procuramos siempre revisar cada trabajo realizado de manera minuciosa, no dejando ningún detalle sin terminar. Nos aseguramos ques usted reciba un trabajo de calidad</small></p>
                        </div>
                    </div>
                    <div class="col-3 my-4">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/paperAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Trámites con su aseguradora:</small><br><small>En nuestra oficina le ayudaremos a gestionar sus trámites con la empresa aseguradora a la que usted esta afiliado. Procuramos en todo momento eficacia y eficiencia en su trámite</small></p>
                        </div>
                    </div>
                    <div class="col-3 my-4">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/workerAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Personal especializado:</small><br><small>Nuestro personal altamente calificado, utiliza lo último en tecnología, para diagnosticar y reparar las partes de su automóvil que lo requieran</small></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-center border-dark-50 border-right">
                        <div class="pt-4">
                            <h3 class="titulo">Visítanos y conoce más de cerca nuestra empresa</h3>
                            <div class="my-4">
                                <a class="btn btn-primary btn-lg" href="https://proyectoweb-taller-01.firebaseapp.com" target="_blank" role="button">Ir a nuestro sitio web</a>                            
                            </div>
                        </div>
                        <div class="pt-4">
                            <h3 class="titulo">Recibe gratis nuestro boletin informativo mensual</h3>
                            <div class="my-4">
                                <a class="btn btn-primary btn-lg" href="documentos/Boletin_mecanico_profesional.pdf" target="_blank" role="button">Consíguelo aquí</a>
                            </div>
                        </div>
                        <div>
                            <img src="imagenes/imgServTaller_4.png" class="img-fluid w-50 mt-5" alt=""/>
                        </div>
                    </div>
                    <div class="col-6 my-4 pl-4">
                        <h3 class="text-center titulo font-weight-bold">¡Contáctanos!</h3>
                        <h3 class="text-center titulo pb-3">Es fácil, sencillo y rápido</h3>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" id="formulario" class="frmContacto needs-validation  d-flex justify-content-center" novalidate>
                            <div class="col-6 my-3 p-3 border border-border-dark-50 shadow">                                                            
                                <div class="form-group">
                                    <label for="nombre">Nombre completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group">
                                    <label for="telcasa">Teléfono casa:</label>
                                    <input type="tel" class="form-control" id="telcasa" name="telcasa" value="" placeholder="22334455" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group">
                                    <label for="telcelular">Teléfono celular:</label>
                                    <input type="tel" class="form-control" id="telcelular" name="telcelular" placeholder="88776655" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                
                                <input type="submit" id="boton" class="btn btn-primary" name="enviar" value="Enviar datos">
<!--                                <button type="submit" id="boton" class="btn btn-primary mt-2" data-toggle="modal" data-target="#btnEnviar">Enviar información</button>-->
                            </div>                                                        
                            
                            <?php
                                require 'validaciones.php';                                                                
                            ?>
                        </form>                        
                    </div>
                </div>                                               
            </div>
        </main>
        
        <!-- Código JavaScript aplicados al formulario -->
        <script>        
            // Función que permite la deshabilitación del envío de datos en formularios si hay campos inválidos
            (function() {
                'use strict';
                window.addEventListener('load', function() {

                    // Obtener todos los formularios a los que queremos aplicar estilos de validación personalizados
                    var forms = document.getElementsByClassName('needs-validation');

                    // Recorre los formularios y evita que el form se envíe de forma inmediata
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                        form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();                 
        </script>
                        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
                        
        <!-- Enlaces a librerías de javaScript -->
        <script src="librerias/sweetalert2.all.js" type="text/javascript"></script>
        
        <!-- Archivos JavaScript -->
        <script src="js/mensaje.js" type="text/javascript"></script>        
                                
        <?php
            // put your code here
        ?>
    </body>
</html>
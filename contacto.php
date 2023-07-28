<!DOCTYPE html>

<!-- Página donde se le permite al usuario registrar sus datos y concretar un servicio para el automóvil -->

<html lang="es">
    <head>
        <title>Contacto</title>
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
        <link href="css/contacto.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="librerias/sweetalert2.min.css">
        
        <!-- Utilizando animaciones para los elementos  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $telcasa = filter_input(INPUT_POST, 'telcasa');
                $telcelular = filter_input(INPUT_POST, 'telcelular');
                $marca = filter_input(INPUT_POST, 'marca');
                $modelo = filter_input(INPUT_POST, 'modelo');
                $anio = filter_input(INPUT_POST, 'anio');
                $servicios = filter_input(INPUT_POST, 'servicio');
                $fecha_cita = filter_input(INPUT_POST, 'fecha_cita');
                $hora_cita = filter_input(INPUT_POST, 'hora_cita');        
                $comentario = filter_input(INPUT_POST, 'comentario');
            } 
        ?>
        <main>
            <div class="container-fluid">
                <div class="row py-2 bg-light">
                    <div class="col-6 px-4 pt-2">                      
                        <h4 class="text-black-50 my-3">Envíanos un mensaje o concreta un cita:</h4>
                        <div class="bordegrande mb-3"></div>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="frmContacto needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-12 pb-2">
                                    <label><strong>Ingrese sus datos para contacto:</strong></label>
                                </div>       
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row pb-3">
                                <div class="form-group col-md-6">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección o domicilio" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telcasa">Teléfono casa:</label>
                                    <input type="tel" class="form-control" id="telcasa" name="telcasa" placeholder="Teléfono de casa" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telcelular">Teléfono celular:</label>
                                    <input type="tel" class="form-control" id="telcelular" name="telcelular" placeholder="Teléfono celular" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row border-dark-50 border-top pt-3">
                                <div class="col-md-12 pb-2">
                                    <label><strong>Ingrese los datos de su vehículo y seleccione el servicio que necesita:</strong></label>
                                </div>            
                                <div class="form-group col-md-3">
                                    <label for="marca">Marca del vehículo:</label>
                                    <select class="form-control" id="marca" name="marca" required>
                                        <option selected disabled value="">Elija una marca</option>
                                        <option>Marca 1</option>
                                        <option>Marca 2</option>
                                        <option>Marca 3</option>
                                        <option>Marca 4</option>
                                        <option>Marca 5</option>
                                    </select>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Elige la marca de tu automóvil</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="modelo">Modelo del vehículo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del vehículo" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>                
                                <div class="form-group col-md-3">
                                    <label for="anio">Año del vehículo:</label>
                                    <input type="text" class="form-control" id="anio" name="anio" placeholder="Año del vehículo" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>        
                            <div class="form-row py-2">
                                <div class="form-group col-md-12">                
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_1" name="servicio[]" value="Llantas">
                                        <label class="custom-control-label" for="serv_1">Llantas</label>                    
                                    </div>                
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_2" name="servicio[]" value="Motor">
                                        <label class="custom-control-label" for="serv_2">Motor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_3" name="servicio[]" value="Pintura">
                                        <label class="custom-control-label" for="serv_3">Pintura</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_4" name="servicio[]" value="Aceite">
                                        <label class="custom-control-label" for="serv_4">Aceite</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_5" name="servicio[]" value="Diagnostico">
                                        <label class="custom-control-label" for="serv_5">Diagnóstico</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_6" name="servicio[]" value="Aire_acondicionado">
                                        <label class="custom-control-label" for="serv_6">Aire acondicionado</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_7" name="servicio[]" value="Otros_servicios">
                                        <label class="custom-control-label" for="serv_7">Otro servicio</label>
                                    </div>
                                </div>            
                            </div>
                            <div class="form-row border-dark-50 border-top pb-2 pt-3"> 
                                <div class="col-md-12 pb-2">
                                    <label><strong>Elija el horario de su cita:</strong></label>
                                </div>       
                                <div class="form-group col-md-3">
                                    <label for="fcita">Fecha cita:</label>
                                    <input type="date" class="form-control" id="fcita" name="fecha_cita" min="2022-01-01" max="2024-12-31" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Seleccione la fecha de su cita</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="hcita">Hora cita:</label>
                                    <input type="time" class="form-control" id="hcita" name="hora_cita" min="07:30" max="17:00" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Seleccione la hora de su cita</div>
                                </div>
                            </div>          
                            <div class="form-row border-dark-50 border-top pt-3">
                                <div class="form-group col-md-12">
                                    <label for="comentario"><strong>Describa su solicitud de servicio o comentario adicional:</strong></label>
                                    <textarea class="form-control" cols="30" rows="5" id="comentario" name="comentario" required></textarea>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Favor realice una breve descripción del servicio que solicita</div>
                                </div>
                            </div>
                            
<!--                            <input type="submit" id="boton" class="btn btn-primary" name="enviar" value="Enviar datos">-->
                            <button type="submit" id="boton" class="btn btn-primary" data-toggle="modal" data-target="#btnEnviar">Enviar mensaje</button>
                            
                            <a class="btn btn-primary" href="index.php" role="button">Salir</a>
                                                                                                                                                                                                        
                            <!-- Mensaje de confirmación de envío de datos -->
                            <div class="modal fade" id="btnEnviar" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header align-items-center">
                                            <img src="imagenes/logotallercorreo.png" class="mr-5" width="100" alt=""/>                                                    
                                            <h5 class="modal-title ml-3" id="txtMensaje">Estado del mensaje</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center font-weight-bold">
                                            Su mensaje fue enviado correctamente
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            
                            <?php
                                require 'validaciones.php';
                            ?>
                            
                        </form>                        
                    </div>
                    
                    <div class="col-6 px-5 pt-4">
                        <img src="imagenes/imgServTaller_3.png" class="mx-auto d-block" alt=""/>
                        <img src="imagenes/imgServTaller_4.png" class="mx-auto d-block pt-4" alt=""/>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Código JavaScript aplicados al formulario -->
        <script>
            const opt = document.getElementsByClassName('opcion');
            const btn = document.querySelector('#boton');

            btn.onclick = () => {
                opt.value;
            };   

        </script>    
        
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
        
        <!-- Enlace y método JavaScript para utilizar las animaciones -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        
        <?php
            // put your code here
        ?>
        
    </body>
</html>

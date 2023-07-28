<!DOCTYPE html>

<!-- Creación de una Landing Page o página de aterrizaje para el taller de servicio automotriz -->

<html lang="es">
    <head>
        <title>Taller Enterprise</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/inicio.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>
        
        <!-- Utilizando google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400&display=swap" rel="stylesheet">

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <!-- Utilizando Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
        <!-- Utilizando animaciones para los elementos  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>        
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
                        <p class="h1 texto text-white pb-2">Confíe la reparación de su automóvil con el mejor equipo</p>
                        <p class="h3 titulo text-white pb-2">Registrate y reserva una cita de servicio con nosotros</p>
                        <div class="pt-4">
                            <a class="btn btn-primary btn-lg" href="contacto.php" role="button">Comienza ahora</a>
                        </div>                             
                    </div>
                </div>
            </div>
            
            <div class="container-fluid bg-light">
                <div class="row">
                    <div class="col-6 text-center mt-4 mb-2">
                        <p class="h3 titulo">Visítanos y conoce más de cerca nuestra empresa</p>
                        <div class="mt-4">
                            <a class="btn btn-primary btn-lg" href="https://proyectoweb-taller-01.firebaseapp.com" target="_blank" role="button">Ir a nuestro sitio web</a>                            
                        </div>
                    </div>
                    <div class="col-3 mt-4 mb-2">
                        <div class="d-flex flex-row align-items-center">                        
                            <img src="imagenes/towTruckAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Servicio de asistencia:</small><br><small>Despreocúpese si se le presenta alguna falla mecánica. Nuestro servicio de grúa está disponible cuando usted lo necesite, las 24 horas del día, los 7 días de la semana. Sin costo adicional</small></p>
                        </div>
                    </div>
                    <div class="col-3 mt-4 mb-2">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/paperAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Trámites con su aseguradora:</small><br><small>En nuestra oficina le ayudaremos a gestionar sus trámites con la empresa aseguradora a la que usted esta afiliado. Procuramos en todo momento eficacia y eficiencia en su trámite</small></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-center mt-4 mb-2">
                        <p class="h3 titulo">Recibe gratis nuestro boletin informativo mensual</p>
                        <div class="mt-4 mb-4">
                            <a class="btn btn-primary btn-lg" href="documentos/Boletin_mecanico_profesional.pdf" target="_blank" role="button">Consíguelo aquí</a>
                        </div>
                    </div>                    
                    <div class="col-3 mt-2 mb-4">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/qualityAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Calidad en cada trabajo:</small><br><small>Procuramos siempre revisar cada trabajo realizado de manera minuciosa, no dejando ningún detalle sin terminar. Nos aseguramos ques usted reciba un trabajo de calidad</small></p>
                        </div>
                    </div>
                    <div class="col-3 mt-2 mb-4">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/workerAzul48x48.png" class="mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Personal especializado:</small><br><small>Nuestro personal altamente calificado, utiliza lo último en tecnología, para diagnosticar y reparar las partes de su automóvil que lo requieran</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
                        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        
        <!-- Enlace y método JavaScript para utilizar las animaciones -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
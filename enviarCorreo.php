<?php
    
    // Se determina si una variable ha sido declarada y su valor no es NULO
    // Además determina si una variable está vacía o no
    if (isset ($_POST['nombre']) && !empty ($_POST['nombre']) && isset ($_POST['correo']) && !empty($_POST['correo']) &&
        isset ($_POST['direccion']) && !empty($_POST['direccion']) && isset ($_POST['telcasa']) && !empty($_POST['telcasa']) &&
        isset ($_POST['telcelular']) && !empty($_POST['telcelular']) && isset ($_POST['marca']) && !empty($_POST['marca']) &&
        isset ($_POST['modelo']) && !empty($_POST['modelo']) && isset ($_POST['anio']) && !empty($_POST['anio']) &&
        isset ($_POST['servicio']) && !empty($_POST['servicio']) && isset ($_POST['fecha_cita']) && !empty($_POST['fecha_cita']) &&
        isset ($_POST['hora_cita']) && !empty($_POST['hora_cita']) && isset ($_POST['comentario']) && !empty($_POST['comentario']))
    {        
        // Se reciben los datos enviados desde el formulario
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
        
        // Almacenamos en una variable los datos recibidos en el formulario, los cuales serán mostrados
        // como contenido en el cuerpo del mensaje de correo        
//        $mensajeCorreo = "Nombre: ".$nombre."<br>Correo: ".$correo."<br>Direccion: ".$direccion."<br>Teléfono casa: ".$telcasa."<br>Teléfono celular: ".$telcelular.
//                         "<br>Marca: ".$marca."<br>Modelo: ".$modelo."<br>Año: ".$anio."<br>Servicios: ".$servicios."<br>Fecha cita: ".$fecha_cita."<br>Hora cita: ".$hora_cita.
//                         "<br><br>Comentario: ".$comentario;
        
        $mensajeCorreo .= "Nombre: ".$nombre."<br>Correo: ".$correo."<br>Direccion: ".$direccion."<br>Teléfono casa: ".$telcasa."<br>Teléfono celular: ".$telcelular.
                          "<br>Marca: ".$marca."<br>Modelo: ".$modelo."<br>Año: ".$anio."<br>Fecha cita: ".$fecha_cita."<br>Hora cita: ".$hora_cita."<br>";
                                 
        $mensajeCorreo .= "Servicio(s): ";
                                
        if(!empty($_POST['servicio'])){

            $servicios = $_POST['servicio'];

            foreach($servicios as $t_servicios){
                $mensajeCorreo .= $t_servicios.", ";
            }                
        }            
                                                
        $mensajeCorreo .= "<br><br>Comentario: ".$comentario;
        
        // Archivo que se utiliza para llamar y cargar la librería
        require 'php/PHPMailerAutoload.php';

        // Crea una instancia de la librería para poder utilizar sus métodos
        $mail = new PHPMailer;

        try {
            // CONFIGURACION DEL SERVIDOR                         
            // Habilita la salida de depuración detallada - valor 0 para deshabilitar        
            // $mail->SMTPDebug = 3; 
            
            // Enviar mensajes de correo usando SMTP
            $mail->isSMTP();
            
            // Se establece y configure el servidor SMTP para enviar los mensajes
            $mail->Host = 'smtp.gmail.com';
            
            // Se habilita la autenticación SMTP
            $mail->SMTPAuth = true;
            
            // Nombre de usuario usado para el servidor SMTP
            $mail->Username   = 'pruebasproyectosweb000@gmail.com';
            
            // Contraseña que no es de acceso a Gmail. Es para que una app se pueda conectar a Google y pueda enviar los correos
            $mail->Password   = 'tycyjikysbxorcxg';
            
            // Se habilita el cifrado TLS implícito, `ssl` es también aceptado
            $mail->SMTPSecure = 'tls';
            
            // Puerto TCP al cual conectarse
            $mail->Port = 587;                                              

            // CONFIGURACION DEL DESTINATARIO
            //Dirección de correo que determina desde dónde se envía el correo o remitente
            $mail->setFrom('pruebasproyectosweb000@gmail.com', $nombre);
            
            //Dirección de correo que determinar el destinatario
            $mail->addAddress('pruebasproyectosweb000@gmail.com', 'Taller Enterprice');
            
            // CONTENIDO DEL MENSAJE
            // Establecer el formato de correo electrónico en HTML y el conjunto de caracteres
            $mail->isHTML(true);    
            $mail->Subject = 'Mensaje enviado desde nuestra página web';
            $mail->Body    = $mensajeCorreo;
            $mail->CharSet = 'UTF-8';

            // Se envía el mensaje
            $mail->send();

            // Traduce cualquier elemento codificado en UTF-8 de PHP a un string JSON. Recibe lo que deseamos convertir en notación JSON
            // y devuelve una cadena de texto con el JSON producido
            // Respuesta que se obtiene si el correo se envía satisfactoriamente
            echo json_encode('exito');
            
            // Cuando el cliente envíe el mensaje, el servidor SMTP debe enviar una respuesta para indicar que se recibió el mensaje.
            // Luego, el cliente debe enviar quit para finalizar la sesión o rset para enviar otro mensaje.
            $mail->smtpClose();
        }        
        catch (Exception $e) {

            // Respuesta que se obtiene si el envío del correo falla
            echo json_encode('error');            
        }
    }    
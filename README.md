# Proyecto Web 09
Esta es una landing page o página de aterrizaje

Este proyecto fue creado con las siguientes herramientas de nivel front-end y back-end:

- **HTML:**	Permite crear la estructura del sitio web mediante etiquetas
- **CSS:**	Para definir y crear la presentación del sitio web
- **Bootstrap:**	Herramienta utilizada para complementar las hojas de estilo CSS y personalizar la apariencia del sitio web
- **PHP:**	Favorece la conexión entre los servidores y la interfaz de usuario
- **MySQL:**	Gestor de bases de datos para almacenar los datos del usuario después de completar el formulario

Esta Landing Page o página web de aterrizaje fue creada y desarrollada usando la plataforma **NetBeans 12.0.** y el archivo **index.php** es el archivo que contiene la Landing Page

La página contiene dos secciones:

- **La primera sección:**
  - Presenta una imagen que intentará convencer al cliente de que esta empresa es la mejor opción para el diagnóstico y cuidado del automóvil

- **La segunda sección:**
  -	Presenta algunos de los beneficios que el cliente obtendrá al contratar los servicios del taller automotriz
  -	Muestra un botón que le brinda acceso al sitio web del taller automotriz para que el cliente pueda conocer más acerca de la empresa
  -	Muestra un botón con un enlace para que el usuario pueda obtener el boletín mensual que pone la empresa a disposición del usuario para que conozca más información acerca del mundo automotriz
  - Un formulario para que el cliente pueda comunicarse con el personal encargado del taller y poder concretar una cita de servicio

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript; así como validaciones del lado del servidor programado con el lenguaje de programación **PHP.**

La información del usuario ingresada en el formulario de contacto **se envía a una base de datos creada en MySQL server** utilizando la extensión **PHP Data Objects (PDO).** Esta define una interfaz ligera y consistente para acceder a bases de datos en PHP, lo que significa que, independientemente de la base de datos que se esté utilizando, se emplean las mismas funciones para realizar consultas y obtener datos con un controlador específico.

Entre otras características que permite llevar a cabo esta interfaz podemos mencionar:
-	Se encarga de mantener la conexión a la base de datos y otro tipo de conexiones específicas como transacciones
-	Crea instancias de la clase **PDOStatement,** la cual maneja las sentencias SQL y devuelve los resultados. 
-	La clase **PDOException** se utiliza para manejar los errores.

Finalmente, se utiliza un mensaje de aviso personalizado para mostrar al usuario que su solicitud fue enviada con éxito o, por el contrario, tuvo un inconveniente y no se pudo enviar

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![02  LandingPage_01](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/e2df60e1-9f4b-4f11-b1dd-68af16c873ed)
**==========================================================================**
![02  LandingPage_02](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/15f26add-da18-4d6e-9f90-8707366ecdd0)
**==========================================================================**
![02  LandingPage_03](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/ee6d3d70-a59c-4fd0-9624-abbc78a76dc4)
**==========================================================================**
![02  LandingPage_04](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/dc22c4c2-f39a-40c2-b44a-070919687b00)
**==========================================================================**
![imgLandingPage_7](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/22251442-b57a-4daa-97fd-facd1727dbee)
**==========================================================================**
![msjConfirmacion](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/91b5a837-bf76-4579-9947-cc6ebeb1bca9)
**==========================================================================**
![imgLandingPage_8](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/27511691-2505-4627-8129-fe805dadc927)
**==========================================================================**
![msjError](https://github.com/misproyectosweb/proyecto-web-09/assets/98922137/4fda239b-ecb7-460f-8db8-5b816b65bddc)
**==========================================================================**

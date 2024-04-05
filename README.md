# Proyecto Web 07
Sitio web que muestra y describe información de los servicios de un taller de servicio automotriz

Sitio web creado con las siguientes herramientas a nivel de front-end y back-end:

- **HTML:** 	Permite crear la estructura del sitio web mediante etiquetas
- **CSS:** 	Para definir y crear la presentación o estética del sitio web
- **Bootstrap:**	Herramienta utilizada para complementar las hojas de estilo CSS y personalizar la apariencia del sitio web
- **JavaScript:** 	Añade características que permite agregar e implementar acciones interactivas al sitio web
- **PHP:** 	Favorece la conexión entre los servidores y la interfaz de usuario

Este sitio web fue creado y desarrollado usando la plataforma **NetBeans 12.0.** Además está adaptado para ejecutarse en dispositivos móviles, como teléfonos, tablets, portátiles y computadoras de escritorio. El archivo **index.php** es el que contiene la página de inicio o página principal del sitio web

El sitio web en su totalidad consta de varias secciones: 
**1.	Un encabezado:** donde se muestra el logotipo de la organización y algunos datos de referencia para contacto
**2.	Un menú de navegación:** el cual contiene el menú de opciones de servicios y otras características de la empresa
**3.	Una sección principal:** el cual consta de cinco partes:
  -	**La primera parte** consta de una presentación del negocio a través de un carrusel de imágenes
  -	**La segunda parte** consta de un breve resumen que muestra las cualidades de la empresa
  -	**La tercera parte** consta de breves referencias a los servicios que ofrece la empresa
  -	**La cuarta parte** consta de un enlace que envía al usuario a un formulario donde él puede realizar sus comentarios y/o concretar una cita para un servicio a su automóvil
  -	**La quinta parte** consta de referencias breves a noticias del mundo automotriz y un enlace que envía al usuario a explorar y leer el resto de su contenido

**4.	Un pie de página:** muestra la información de contacto del negocio

El menú principal consta de cinco opciones:
  **1.	Inicio:** es la página principal del sitio web.
  **2.	Quienes somos:** muestra información acerca de la organización, tal como la visión, la misión y muestra además breves datos acerca del personal que trabaja en la empresa y el área de servicio donde labora
  **3.	Nuestros servicios:** muestra de manera más descriptiva y amplia los servicios que ofrece la empresa
  **4.	Noticias:** muestra noticias actualizadas del mundo automotriz con el fin de que el usuario conozca las últimas tendencias en este tipo de servicio
  **5.	Contáctenos:** presenta información variada que le permitirá al usuario conocer aspectos tales como la ubicación la empresa, el horario de servicio, servicios adicionales y un formulario que le permitirá al usuario realizar sus comentarios acerca del servicio recibido; así como la posibilidad de concretar citas para servicios al automóvil

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript como validaciones del lado del servidor programadas con el lenguaje de programación PHP.

Para enviar la información del usuario a través del formulario de contacto se utiliza una herramienta  llamada **PHPMailer.** Esta es una biblioteca de código abierto para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web. Además está basada en el componente active server ASPMail y permite de una forma sencilla tareas complejas como por ejemplo:
  -	Enviar mensajes de correo con ficheros adjuntos (attachments) 
  -	Enviar mensajes de correo en formato HTML 
  -	Enviar emails vía sendmail, PHP mail(), o con SMTP.

Finalmente, se utiliza una librería JavaScript llamada SweetAlert2 para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente en el formulario fueron enviados al buzón de correo del taller de forma correcta o incorrecta.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

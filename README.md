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
- **Un encabezado:** donde se muestra el logotipo de la organización y algunos datos de referencia para contacto
- **Un menú de navegación:** el cual contiene el menú de opciones de servicios y otras características de la empresa
- **Una sección principal:** el cual consta de cinco partes:

  -	**La primera parte** consta de una presentación del negocio a través de un carrusel de imágenes
  -	**La segunda parte** consta de un breve resumen que muestra las cualidades de la empresa
  -	**La tercera parte** consta de breves referencias a los servicios que ofrece la empresa
  -	**La cuarta parte** consta de un enlace que envía al usuario a un formulario donde él puede realizar sus comentarios y/o concretar una cita para un servicio a su automóvil
  -	**La quinta parte** consta de referencias breves a noticias del mundo automotriz y un enlace que envía al usuario a explorar y leer el resto de su contenido

- **Un pie de página:** muestra la información de contacto del negocio

El menú principal consta de cinco opciones:
  - **Inicio:** es la página principal del sitio web.
  - **Quienes somos:** muestra información acerca de la organización, tal como la visión, la misión y muestra además breves datos acerca del personal que trabaja en la empresa y el área de servicio donde labora
  - **Nuestros servicios:** muestra de manera más descriptiva y amplia los servicios que ofrece la empresa
  - **Noticias:** muestra noticias actualizadas del mundo automotriz con el fin de que el usuario conozca las últimas tendencias en este tipo de servicio
  - **Contáctenos:** presenta información variada que le permitirá al usuario conocer aspectos tales como la ubicación la empresa, el horario de servicio, servicios adicionales y un formulario que le permitirá al usuario realizar sus comentarios acerca del servicio recibido; así como la posibilidad de concretar citas para servicios al automóvil

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript como validaciones del lado del servidor programadas con el lenguaje de programación PHP.

Para enviar la información del usuario a través del formulario de contacto se utiliza una herramienta  llamada **PHPMailer.** Esta es una biblioteca de código abierto para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web. Además está basada en el componente active server ASPMail y permite de una forma sencilla tareas complejas como por ejemplo:
  -	Enviar mensajes de correo con ficheros adjuntos (attachments) 
  -	Enviar mensajes de correo en formato HTML 
  -	Enviar emails vía sendmail, PHP mail(), o con SMTP.

Finalmente, se utiliza una librería JavaScript llamada SweetAlert2 para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente en el formulario fueron enviados al buzón de correo del taller de forma correcta o incorrecta.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![01  inicio_1](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/9d1c0149-65c6-4c73-b199-cc5943be2552)
**==========================================================================**
![01  inicio_2](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/f4ef5f68-0f2d-4f8d-9389-11bd839bfebe)
**==========================================================================**
![01  inicio_3](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/d396159c-3794-49c4-8c5e-6d45fb66958b)
**==========================================================================**
![01  inicio_4](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/b4f6b6a1-2444-4269-8384-3b9c9c9b1bf8)
**==========================================================================**
![01  inicio_5](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/7682ef1f-5399-4233-97c5-071a118b9d76)
**==========================================================================**
![01  inicio_6](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/b68ef802-1959-4677-b9f3-5824b65437e7)
**==========================================================================**
![01  inicio_7](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/85b541cc-3512-4e01-942b-0f8a369a760e)
**==========================================================================**
![02  nosotros_1](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/b6f62d27-ec90-4ee3-8ab8-a9e39a9ced64)
**==========================================================================**
![02  nosotros_2](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/f13d7ca4-d886-4294-b021-0e3fe95bd09c)
**==========================================================================**
![02  nosotros_3](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/1dd07dc9-9643-4b67-81e0-8d9fea8181ae)
**==========================================================================**
![02  nosotros_4](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/a47836fa-7d57-4c36-9228-2151ea9712c0)
**==========================================================================**
![03  servicios_1](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/78a2fc20-b2ac-4785-beed-d5c865a48528)
**==========================================================================**
![03  servicios_2](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/625ce60e-eb94-420b-be9e-3c440bcedc37)
**==========================================================================**
![03  servicios_3](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/8f04cb69-479c-44e3-a8b9-a94bea075124)
**==========================================================================**
![03  servicios_4](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/c3c29168-38b7-42e3-8ab1-58917904a309)
**==========================================================================**
![03  servicios_5](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/b98b1ecb-9dab-4ecc-aaf6-7fad608bcd24)
**==========================================================================**
![04  noticias_1](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/f6156556-9040-4b48-830f-3298e3c67038)
**==========================================================================**
![04  noticias_2](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/53c654aa-f663-472e-9703-edc41f9eaef8)
**==========================================================================**
![04  noticias_3](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/49581e57-1e1d-4044-a309-7f8b7ff0f52c)
**==========================================================================**
![04  noticias_4](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/01655161-a26f-4904-936b-80c239625ca3)
**==========================================================================**
![05  contacto_1](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/12c1b6a8-9e6a-4931-bb6f-822219293f28)
**==========================================================================**
![05  contacto_2](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/7df988b3-6c7a-4f11-b451-20fd45893693)
**==========================================================================**
![05  contacto_3](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/6501b50f-d027-4e05-93ae-17e8f74fe61e)
**==========================================================================**
![05  contacto_4](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/38f26468-9c57-4c4c-9a2c-bff5333852df)
**==========================================================================**
![05  contacto_5](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/7e12f093-1705-4696-b684-6547fb41877d)
**==========================================================================**
![05  contacto_6](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/4e9b5e5e-f190-4706-93d9-8c515d81b4d9)
**==========================================================================**
![05  contacto_7](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/5dda8df2-a898-4664-b40d-17a93a29bf61)
**==========================================================================**
![05  contacto_8](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/b83e6951-007a-4c54-ba32-fa049c95b8cb)
**==========================================================================**

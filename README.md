# Proyecto Web 08
Sitio web que muestra y describe información de los servicios de un taller de servicio automotriz

Sitio web creado con las siguientes herramientas a nivel de front-end y back-end:

- **HTML:**	permite crear la estructura del sitio web mediante etiquetas
- **CSS:**	para definir y crear la presentación de del sitio web
- **JavaScript:**	añade características que permite establecer acciones interactivas al sitio web
- **Bootstrap:** utilizado para personalizar el sitio web y adaptarlo a la pantalla del dispositivo usado por el usuario
- **PHP:** favorece la conexión entre los servidores y la interfaz de usuario

Este sitio web fue creado y desarrollado usando la plataforma **NetBeans 12.0.** Además está adaptado para ejecutarse en dispositivos móviles, como teléfonos, tablets, portátiles y computadoras de escritorio.

El archivo **index.php** es el que contiene la página de inicio o página principal del sitio web

El sitio web en su totalidad consta de varias secciones: 
1.	Un encabezado: donde se muestra el logotipo de la organización y algunos datos de referencia para contacto
2.	Un menú de navegación: el cual contiene el menú de opciones de servicios y otras características de la empresa
3.	Una sección principal: el cual consta de cinco partes:
    - La primera parte consta de una presentación del negocio a través de un carrusel de imágenes
    - La segunda parte consta de un breve resumen que muestra las cualidades de la empresa
    - La tercera parte consta de breves referencias a los servicios que ofrece la empresa
    - La cuarta parte consta de un enlace que envía al usuario a un formulario donde él puede realizar sus comentarios y/o concretar una cita para un servicio a su automóvil
    - La quinta parte consta de referencias breves a noticias del mundo automotriz y un enlace que envía al usuario a explorar y leer el resto de su contenido
4.	Un pie de página: muestra la información de contacto del negocio

El menú principal consta de cinco opciones:

1.	Inicio: es la página principal del sitio web.
2.	Quienes somos: muestra información acerca de la organización, tal como la visión, la misión y muestra además breves datos acerca del personal que trabaja en la empresa y el área de servicio donde labora
3.	Nuestros servicios: muestra de manera más descriptiva y amplia los servicios que ofrece la empresa
4.	Noticias: muestra noticias actualizadas del mundo automotriz con el fin de que el usuario conozca las últimas tendencias en este tipo de servicio
5.	Contáctenos: presenta información variada que le permitirá al usuario conocer aspectos tales como la ubicación la empresa, el horario de servicio, servicios adicionales y un formulario que le permitirá al usuario realizar sus comentarios acerca del servicio recibido; así como la posibilidad de concretar citas para servicios al automóvil

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript como validaciones del lado del servidor programadas con el lenguaje de programación **PHP.**

Para enviar la información del usuario a través del formulario de contacto se utiliza una herramienta  llamada **PHPMailer.** Esta es una biblioteca de código abierto para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web. Además está basada en el componente active server ASPMail y permite de una forma sencilla tareas complejas como por ejemplo:
- Enviar mensajes de correo con ficheros adjuntos (attachments) 
- Enviar mensajes de correo en formato HTML 
- Enviar emails vía sendmail, PHP mail(), o con SMTP.

Finalmente, se utiliza una librería JavaScript llamada **SweetAlert2** para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente en el formulario fueron enviados al buzón de correo del taller de forma  correcta o incorrecta.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![taller_automotriz_01](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/4af0fc45-0e87-4938-aa0e-8ffe0c56cd08)
**==========================================================================**
![taller_automotriz_02](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/2871c4c6-809a-44b3-95e1-7a597d310c5f)
**==========================================================================**
![taller_automotriz_03](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/8ad95828-9db4-4170-af21-4ff19b9cc2fb)
**==========================================================================**
![taller_automotriz_04](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/e2c25ac0-9ff2-48b7-ba58-b62a97019091)
**==========================================================================**
![taller_automotriz_05](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/8602be6e-d7fe-453b-91ae-6b5f67089b18)
**==========================================================================**
![taller_automotriz_06](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/958246b0-c6aa-484b-8587-a8ce48021d1b)
**==========================================================================**
![taller_automotriz_07](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/9330dd2c-e35e-486a-8d2d-94c212408f42)
**==========================================================================**
![taller_automotriz_08](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/092493db-a900-4825-ba66-84f6e5425b2a)
**==========================================================================**
![taller_automotriz_09](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/4a748f23-c623-451f-81bc-38adca91d899)
**==========================================================================**
![taller_automotriz_10](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/16f67161-6830-45d0-9f0b-ccb5a5b29c50)
**==========================================================================**
![taller_automotriz_11](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/140b1ab2-4bf6-4d04-8e4a-c46e61e64b7a)
**==========================================================================**
![taller_automotriz_12](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/ea2694b6-ac2d-4435-b8e0-ecf0d13ada6f)
**==========================================================================**
![taller_automotriz_13](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/4d618e7e-f28b-4c8c-b6fe-4520b873ce24)
**==========================================================================**
![taller_automotriz_14](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/a1349651-1dee-421a-a5c9-e0c68dbd96af)
**==========================================================================**
![taller_automotriz_15](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/2f31c22d-4daf-483d-86e9-1f537e53588f)
**==========================================================================**
![taller_automotriz_17](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/b67b46fb-4686-4661-a0d4-b1dc860043a1)
**==========================================================================**
![taller_automotriz_18](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/dcf50b00-009a-4b94-92ae-a2d773d063ab)
**==========================================================================**
![taller_automotriz_19](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/681e74fc-215c-471b-88b8-925bfd158846)
**==========================================================================**
![taller_automotriz_22](https://github.com/misproyectosweb/proyecto-web-08/assets/98922137/4ba9352a-792a-4b46-878e-0f441e87d051)


# Proyecto Web 08
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

![01  inicio_00](https://github.com/user-attachments/assets/ba8339aa-bcae-4138-bde1-57ca1322fe58)
**==========================================================================**
![01  inicio_01](https://github.com/user-attachments/assets/802ae9f7-359c-40ca-98ee-1f5e65aead93)
**==========================================================================**
![01  inicio_02](https://github.com/user-attachments/assets/80a3bd01-b331-4556-9412-d645afdd5265)
**==========================================================================**
![01  inicio_03](https://github.com/user-attachments/assets/c6dcd170-b933-45c2-8672-4e137996cf3d)
**==========================================================================**
![01  inicio_04](https://github.com/user-attachments/assets/c41f0edf-4b8c-40b1-ae15-500f9a0e24bd)
**==========================================================================**
![01  inicio_05](https://github.com/user-attachments/assets/f6ad806e-5017-4f27-9d7b-1a3d7ac61749)
**==========================================================================**
![02  nosotros_01](https://github.com/user-attachments/assets/df7f3f08-066e-43f4-abba-36d0e1575c20)
**==========================================================================**
![02  nosotros_02](https://github.com/user-attachments/assets/e6786e80-299f-4107-bb51-a48131c96ce7)
**==========================================================================**
![02  nosotros_03](https://github.com/user-attachments/assets/8e184d47-0b82-48b6-b6ae-41d0298a14ca)
**==========================================================================**
![03  servicios_01](https://github.com/user-attachments/assets/5f824946-e466-496d-ac31-acebfff48be2)
**==========================================================================**
![03  servicios_02](https://github.com/user-attachments/assets/e1ebb0e9-62db-49cd-a7d2-edfcdd4009c2)
**==========================================================================**
![03  servicios_03](https://github.com/user-attachments/assets/469f9e03-1084-4630-8be6-020a8820ce3a)
**==========================================================================**
![03  servicios_04](https://github.com/user-attachments/assets/514e29b9-e92c-4b09-8be1-1beb06987b76)
**==========================================================================**
![04  noticias_01](https://github.com/user-attachments/assets/6ad69e37-9b81-4ad1-a880-9f786dc1cb46)
**==========================================================================**
![04  noticias_02](https://github.com/user-attachments/assets/8d130b5a-8885-4e2c-b7ae-1fc3f0f2635d)
**==========================================================================**
![04  noticias_03](https://github.com/user-attachments/assets/984e4756-e335-4f6f-97dc-a605508b73d3)
**==========================================================================**
![05  contacto_01](https://github.com/user-attachments/assets/aa750913-23bb-4fa0-9e71-a50785a8e0e8)
**==========================================================================**
![05  contacto_02](https://github.com/user-attachments/assets/3e217906-88aa-4344-9d4f-ba5152c1cede)
**==========================================================================**
![05  contacto_03](https://github.com/user-attachments/assets/6e653a7e-52f4-40c1-b031-f48238fd1584)
**==========================================================================**
![05  contacto_04](https://github.com/user-attachments/assets/84d87e88-5d75-40b2-bf9d-41183ad84ab4)
**==========================================================================**
![05  contacto_05](https://github.com/user-attachments/assets/d16edb11-6649-4525-a419-d583b87178cd)
**==========================================================================**
![05  contacto_06](https://github.com/user-attachments/assets/2de4176e-70d1-423b-9943-1df984a44a39)
**==========================================================================**
![05  contacto_07](https://github.com/user-attachments/assets/07daca1d-c3db-4811-905a-36256a4eedca)

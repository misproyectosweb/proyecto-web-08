<!DOCTYPE html>

<!-- Página principal del taller de serrvicio automotriz -->

<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Taller, Enterprice, Servicio, Equipo, Noticias, Contacto, Nosotros"/>
        <meta name="description" content="Bienvenidos a la página web del taller Enterprice, donde encontrará un amplio y variada oferta de servicios para el cuidado de su automóvil"/>
        <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- Utilizando google fonts -->        
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">

        <!-- Utilizando Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!-- Utilizando estilos css personalizados -->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="css/estilosInicio.css" rel="stylesheet" type="text/css"/>

        <!-- Utilizando animaciones para los elementos  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container-fluid">
                
                <!-- Encabezado -->
                <div class="row justify-content-between py-3 my-2">      
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-row justify-content-start align-items-center">
                        <img src="imagenes/LogoTaller_3.png" class="img-fluid w-50" alt="Logo taller">
                    </div>                    
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-row justify-content-center align-items-center">
                        <i class="iconHeader bi bi-envelope" style="color: cornflowerblue"></i>&nbsp;&nbsp;
                        <p class="mb-0">Escríbanos:<br>lorem_ipsum@mail.com</p>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-row justify-content-center align-items-center">
                        <i class="iconHeader bi bi-headset" style="color: cornflowerblue"></i>&nbsp;&nbsp;
                        <p class="mb-0">Llámenos:<br>800-1234-5678</p>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-row justify-content-center align-items-center">
                        <i class="iconHeader bi-alarm" style="color: cornflowerblue;"></i>&nbsp;&nbsp;
                        <p class="mb-0">Horario de servicio:<br>Lunes a sábado<br>7:30a.m. - 5:30p.m.</p>
                    </div>    
                </div>
                
                <!-- Menú de navegación -->
                <div class="row bg-secondary py-3">                    
                    <nav class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 px-0" id="navbarNav">
                        <ul class="nav nav-fill">
                            <li class="nav-item rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'maroon');" onmouseout="noResaltarOpcion('item_1', 'transparent')">
                                <a class="nav-link text-white" href="#"><i class="iconNav bi bi-house-fill text-white mr-2" style="font-size: 1.25rem;"></i>Inicio</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'maroon');" onmouseout="noResaltarOpcion('item_2', 'transparent')">
                                <a class="nav-link text-white" href="nosotros.php"><i class="iconNav bi bi-people-fill text-white mr-2" style="font-size: 1.25rem;"></i>Quienes somos</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'maroon');" onmouseout="noResaltarOpcion('item_3', 'transparent')">
                                <a class="nav-link text-white" href="servicios.php"><i class="iconNav bi bi-tools text-white mr-2" style="font-size: 1.25rem;"></i>Nuestros servicios</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'maroon');" onmouseout="noResaltarOpcion('item_4', 'transparent')">
                                <a class="nav-link text-white" href="noticias.php"><i class="iconNav bi bi-pencil-square text-white mr-2" style="font-size: 1.25rem;"></i>Noticias</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'maroon');" onmouseout="noResaltarOpcion('item_5', 'transparent')">
                                <a class="nav-link text-white" href="contacto.php"><i class="iconNav bi bi-envelope-open-fill text-white mr-2" style="font-size: 1.25rem;"></i>Contáctenos</a>
                            </li>
                        </ul>                        
                    </nav>                                       
                </div>
            </div>            
        </header>
        
        <main>
            <div class="container-fluid pt-3">
                
                <!-- Título -->
                <div class="titulo row justify-content-center bg-light">
                    <div class="text-center">
                        <h2 class="text-black-50 my-3">Bienvenidos</h2>
                    </div>
                    <div class="borde_gr"></div>
                </div>
                
                <!-- Carrusel de imagenes -->
                <div class="row">
                    <div id="carouselCaptions" class="carousel slide mt-5" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes/imgTaller_1.jpg" class="img-fluid mx-auto d-block w-100 border border-secondary rounded-lg img-thumbnail" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <div class="pb-4">
                                        <h2 class="mb-0">First slide label</h2>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="font-weight-light mb-0">Some representative placeholder content for the first slide</h3>
                                    </div>
                                    <div class="pb-5">
                                        <h5 class="font-weight-light mb-0">Some representative placeholder content for the first slide representative placeholder</h5>
                                    </div>
                                </div>
                            </div>                                            
                            <div class="carousel-item">
                                <img src="imagenes/imgTaller_2.jpg" class="img-fluid mx-auto d-block w-100 border border-secondary rounded-lg img-thumbnail" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <div class="pb-4">
                                        <h2 class="mb-0">First slide label</h2>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="font-weight-light mb-0">Some representative placeholder content for the first slide</h3>
                                    </div>
                                    <div class="pb-5">
                                        <h5 class="font-weight-light mb-0">Some representative placeholder content for the first slide representative placeholder</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/imgTaller_3.jpg" class="img-fluid mx-auto d-block w-100 border border-secondary rounded-lg img-thumbnail" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <div class="pb-4">
                                        <h2 class="mb-0">First slide label</h2>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="font-weight-light mb-0">Some representative placeholder content for the first slide</h3>
                                    </div>
                                    <div class="pb-5">
                                        <h5 class="font-weight-light mb-0">Some representative placeholder content for the first slide representative placeholder</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/imgTaller_11.jpg" class="img-fluid mx-auto d-block w-100 border border-secondary rounded-lg img-thumbnail" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <div class="pb-4">
                                        <h2 class="mb-0">First slide label</h2>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="font-weight-light mb-0">Some representative placeholder content for the first slide</h3>
                                    </div>
                                    <div class="pb-5">
                                        <h5 class="font-weight-light mb-0">Some representative placeholder content for the first slide representative placeholder</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselCaptions" data-slide="prev">
                            <span class="text-dark" aria-hidden="true"><i class="control-prev bi bi-caret-left-fill"></i></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselCaptions" data-slide="next">
                            <span class="text-dark" aria-hidden="true"><i class="control-next bi bi-caret-right-fill"></i></span>
                            <span class="sr-only">Next</span>
                        </button>        
                    </div>
                </div>
                
                <!-- Cualidades de la empresa -->
                <div class="row justify-content-center border-secondary-50 border-top mt-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h4 class="pt-4 text-center" data-aos="fade-right" data-aos-duration="2000">¿Por qué deben elegirnos?</h4>
                        <p class="text-secondary text-center mb-4" data-aos="fade-left" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div>
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center align-items-center" data-aos="zoom-in-up" data-aos-duration="2000">                
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="imagenes/tools_2.100.png" class="iconos">
                            <p class="mt-3 text-center text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                            <p class="text-center"><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                        </div>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="imagenes/car_2.100.png" class="iconos">
                            <p class="mt-3 text-center text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                            <p class="text-center"><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                        </div> 
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="imagenes/battery_2.100.png" class="iconos">
                            <p class="mt-3 text-center text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                            <p class="text-center"><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                        </div> 
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="imagenes/deal_2.100.png" class="iconos">
                            <p class="mt-3 text-center text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                            <p class="text-center"><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                        </div>                                        
                    </div>
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center align-items-center">                    
                        <a href="nosotros.php" class="btn btn-primary my-4" role="button" aria-pressed="true">Ir&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div> 
                
                <!-- Servicios ofrecidos -->
                <div class="row flex-column justify-content-center bg-light"> 
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mb-4">
                        <h4 class="pt-4" data-aos="fade-left" data-aos-duration="2000">Nuestros servicios</h4>
                        <p class="text-secondary text-center" data-aos="fade-right" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div>                          
                    <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">                 
                        <div class="col-12 col-sm-11 col-md-11 col-lg-11 col-xl-5">
                            <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-2 mb-3">
                                <img src="imagenes/tires_2.100.png" class="icono">&nbsp;&nbsp;&nbsp;&nbsp;                
                                <p class="text-secondary"><span class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:<br></span><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>                    
                        </div> 
                        <div class="col-12 col-sm-11 col-md-11 col-lg-11 col-xl-5">
                            <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-2 mb-3">
                                <img src="imagenes/wrench_2.100.png" class="icono">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:<br></span><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>                    
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-duration="2000">                 
                        <div class="col-12 col-sm-11 col-md-11 col-lg-11 col-xl-5">
                            <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-2 mb-3">
                                <img src="imagenes/airbrush_2.100.png" class="icono">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:<br></span><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>                    
                        </div> 
                        <div class="col-12 col-sm-11 col-md-11 col-lg-11 col-xl-5">
                            <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-2 mb-3">
                                <img src="imagenes/fuel_2.100.png" class="icono">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:<br></span><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>                    
                        </div> 
                    </div>
                    <div class="row d-flex justify-content-center pb-4" data-aos="fade-up" data-aos-duration="2000">        
                        <div class="col-12 col-sm-11 col-md-11 col-lg-11 col-xl-5">
                            <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-2 mb-3">
                                <img src="imagenes/tablet_2.100.png" class="icono">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:<br></span><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>                    
                        </div> 
                        <div class="col-12 col-sm-11 col-md-11 col-lg-11 col-xl-5">
                            <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-2 mb-3">
                                <img src="imagenes/airConditioner_2.100.png" class="icono">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:<br></span><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>                    
                        </div> 
                    </div>
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center">
                        <a href="servicios.php" class="btn btn-primary my-4" role="button" aria-pressed="true">Ir&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>
                    </div>    
                </div>
                
                <!-- Enlace a formulario para citas -->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex flex-column justify-content-center ml-0">
                    <h4 class="pt-4 text-center" data-aos="fade-left" data-aos-duration="2000">Programa en línea una cita con nosotros</h4>
                    <p class="text-secondary text-center pb-4 mb-2" data-aos="fade-right" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center">
                        <a href="contacto.php" class="btn btn-primary my-4" role="button" aria-pressed="true">Ir&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>
                    </div> 
                </div>
                
                <!-- Sección de noticias -->
                <div class="row justify-content-center bg-light">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <h4 class="pt-4 text-center" data-aos="fade-right" data-aos-duration="2000">Noticias recientes</h4>
                        <p class="text-secondary text-center pb-4" data-aos="fade-left" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div>
                    <div class="row justify-content-center my-3">                                 
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-1 mr-2" data-aos="zoom-in-down" data-aos-duration="2000">
                            <div class="d-flex flex-row align-items-center">
                                <div class="card border-0 bg-light">
                                    <img src="imagenes/image_blog_1.jpg" class="card-img-top rounded-lg" alt="noticia">
                                    <div class="card-body p-0 m-0 text-secondary">
                                        <p class="text-secondary py-1 mb-0"><small>Marzo 20, 2020&nbsp;|&nbsp;Escrito por: Charly&nbsp;|&nbsp;Fuente: Revista Mecánica</small></p>
                                        <p class="text-secondary pb-1 border-bottom border-dark-50"><small><i class="bi bi-eye"></i>&nbsp;&nbsp;132&nbsp;&nbsp;<i class="bi bi-chat-fill"></i>&nbsp;&nbsp;7&nbsp;</small></p>
                                        <p class="card-title"><span class="font-weight-bold text-uppercase">Es tiempo para cambiar sus llantas<br></span></p>
                                        <p class="card-text"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in massa et lectus condimentum rhoncus at in nulla. Phasellus non hendrerit libero. Praesent rutrum ante mauris, sagittis sodales ipsum ullamcorper eget. Duis placerat est ut dui ultrices pellentesque. Suspendisse id nunc id nisl sollicitudin aliquam. Nulla vestibulum gravida odio, ut placerat quam ullamcorper non. Cras feugiat aliquet varius...</small></p>                                        
                                        <a href="noticias.php" class="btn btn-primary mt-3" role="button" aria-pressed="true">Ver&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>                        
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-1 mr-2" data-aos="zoom-in-down" data-aos-duration="2000">
                            <div class="d-flex flex-row align-items-center">
                                <div class="card border-0 bg-light">
                                    <img src="imagenes/image_blog_3.jpg" class="card-img-top rounded-lg" alt="noticia">
                                    <div class="card-body p-0 m-0 text-secondary">
                                        <p class="text-secondary py-1 mb-0"><small>Marzo 20, 2020&nbsp;|&nbsp;Escrito por: Charly&nbsp;|&nbsp;Fuente: Revista Mecánica</small></p>
                                        <p class="text-secondary pb-1 border-bottom border-dark-50"><small><i class="bi bi-eye"></i>&nbsp;&nbsp;132&nbsp;&nbsp;<i class="bi bi-chat-fill"></i>&nbsp;&nbsp;7&nbsp;</small></p>
                                        <p class="card-title"><span class="font-weight-bold text-uppercase">Consejos de seguridad para conducir en verano<br></span></p>
                                        <p class="card-text"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in massa et lectus condimentum rhoncus at in nulla. Phasellus non hendrerit libero. Praesent rutrum ante mauris, sagittis sodales ipsum ullamcorper eget. Duis placerat est ut dui ultrices pellentesque. Suspendisse id nunc id nisl sollicitudin aliquam. Nulla vestibulum gravida odio, ut placerat quam ullamcorper non. Cras feugiat aliquet varius...</small></p>                                        
                                        <a href="noticias.php" class="btn btn-primary mt-3" role="button" aria-pressed="true">Ver&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-1" data-aos="zoom-in-down" data-aos-duration="2000">
                            <div class="d-flex flex-row align-items-center">
                                <div class="card border-0 bg-light">
                                    <img src="imagenes/image_blog_2.jpg" class="card-img-top rounded-lg" alt="noticia">
                                    <div class="card-body p-0 m-0 text-secondary">
                                        <p class="text-secondary py-1 mb-0"><small>Marzo 20, 2020&nbsp;|&nbsp;Escrito por: Charly&nbsp;|&nbsp;Fuente: Revista Mecánica</small></p>
                                        <p class="text-secondary pb-1 border-bottom border-dark-50"><small><i class="bi bi-eye"></i>&nbsp;&nbsp;132&nbsp;&nbsp;<i class="bi bi-chat-fill"></i>&nbsp;&nbsp;7&nbsp;</small></p>
                                        <p class="card-title"><span class="font-weight-bold text-uppercase">Piezas que deben reemplazarse y a qué intervalos<br></span></p>
                                        <p class="card-text"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in massa et lectus condimentum rhoncus at in nulla. Phasellus non hendrerit libero. Praesent rutrum ante mauris, sagittis sodales ipsum ullamcorper eget. Duis placerat est ut dui ultrices pellentesque. Suspendisse id nunc id nisl sollicitudin aliquam. Nulla vestibulum gravida odio, ut placerat quam ullamcorper non. Cras feugiat aliquet varius...</small></p>                                        
                                        <a href="noticias.php" class="btn btn-primary mt-3" role="button" aria-pressed="true">Ver&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>                          
                </div>                
            </div>
        </main>
        
        <!-- Pie de página -->
        <footer>
            <div class="container-fluid d-flex justify-content-center bg-secondary">
                <div class="row py-3">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"> 
                        <p class="text-white text-left font-weight-bold">Nuestra empresa:</p>            
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-house-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="nav-link text-white p-0">Inicio</a>         
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-people-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="nosotros.php" class="nav-link text-white p-0">Quienes somos</a>
                        </div>                
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-tools text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="servicios.php" class="nav-link text-white p-0">Nuestros servicios</a>
                        </div>
                        <div class="d-flex flex-row pb-2">                                        
                            <i class="bi bi-pencil-square text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="noticias.php" class="nav-link text-white p-0">Noticias</a>
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-envelope-open-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="contacto.php" class="nav-link text-white p-0">Contáctenos</a>
                        </div>                 
                    </div>        
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"> 
                        <p class="text-white text-left font-weight-bold">Siganos en redes sociales:</p>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-facebook text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" target="_blank" class="text-white">taller_enterprise</a>
                        </div>
                        <div class="d-flex flex-row pb-2">                    
                            <i class="bi bi-twitter text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" target="_blank" class="text-white">taller_enterprise</a>
                        </div>                
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-instagram text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" target="_blank" class="text-white">taller_enterprise</a>
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-youtube text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" target="_blank" class="text-white">taller_enterprise</a>
                        </div>
                    </div>         
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"> 
                        <p class="text-white text-left font-weight-bold">Nuestros servicios:</p>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-check-circle-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white text-left m-0">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-check-circle-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">consectetur adipiscing elit</p>
                        </div>                
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-check-circle-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">Morbi luctus malesuada</p>
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-check-circle-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">Cras feugiat aliquet quam</p>
                        </div> 
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-check-circle-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">Fusce pulvinar lobortis</p>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"> 
                        <p class="text-white text-left font-weight-bold">Información para contacto:</p>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-geo-alt-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white text-left m-0">Av. 1, st. 1, Lorem ipsum dolor, consectetur elit adipiscing</p>
                        </div>
                        <div class="d-flex flex-row pb-2">                    
                            <i class="bi bi-headset text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">800-123-enterprise</p>
                        </div>                
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-whatsapp text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">(+000) 1234-5678</p>
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-envelope-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <p class="text-white m-0">lorem_ipsum@mail.com</p>
                        </div>                                
                    </div>                             
                </div>
            </div>
            <div class="container-fluid bg-secondary">
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center border-white border-top text-center py-3">        
                    <p class="text-white mb-0">&copy;&nbsp;Lorem ipsum dolor sit amet 2022 - consectetur elit adipiscing</p>
                </div>   
            </div>                                                                                
        </footer> 
        
        <!-- JavaScript -->
        <script>            
            function ResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }

            function noResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }
        </script>
        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

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
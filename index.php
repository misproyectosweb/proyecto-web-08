<!DOCTYPE html>

<!-- Página principal del taller de servicio automotriz -->

<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Taller, Enterprice, Servicio, Equipo, Noticias, Contacto, Nosotros"/>
        <meta name="description" content="Bienvenidos a la página web del taller Enterprice, donde encontrará un amplio y variada oferta de servicios para el cuidado de su automóvil"/>
        
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoTools_1.png"/>

        <!-- Utilizando Bootstrap 4.6.1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">        

        <!-- Utilizando Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

        <!-- Utilizando iconos de Bootstrap y Fontawesome -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!-- Utilizando estilos css personalizados -->
        <link href="css/estilosInicio.css" rel="stylesheet" type="text/css"/>

        <!-- Utilizando animaciones para los elementos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center p-3">                                    
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <img src="imagenes/logoTaller_1.png" class="img-fluid w-50" alt="Logo taller">                                                
                    </div>                    
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-row justify-content-center align-items-center" style="color: cornflowerblue">
                        <i class="iconHeader bi bi-headset mr-3"></i>
                        <p class="mb-0">Línea gratuita:<br>800-1234-5678</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-row justify-content-center align-items-center" style="color: cornflowerblue">
                        <i class="iconHeader bi bi-calendar3 mr-3"></i>                            
                        <p class="mb-0">Lunes a sábado<br>7:30a.m. - 5:30p.m.</p>
                    </div>
                </div>
                                
                <div class="row justify-content-around align-items-center border-bottom border-white bg-secondary p-3">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 px-0">
                        <nav class="navbar navbar-dark px-0">
                            <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 d-flex flex-row justify-content-around align-items-center px-0">
                                <h3 class="mb-0 text-white">Visite nuestro sitio web y conozcanos más de cerca</h3>
                            </div>                    
                            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 d-flex flex-row justify-content-end align-items-center px-0">
                                <button id="btnMenu" class="navbar-toggler text-white border-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span><i class="fa-solid fa-bars text-white"></i></span>
                                </button>
                            </div>
                        </nav>
                    </div>                    
                </div>

                <div class="row bg-secondary">
                    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                        <ul id="menu" class="menu nav justify-content-around p-2">
                            <li class="nav-item rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'maroon');" onmouseout="noResaltarOpcion('item_1', 'transparent')">
                                <a class="nav-link text-white" href="#"><i class="iconNav bi bi-house-fill text-white mr-3"></i>Inicio</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'maroon');" onmouseout="noResaltarOpcion('item_2', 'transparent')">
                                <a class="nav-link text-white" href="nosotros.php"><i class="iconNav bi bi-people-fill text-white mr-3"></i>Quienes somos</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'maroon');" onmouseout="noResaltarOpcion('item_3', 'transparent')">
                                <a class="nav-link text-white" href="servicios.php"><i class="iconNav bi bi-tools text-white mr-3"></i>Nuestros servicios</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'maroon');" onmouseout="noResaltarOpcion('item_4', 'transparent')">
                                <a class="nav-link text-white" href="noticias.php"><i class="iconNav bi bi-pencil-square text-white mr-3"></i>Noticias</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'maroon');" onmouseout="noResaltarOpcion('item_5', 'transparent')">
                                <a class="nav-link text-white" href="contacto.php"><i class="iconNav bi bi-envelope-open-fill text-white mr-3"></i>Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Sección principal -->
        <main>
            
            <!-- Título -->
            <div class="titulo container-fluid d-flex flex-row justify-content-center px-0">
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center">
                    <h1 class="text-black-50 my-3 display-4 font-weight-bold">Bienvenidos</h1>
                    <div style="width: 100%;border-bottom: 0.25rem solid #a41313;"></div>
                </div>
            </div>
            
            <!-- Carrusel de imagenes -->
            <div class="carrusel container-fluid d-flex flex-row justify-content-center">
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div id="carouselCaptions" class="carousel slide my-5" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes/imgCarrusel_1.jpg" class="img-fluid img-thumbnail p-2 mx-auto d-block border border-secondary rounded-lg" alt="">
                                <div class="carousel-caption d-md-block fondoCaption"> 
                                    <h2 class="">First slide label</h2>
                                    <h3 class="mb-5 font-weight-light">Some representative placeholder content for the first slide</h3>                                    
                                </div>
                            </div>                                            
                            <div class="carousel-item">
                                <img src="imagenes/imgCarrusel_2.jpg" class="img-fluid img-thumbnail p-2 mx-auto d-block border border-secondary rounded-lg" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <h2 class="">First slide label</h2>
                                    <h3 class="mb-5 font-weight-light">Some representative placeholder content for the first slide</h3>                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/imgCarrusel_3.jpg" class="img-fluid img-thumbnail p-2 mx-auto d-block border border-secondary rounded-lg" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <h2 class="">First slide label</h2>
                                    <h3 class=" mb-5 font-weight-light">Some representative placeholder content for the first slide</h3>                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/imgCarrusel_4.jpg" class="img-fluid img-thumbnail p-2 mx-auto d-block border border-secondary rounded-lg" alt="">
                                <div class="carousel-caption d-md-block fondoCaption">                                    
                                    <h2 class="">First slide label</h2>
                                    <h3 class="mb-5 font-weight-light">Some representative placeholder content for the first slide</h3>                                    
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
            </div>
            
            <!-- Cualidades de la empresa -->
            <div class="cualidades container-fluid">                                
                <div class="row justify-content-center border-secondary-50 border-top py-5">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-7 text-center">
                        <h2 class="mb-0 pb-4" data-aos="fade-right" data-aos-duration="2000">¿Por qué deben elegirnos?</h2>
                        <p class="text-secondary" data-aos="fade-left" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sitamet metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div>
                </div>    

                <div class="row mb-5" data-aos="zoom-in-up" data-aos-duration="2000">                
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img src="imagenes/iconoInicio_01.png" class="img-fluid icono">
                        <p class="mt-3 text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                        <p class=""><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img src="imagenes/iconoInicio_02.png" class="img-fluid icono">
                        <p class="mt-3 text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                        <p class=""><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                    </div> 
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img src="imagenes/iconoInicio_03.png" class="img-fluid icono">
                        <p class="mt-3 text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                        <p class=""><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                    </div> 
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img src="imagenes/iconoInicio_04.png" class="img-fluid icono">
                        <p class="mt-3 text-uppercase"><strong>Lorem ipsum dolor</strong></p>
                        <p class=""><small>Quisque eu elit nulla. Vivamus vel urna eget urna fringilla hendrerit. Mauris a augue enim. Praesent pulvinar fermentum accumsan</small></p>
                    </div>
                </div>
                
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center mb-4">                    
                    <a href="nosotros.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver más<i class="bi bi-arrow-right ml-3"></i></a>
                </div>
            </div>
            
            <!-- Servicios ofrecidos -->    
            <div class="servicios container-fluid bg-light">
                <div class="row justify-content-center border-secondary-50 border-top py-5"> 
                    <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-7 text-center">
                        <h2 class="mb-0 pb-4" data-aos="fade-left" data-aos-duration="2000">Nuestros servicios</h2>
                        <p class="text-secondary" data-aos="fade-right" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sitamet metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5">
                        <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-3 my-3">
                            <img src="imagenes/iconoInicio_05.png" class="img-fluid icono mr-3">                                                                
                            <div>
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:</h6>
                                <p class="mb-1 text-secondary"><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                        </div>                    
                    </div> 
                    <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5">
                        <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-3 my-3">
                            <img src="imagenes/iconoInicio_06.png" class="img-fluid icono mr-3">
                            <div>
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:</h6>
                                <p class="mb-1 text-secondary"><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">                 
                    <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5">
                        <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-3 my-3">
                            <img src="imagenes/iconoInicio_07.png" class="img-fluid icono mr-3">
                            <div>
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:</h6>
                                <p class="mb-1 text-secondary"><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                        </div>                    
                    </div> 
                    <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5">
                        <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-3 my-3">
                            <img src="imagenes/iconoInicio_08.png" class="img-fluid icono mr-3">
                            <div>
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:</h6>
                                <p class="mb-1 text-secondary"><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                        </div>                    
                    </div> 
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">        
                    <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5">
                        <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-3 my-3">
                            <img src="imagenes/iconoInicio_09.png" class="img-fluid icono mr-3">
                            <div>
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:</h6>
                                <p class="mb-1 text-secondary"><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                        </div>                    
                    </div> 
                    <div class="col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5 mb-3">
                        <div class="d-flex flex-row align-items-center border border-primary rounded-lg bg-white p-3 my-3">
                            <img src="imagenes/iconoInicio_10.png" class="img-fluid icono mr-3">
                            <div>
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet:</h6>
                                <p class="mb-1 text-secondary"><small>Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                        </div>                    
                    </div> 
                </div>
                
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center pb-4">
                    <a href="servicios.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver más<i class="bi bi-arrow-right ml-3"></i></a>
                </div>                
            </div>
            
            <!-- Enlace a formulario para citas -->
            <div class="cita container-fluid">
                <div class="row justify-content-center border-secondary-50 border-top py-5">
                    <div class="text-center">
                        <img src="imagenes/iconoInicio_11.png" class="img-fluid w-75" alt=""/>
                    </div>
                </div>
                <div class="row mb-5 justify-content-center">                    
                    <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-7 text-center">
                        <h2 class="mb-0 pb-4" data-aos="fade-left" data-aos-duration="2000">Programa en línea una cita con nosotros</h2>
                        <p class="text-secondary" data-aos="fade-right" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sitamet metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div> 
                </div>  
                
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center mb-4">
                    <a href="contacto.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver más<i class="bi bi-arrow-right ml-3"></i></a>
                </div> 
            </div>
                        
            <!-- Sección de noticias -->
            <div class="noticias container-fluid bg-light">
                <div class="row justify-content-center border-secondary-50 border-top py-5">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-7 text-center">
                        <h2 class="mb-0 pb-4" data-aos="fade-right" data-aos-duration="2000">Noticias recientes</h2>
                        <p class="text-secondary" data-aos="fade-left" data-aos-duration="2000">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sitamet metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                    </div>
                </div>
                
                <div class="row pb-5 justify-content-around">
                    <div class="card">
                        <img src="imagenes/imgNoticias_1.jpg" class="img-fluid card-img-top rounded-lg pt-3 px-3" alt="imagen noticia">
                        <div class="card-body">
                            <p class="card-text mb-0 pb-2 text-secondary border-bottom border-dark-50"><small><strong>Publicado en:</strong> marzo 20, 2020</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Escrito por:</strong> Charles</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Fuente:</strong> Revista Mecánica</small></p>                                
                            <h5 class="card-title pt-2">¿Cuándo es el ideal tiempo para cambiar sus llantas?</h5>
                            <p class="card-text"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in massa et lectus condimentum rhoncus at in nulla. Phasellus non hendrerit libero. Praesent rutrum ante mauris, sagittis sodales ipsum ullamcorper eget. Duis placerat est ut dui ultrices pellentesque. Suspendisse id nunc id nisl sollicitudin aliquam. Nulla vestibulum gravida odio, ut placerat quam ullamcorper non. Cras feugiat aliquet varius...</small></p>
                            <a href="noticias.php" class="btn btn-primary mt-3" role="button" aria-pressed="true">Ver más<i class="bi bi-arrow-right ml-3"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="imagenes/imgNoticias_2.jpg" class="img-fluid card-img-top rounded-lg pt-3 px-3" alt="imagen noticia">
                        <div class="card-body">
                            <p class="card-text mb-0 pb-2 text-secondary border-bottom border-dark-50"><small><strong>Publicado en:</strong> marzo 20, 2020</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Escrito por:</strong> Charles</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Fuente:</strong> Revista Mecánica</small></p>                                                                
                            <h5 class="card-title pt-2">Piezas que deben reemplazarse y a qué intervalos</h5>
                            <p class="card-text"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in massa et lectus condimentum rhoncus at in nulla. Phasellus non hendrerit libero. Praesent rutrum ante mauris, sagittis sodales ipsum ullamcorper eget. Duis placerat est ut dui ultrices pellentesque. Suspendisse id nunc id nisl sollicitudin aliquam. Nulla vestibulum gravida odio, ut placerat quam ullamcorper non. Cras feugiat aliquet varius...</small></p>
                            <a href="noticias.php" class="btn btn-primary mt-3" role="button" aria-pressed="true">Ver más<i class="bi bi-arrow-right ml-3"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="imagenes/imgNoticias_3.jpg" class="img-fluid card-img-top rounded-lg pt-3 px-3" alt="imagen noticia">
                        <div class="card-body">
                            <p class="card-text mb-0 pb-2 text-secondary border-bottom border-dark-50"><small><strong>Publicado en:</strong> marzo 20, 2020</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Escrito por:</strong> Mary</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Fuente:</strong> Revista Mecánica</small></p>                                                                
                            <h5 class="card-title pt-2">Consejos de seguridad para conducir en el verano</h5>
                            <p class="card-text"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in massa et lectus condimentum rhoncus at in nulla. Phasellus non hendrerit libero. Praesent rutrum ante mauris, sagittis sodales ipsum ullamcorper eget. Duis placerat est ut dui ultrices pellentesque. Suspendisse id nunc id nisl sollicitudin aliquam. Nulla vestibulum gravida odio, ut placerat quam ullamcorper non. Cras feugiat aliquet varius...</small></p>
                            <a href="noticias.php" class="btn btn-primary mt-3" role="button" aria-pressed="true">Ver más<i class="bi bi-arrow-right ml-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Pie de página -->
        <footer class="bg-secondary">
            <div class="container-fluid">
                <div class="row p-5">
                    
                    <!-- Enlaces a las secciones -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <h5 class="h5 mb-3 text-white text-left font-weight-bold">Nuestra empresa:</h5>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-house-fill text-white mr-2"></i>Inicio</a>
                            <a href="nosotros.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-people-fill text-white mr-2"></i>Quienes somos</a>
                            <a href="servicios.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-tools text-white mr-2"></i>Nuestros servicios</a>
                            <a href="noticias.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-pencil-square text-white mr-2"></i>Noticias</a>
                            <a href="contacto.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-envelope-open-fill text-white mr-2"></i>Contáctenos</a>
                        </div>
                    </div>
                    
                    <!-- Redes sociales -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <h5 class="h5 mb-3 text-white text-left font-weight-bold">Síganos en redes:</h5>
                        <div class="list-group list-group-flush">
                            <a href="https://www.facebook.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-facebook text-white mr-2"></i>Taller Enterprice</a>  
                            <a href="https://web.telegram.org/k/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-telegram mr-2"></i>(+000) 1234-5678</a>  
                            <a href="https://twitter.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-brands fa-x-twitter mr-2"></i>Taller Enterprice</a>                            
                            <a href="http://instagram.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-instagram text-white mr-2"></i>Taller Enterprice</a>
                            <a href="http://www.youtube.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-youtube text-white mr-2"></i>Taller Enterprice</a>                            
                        </div>
                    </div>
                    
                    <!-- Servicios -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <h5 class="h5 mb-3 text-white text-left font-weight-bold">Nuestros servicios:</h5>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-check-circle-fill text-white mr-2"></i>Lorem ipsum dolor sit</a>
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-check-circle-fill text-white mr-2"></i>Consectetur adipiscing</a>
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-check-circle-fill text-white mr-2"></i>Morbi luctus malesuada</a>
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-check-circle-fill text-white mr-2"></i>Cras feugiat aliquet</a>
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-check-circle-fill text-white mr-2"></i>Fusce pulvinar lobortis</a>
                        </div>
                    </div>                 
                    
                    <!-- Localización -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <h5 class="h5 mb-3 text-white text-left font-weight-bold">Contáctenos:</h5>
                        <div class="list-group list-group-flush">
                            <a href="https://www.waze.com/es" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-brands fa-waze mr-2"></i>Av. 1, st. 1, Lorem ipsum dolor</a>                            
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-headset text-white mr-2"></i>800-123-enterprise</a>
                            <a href="https://web.whatsapp.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-whatsapp text-white mr-2"></i>(+000) 1234-7890</a>  
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-envelope-fill text-white mr-2"></i>lorem_ipsum@mail.com</a>                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 justify-content-center border-white border-top text-center py-3 mx-0">        
                    <div class="copyright text-white mb-0"><i class="far fa-copyright text-white mr-2"></i>Lorem ipsum dolor sit amet 2022 - consectetur elit adipiscing</div>
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
        
        <!-- JavaScript -->
        <script src="js/tooltips.js" type="text/javascript"></script>
                
        <?php
            // put your code here
        ?>        
    </body>
</html>
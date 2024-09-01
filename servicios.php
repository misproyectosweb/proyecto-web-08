<!DOCTYPE html>

<!-- Página donde se muestran y describen los servicios que ofrece el taller automotriz -->

<html lang="es">
    <head>
        <title>Nuestros servicios</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoTools_1.png"/>

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">        

        <!-- Utilizando Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

        <!-- Utilizando iconos de Bootstrap y Fontawesome -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!-- Utilizando estilos css personalizados -->
        <link href="css/estilosServicios.css" rel="stylesheet" type="text/css"/>

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
                                <h3 class="mb-0 text-white">Conozca los servicios que le ofrecemos para su auto</h3>
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
                                <a class="nav-link text-white" href="index.php"><i class="iconNav bi bi-house-fill text-white mr-3"></i>Inicio</a>
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
                    <h1 class="text-black-50 my-3 display-4 font-weight-bold">Nuestros servicios</h1>
                    <div style="width: 100%;border-bottom: 0.25rem solid #a41313;"></div>
                </div>
            </div>

            <!-- Descripción de los servicios que ofrece la empresa -->
            <div class="container-fluid">        
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 d-flex align-items-center py-4">
                        <img src="imagenes/imgServicios_1.jpg" class="img-fluid mx-auto d-block w-100 rounded-lg p-2 border border-secondary">
                    </div>
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
                        <div>
                            <h3 class="text-center text-black-50 mt-3">Praesent a mauris ut tortor</h3>                        

                            <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper. Mauris semper lacus sed sapien blandit commodo. Nam sagittis sit amet sem at congue. In ac felis rhoncus, lacinia erat eu, viverra magna.
                                Etiam porttitor acmi sit amet luctus:</p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>
                </div>

                <div class="row justify-content-center border-dark-50 border-top"> 
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 d-flex align-items-center py-4">
                        <img src="imagenes/imgServicios_2.jpg" class="img-fluid mx-auto d-block w-100 rounded-lg p-2 border border-secondary">
                    </div>                                        
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
                        <div>
                            <h3 class="text-center text-black-50 mt-3">Proin pulvinar, lacus eu condimentum convallis</h3>                        

                            <p class="mb-1">Proin pulvinar, lacus eu condimentum convallis, odio orci imperdiet mi, consectetur semper quam urna quis libero. Duis dapibus ligula augue, id volutpat lorem cursus accumsan. Duis egestas accumsan vestibulum. Aenean quis posuere turpis, vitae feugiat mauris. Aenean vitae sem pharetra, eleifend diam eu, hendrerit metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id metus in felis facilisis vulputate non at felis. Morbi tincidunt id purus id hendrerit. 
                                Aenean varius, nunc ac tempus aliquet:</p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>                    
                </div>

                <div class="row justify-content-center border-dark-50 border-top">     
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 d-flex align-items-center py-4">
                        <img src="imagenes/imgServicios_3.jpg" class="img-fluid mx-auto d-block w-100 rounded-lg p-2 border border-secondary">
                    </div>           
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
                        <div>
                            <h3 class="text-center text-black-50 mt-3">Nulla dictum erat id nisi sagittis malesuada</h3>                        

                            <p class="mb-1">Nunc placerat eleifend sollicitudin. Mauris sapien purus, suscipit nec congue et, accumsan ut felis. Proin quis urna non eros imperdiet commodo. Cras at hendrerit nisi. Nunc imperdiet at ex sit amet faucibus. Proin elementum velit ligula, sed fringilla erat posuere sit amet. Fusce malesuada leo eget finibus iaculis. Integer suscipit molestie mollis. Mauris placerat orci a arcu semper, ac convallis urna iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. 
                                Pellentesque vitae semper est. Etiam porttitor ac mi sit amet luctus:</p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>                
                </div>

                <div class="row justify-content-center border-dark-50 border-top">   
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 d-flex align-items-center py-4">
                        <img src="imagenes/imgServicios_4.jpg" class="img-fluid mx-auto d-block w-100 rounded-lg p-2 border border-secondary">
                    </div> 
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
                        <div>
                            <h3 class="text-center text-black-50 mt-3">Interdum eleifend nunc, in auctor mi interdum ac</h3>                        

                            <p class="mb-1">Duis interdum eleifend nunc, in auctor mi interdum ac. Phasellus vitae dui mattis, egestas ante eget, cursus mi. Aenean porta congue dui ut ultricies. Cras consectetur ante sit amet finibus feugiat. Pellentesque tempor ante eget augue viverra dapibus vel vitae elit. Cras quis urna felis. Praesent bibendum non erat ut euismod. Fusce vel ipsum vel libero elementum tempus vel nec nisi. Integer in pharetra ligula. Sed at ligula purus. Mauris id magna vel leo imperdiet ultrices tristique eget eros. Etiam id metus in felis facilisis vulputate non at felis. 
                                Morbi tincidunt id purus id hendrerit:</p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>                                              
                </div>

                <div class="row justify-content-center border-dark-50 border-top">  
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 d-flex align-items-center py-4">
                        <img src="imagenes/imgServicios_5.jpg" class="img-fluid mx-auto d-block w-100 rounded-lg p-2 border border-secondary">
                    </div>                                              
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
                        <div>
                            <h3 class="text-center text-black-50 mt-3">Cras enim tellus, iaculis sit amet iaculis imperdiet</h3>                        

                            <p class="mb-1">Cras enim tellus, iaculis sit amet iaculis imperdiet, ornare sed sem. In commodo imperdiet faucibus. Suspendisse convallis pulvinar dolor a accumsan. Duis tortor leo, suscipit a augue sed, rhoncus blandit enim. Nulla vulputate lacus non massa ultrices porttitor quis sit amet justo. Curabitur quis eros et elit tincidunt euismod. Aliquam gravida elit ex, vitae luctus eros ultrices ac. Nullam rutrum erat sed pulvinar accumsan. Aenean mauris nibh, ultrices quis diam in, dapibus efficitur tellus. Integer faucibus nec eros nec malesuada. In porta sapien vitae sapien faucibus sollicitudin. Phasellus dictum eget nunc et auctor:</p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>                
                </div>

                <div class="row justify-content-center border-dark-50 border-top">   
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6 d-flex align-items-center py-4">
                        <img src="imagenes/imgServicios_6.jpg" class="img-fluid mx-auto d-block w-100 rounded-lg p-2 border border-secondary">
                    </div>  
                    <div class="col-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
                        <div>
                            <h3 class="text-center text-black-50 mt-3">Quisque ac dictum augue. Integer non tempus felis</h3>                        

                            <p class="mb-1">Quisque ac dictum augue. Integer non tempus felis, id bibendum tellus. Maecenas suscipit convallis malesuada. Aliquam nec dui a sapien rutrum iaculis vel sed elit. Donec cursus vehicula mauris vitae sollicitudin. Phasellus vulputate, diam quis pulvinar interdum, est massa placerat ligula, nec posuere felis enim ac purus. Praesent pellentesque metus est, a tincidunt erat venenatis non. Integer eros nisl, fringilla sed vehicula eget, consectetur vel ligula. Morbi sagittis tincidunt neque, commodo vulputate ante commodo sit amet. In venenatis lacus quam, ac elementum mauris ultrices eu. Phasellus dictum eget nunc et auctor:</p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg mr-3 pb-2"></i>Est ultricies commodo</li>                            
                            </ul>
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
                            <a href="index.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-house-fill text-white mr-2"></i>Inicio</a>
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
        
        <?php
            // put your code here
        ?>
    </body>
</html>
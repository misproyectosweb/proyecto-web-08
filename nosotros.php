<!DOCTYPE html>

<!-- Página donde se describe las cualidades de la empresa y su personal -->

<html lang="es">
    <head>
        <title>Quiénes somos</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        
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
        <link href="css/estilosNosotros.css" rel="stylesheet" type="text/css"/>

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
                                <h3 class="mb-0 text-white">Conozca quienes se encargan del mantenimiento de su auto</h3>
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
                    <h1 class="text-black-50 my-3 display-4 font-weight-bold">Quiénes somos</h1>
                    <div style="width: 100%;border-bottom: 0.25rem solid #a41313;"></div>
                </div>
            </div>

            <!-- Galeria de imágenes -->
            <div class="row m-3 galeria"> 
                <div class="col-11 col-sm-6 col-md-6 col-lg-5 col-xl-5 mx-auto mb-3">
                    <img src="imagenes/imgNosotros_1.jpg" class="img-fluid img-thumbnail p-2 border-secondary-50 mx-auto d-block rounded-lg" alt="foto equipo de trabajo">                    
                </div>                
                <div class="col-11 col-sm-6 col-md-6 col-lg-5 col-xl-5 mx-auto mb-3">                    
                    <img src="imagenes/imgNosotros_2.jpg" class="img-fluid img-thumbnail p-2 border-secondary-50 mx-auto d-block rounded-lg" alt="foto equipo de trabajo">
                </div>
                <div class="col-11 col-sm-6 col-md-6 col-lg-5 col-xl-5 mx-auto mb-3">                    
                    <img src="imagenes/imgNosotros_3.jpg" class="img-fluid img-thumbnail p-2 border-secondary-50 mx-auto d-block rounded-lg" alt="foto equipo de trabajo">
                </div>
                <div class="col-11 col-sm-6 col-md-6 col-lg-5 col-xl-5 mx-auto mb-3">                    
                    <img src="imagenes/imgCallCenter_1.jpg" class="img-fluid img-thumbnail p-2 border-secondary-50 mx-auto d-block rounded-lg" alt="foto equipo de trabajo">                    
                </div>
            </div>

            <!-- Información de la empresa -->
            <div class="container-fluid my-4">                          
                <div class="d-flex flex-row align-items-center bg-light">
                    <h2 class="mb-0 ml-3 text-black-50 py-3">Acerca de nuestra empresa</h2>                    
                </div>

                <div class="row">        
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="d-flex flex-row align-items-start shadow bg-white rounded my-4 p-4">
                            <img src="imagenes/iconoVision_1.png" class="icono mr-4">
                            <div>
                                <h5>Nuestra visión:</h5>                            
                                <p class="mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>
                        </div>                    
                    </div> 
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="d-flex flex-row align-items-start shadow bg-white rounded my-4 p-4">    
                            <img src="imagenes/iconoMision_1.png" class="icono mr-4"> 
                            <div>
                                <h5>Nuestra misión:</h5>                            
                                <p class="mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>
                        </div>                    
                    </div>                
                </div>                
                <div class="row"> 
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="d-flex flex-row align-items-start shadow bg-white rounded my-4 p-4">
                            <img src="imagenes/iconoTrofeo_1.png" class="icono mr-4">
                            <div>
                                <h5>Nuestra organización:</h5>                            
                                <p class="mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>
                        </div>                    
                    </div>                               
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="d-flex flex-row align-items-start shadow bg-white rounded my-4 p-4">
                            <img src="imagenes/iconoMano_1.png" class="icono mr-4">
                            <div>
                                <h5>Nuestros objetivos:</h5>
                                <p class="mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>
                        </div>                    
                    </div>
                </div>    
            </div>
                        
            <!-- Equipo de trabajo -->  
            <div class="row align-items-center bg-light mx-3">
                <h2 class="mb-0 ml-3 text-black-50 py-3">Nuestro equipo de trabajo</h2>                    
            </div> 
            <div class="container-fluid my-4">
                <div class="row justify-content-around">
                    <div class="card border-secondary m-2 p-2">
                        <img src="imagenes/imgPersonal_1.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="mb-1 card-title">Jonathan</h5>
                            <h6 class="card-title text-danger">Mecánico</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border border-dark-50">                            
                            <div>
                                <p class="mb-0 text-muted mr-2">Puedes contactarlo por:</p>
                            </div>
                            <button id="wtpp" class="border-0 bg-transparent" data-toggle="tooltip" title="(+506) 8888-2222"><i class="bi bi-whatsapp text-secondary"></i></button>
                            <button id="fb" class="border-0 bg-transparent" data-toggle="tooltip" title="mecanico_jonathan"><i class="bi bi-facebook text-secondary"></i></button>
                            <button id="xtw" class="border-0 bg-transparent" data-toggle="tooltip" title="#mecanicojonathan"><i class="fa-brands fa-x-twitter"></i></button>
                            <button id="mail" class="border-0 bg-transparent" data-toggle="tooltip" title="mecanicojonathan@mail.com"><i class="bi bi-envelope-fill text-secondary"></i></button>                                                        
                        </div>
                    </div>
                    <div class="card border-secondary m-2 p-2">
                        <img src="imagenes/imgPersonal_2.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="mb-1 card-title">Michael</h5>
                            <h6 class="card-title text-danger">Mecánico</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border border-dark-50">
                            <div>
                                <p class="mb-0 text-muted mr-2">Puedes contactarlo por:</p>
                            </div>
                            <button id="wtpp" class="border-0 bg-transparent" data-toggle="tooltip" title="(+506) 8888-3333"><i class="bi bi-whatsapp text-secondary"></i></button>
                            <button id="fb" class="border-0 bg-transparent" data-toggle="tooltip" title="mecanico_michael"><i class="bi bi-facebook text-secondary"></i></button>
                            <button id="xtw" class="border-0 bg-transparent" data-toggle="tooltip" title="#mecanicomichael"><i class="fa-brands fa-x-twitter"></i></button>
                            <button id="mail" class="border-0 bg-transparent" data-toggle="tooltip" title="mecanicomichael@mail.com"><i class="bi bi-envelope-fill text-secondary"></i></button>
                        </div>
                    </div>
                    <div class="card border-secondary m-2 p-2">
                        <img src="imagenes/imgPersonal_3.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="mb-1 card-title">Mónica</h5>
                            <h6 class="card-title text-danger">Servicio al cliente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border border-dark-50">
                            <div>
                                <p class="mb-0 text-muted mr-2">Puedes contactarlo por:</p>
                            </div>
                            <button id="wtpp" class="border-0 bg-transparent" data-toggle="tooltip" title="(+506) 8888-4444"><i class="bi bi-whatsapp text-secondary"></i></button>
                            <button id="fb" class="border-0 bg-transparent" data-toggle="tooltip" title="callcenter_monica"><i class="bi bi-facebook text-secondary"></i></button>
                            <button id="xtw" class="border-0 bg-transparent" data-toggle="tooltip" title="#callcenter_monica"><i class="fa-brands fa-x-twitter"></i></button>
                            <button id="mail" class="border-0 bg-transparent" data-toggle="tooltip" title="callcenter_monica@mail.com"><i class="bi bi-envelope-fill text-secondary"></i></button>
                        </div>
                    </div>
                    <div class="card border-secondary m-2 p-2">
                        <img src="imagenes/imgPersonal_4.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="mb-1 card-title">Jennifer</h5>
                            <h6 class="card-title text-danger">Servicio al cliente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border border-dark-50">
                            <div>
                                <p class="mb-0 text-muted mr-2">Puedes contactarlo por:</p>
                            </div>
                            <button id="wtpp" class="border-0 bg-transparent" data-toggle="tooltip" title="(+506) 8888-5555"><i class="bi bi-whatsapp text-secondary"></i></button>
                            <button id="fb" class="border-0 bg-transparent" data-toggle="tooltip" title="callcenter_jennifer"><i class="bi bi-facebook text-secondary"></i></button>
                            <button id="xtw" class="border-0 bg-transparent" data-toggle="tooltip" title="#callcenter_jennifer"><i class="fa-brands fa-x-twitter"></i></button>
                            <button id="mail" class="border-0 bg-transparent" data-toggle="tooltip" title="callcenter_jennifer@mail.com"><i class="bi bi-envelope-fill text-secondary"></i></button>
                        </div>
                    </div>
                    <div class="card border-secondary m-2 p-2">
                        <img src="imagenes/imgPersonal_5.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="mb-1 card-title">Charles</h5>
                            <h6 class="card-title text-danger">Gerente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border border-dark-50">
                            <div>
                                <p class="mb-0 text-muted mr-2">Puedes contactarlo por:</p>
                            </div>
                            <button id="wtpp" class="border-0 bg-transparent" data-toggle="tooltip" title="(+506) 8888-6666"><i class="bi bi-whatsapp text-secondary"></i></button>
                            <button id="fb" class="border-0 bg-transparent" data-toggle="tooltip" title="gerencia_charles"><i class="bi bi-facebook text-secondary"></i></button>
                            <button id="xtw" class="border-0 bg-transparent" data-toggle="tooltip" title="#gerencia_charles"><i class="fa-brands fa-x-twitter"></i></button>
                            <button id="mail" class="border-0 bg-transparent" data-toggle="tooltip" title="gerencia_charles@mail.com"><i class="bi bi-envelope-fill text-secondary"></i></button>
                        </div>
                    </div>
                    <div class="card border-secondary m-2 p-2">
                        <img src="imagenes/imgPersonal_6.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="mb-1 card-title">Mary</h5>
                            <h6 class="card-title text-danger">Gerente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer border border-dark-50">
                            <div>
                                <p class="mb-0 text-muted mr-2">Puedes contactarlo por:</p>
                            </div>
                            <button id="wtpp" class="border-0 bg-transparent" data-toggle="tooltip" title="(+506) 8888-7777"><i class="bi bi-whatsapp text-secondary"></i></button>
                            <button id="fb" class="border-0 bg-transparent" data-toggle="tooltip" title="gerencia_mary"><i class="bi bi-facebook text-secondary"></i></button>
                            <button id="xtw" class="border-0 bg-transparent" data-toggle="tooltip" title="#gerencia_mary"><i class="fa-brands fa-x-twitter"></i></button>
                            <button id="mail" class="border-0 bg-transparent" data-toggle="tooltip" title="gerencia_mary@mail.com"><i class="bi bi-envelope-fill text-secondary"></i></button>
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
                            <a href="index.html" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-house-fill text-white mr-2"></i>Inicio</a>
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
        
        <!-- Archivos JavaScript -->
        <script src="js/tooltips.js" type="text/javascript"></script>
                        
        <?php
            // put your code here
        ?>
    </body>
</html>
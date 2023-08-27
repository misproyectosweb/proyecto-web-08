<!DOCTYPE html>

<!-- Página donde se describe las cualidades de la empresa y su personal -->

<html lang="es">
    <head>
        <title>Quienes somos</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilosNosotros.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/> 
        
        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- Utilizando google fonts -->        
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">

        <!-- Utilizando Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!-- Utilizando estilos css personalizados -->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

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
            <!-- Sección tres: información de los integrantes de la empresa -->
            <div class="container-fluid pb-2 mt-5">
                <div class="bg-light">
                    <h2 class="text-black-50 text-center pt-3 my-3">Quiénes somos</h2>
                    <div class="borde_gr"></div>                            
                </div>

                <!-- Galeria de imágenes -->
                <div class="row my-5">        
                    <img src="imagenes/imgTaller_13.jpg" class="img-fluid mx-auto d-block rounded-lg" style="width:30%; box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);" alt="foto equipo de trabajo">
                    <img src="imagenes/callCenter_1.jpg" class="img-fluid mx-auto d-block rounded-lg" style="width:30%; box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);" alt="foto equipo de trabajo">
                    <img src="imagenes/imgTaller_8.jpg" class="img-fluid mx-auto d-block rounded-lg" style="width:30%; box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);" alt="foto equipo de trabajo">
                </div>
                
                <!-- Sección tres: información de la empresa -->
                <div class="container-fluid mt-5">                          
                    <div class="bg-light">
                        <h2 class="text-black-50 pt-3 my-3">Acerca de...</h2>
                        <div class="borde_pq"></div>                     
                    </div>

                    <div class="row pt-5">        
                        <div class="col-md-6">
                            <div class="d-flex flex-row align-items-start shadow p-3 mb-4 bg-white rounded">
                                <img src="imagenes/homeAzul48x48.png" class="iconoEmp">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold">Nuestra empresa:<br></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>                    
                        </div> 
                        <div class="col-md-6">
                            <div class="d-flex flex-row align-items-start shadow p-3 mb-4 bg-white rounded">                        
                                <img src="imagenes/globeAzul48x48.png" class="iconoEmp">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold">Nuestra visión:<br></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>                    
                        </div>                
                    </div>                
                    <div class="row pt-4"> 
                        <div class="col-md-6">
                            <div class="d-flex flex-row align-items-start shadow p-3 mb-4 bg-white rounded">
                                <img src="imagenes/trophyAzul48x48.png" class="iconoEmp">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold">Nuestros objetivos:<br></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>                    
                        </div>                               
                        <div class="col-md-6">
                            <div class="d-flex flex-row align-items-start shadow p-3 mb-4 bg-white rounded">
                                <img src="imagenes/thumbsUpAzul48x48.png" class="iconoEmp">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><span class="font-weight-bold">Nuestra misión:<br></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper.</p>
                            </div>                    
                        </div>
                    </div>    
                </div>
            </div>
                        
            <!-- Sección cuatro: información de los miembros de la empresa -->
            <div class="container-fluid my-5">
                <div class="bg-light">
                    <h2 class="text-black-50 pt-3 my-3">Nuestro equipo</h2>
                    <div class="borde_pq"></div>                            
                </div>

                <div class="card-deck my-4">
                    <div class="card">
                        <img src="imagenes/persona_1.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="card-title">Jonathan</h5>
                            <h6 class="card-title text-danger">Mecánico</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Puedes localizarlo por:</small>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-whatsapp text-secondary"></i>&nbsp;
                            <i class="bi bi-facebook text-secondary"></i>&nbsp;
                            <i class="bi bi-twitter text-secondary"></i>&nbsp;
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/persona_2.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="card-title">Michael</h5>
                            <h6 class="card-title text-danger">Mecánico</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Puedes localizarlo por:</small>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-whatsapp text-secondary"></i>&nbsp;
                            <i class="bi bi-facebook text-secondary"></i>&nbsp;
                            <i class="bi bi-twitter text-secondary"></i>&nbsp;
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/persona_3.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="card-title">Mónica</h5>
                            <h6 class="card-title text-danger">Servicio al cliente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Puedes localizarlo por:</small>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-whatsapp text-secondary"></i>&nbsp;
                            <i class="bi bi-facebook text-secondary"></i>&nbsp;
                            <i class="bi bi-twitter text-secondary"></i>&nbsp;
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/persona_4.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="card-title">Jennifer</h5>
                            <h6 class="card-title text-danger">Servicio al cliente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Puedes localizarlo por:</small>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-whatsapp text-secondary"></i>&nbsp;
                            <i class="bi bi-facebook text-secondary"></i>&nbsp;
                            <i class="bi bi-twitter text-secondary"></i>&nbsp;
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/persona_5.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="card-title">Charles</h5>
                            <h6 class="card-title text-danger">Gerente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Puedes localizarlo por:</small>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-whatsapp text-secondary"></i>&nbsp;
                            <i class="bi bi-facebook text-secondary"></i>&nbsp;
                            <i class="bi bi-twitter text-secondary"></i>&nbsp;
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/persona_6.png" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                        <div class="card-body">
                            <h5 class="card-title">Mary</h5>
                            <h6 class="card-title text-danger">Gerente</h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Puedes localizarlo por:</small>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-whatsapp text-secondary"></i>&nbsp;
                            <i class="bi bi-facebook text-secondary"></i>&nbsp;
                            <i class="bi bi-twitter text-secondary"></i>&nbsp;
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>            
        </main>
        
        <footer>
            <div class="container-fluid d-flex justify-content-center bg-secondary">
                <div class="row py-3">
                    <div class="col-md-3 d-flex flex-column"> 
                        <p class="text-white text-left font-weight-bold">Nuestra empresa:</p>            
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-house-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="index.php" class="nav-link text-white p-0">Inicio</a>         
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-people-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="nav-link text-white p-0">Quienes somos</a>
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
                    <div class="col-md-3 d-flex flex-column"> 
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
                    <div class="col-md-3 d-flex flex-column"> 
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
                    <div class="col-md-3 d-flex flex-column"> 
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
                <div class="row d-flex flex-row justify-content-center border-white border-top text-center py-3">        
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
<!DOCTYPE html>

<!-- Página donde se muestran y describen los servicios que ofrece el taller automotriz -->

<html lang="es">
    <head>
        <title>Nuestros servicios</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilosServicios.css">
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
            <!-- Sección tres: información de los servicios que ofrece la empresa -->

            <div class="container-fluid mt-5">
                <div class="bg-light">
                    <h2 class="text-black-50 text-center pt-2 my-3">Nuestros servicios</h2>
                    <div class="borde_gr"></div>                            
                </div>  
            </div>

            <!-- Sección tres: información de los servicios que ofrece la empresa -->
            <div class="container-fluid">        
                <div class="row">
                    <div class="col-md-5 d-flex align-items-center py-4">
                        <img src="imagenes/imgTaller_5.jpg" class="img-fluid rounded mx-auto d-block rounded-lg w-75" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
                    </div>
                    <div class="col-md-7 pt-4">
                        <div>
                            <h3 class="pb-3 text-center text-black-50">Praesent a mauris ut tortor</h3>                        

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra. Fusce pulvinar lobortis nisi id egestas. Donec pulvinar est quis est ultricies commodo. Duis eu lorem ac metus tempus ullamcorper. Mauris semper lacus sed sapien blandit commodo. Nam sagittis sit amet sem at congue. In ac felis rhoncus, lacinia erat eu, viverra magna.
                                Etiam porttitor acmi sit amet luctus:</p>

                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>
                </div>

                <div class="row border-dark-50 border-top">                
                    <div class="col-md-7 pt-4">
                        <div>
                            <h3 class="pb-3 text-center text-black-50">Proin pulvinar, lacus eu condimentum convallis</h3>                        

                            <p>Proin pulvinar, lacus eu condimentum convallis, odio orci imperdiet mi, consectetur semper quam urna quis libero. Duis dapibus ligula augue, id volutpat lorem cursus accumsan. Duis egestas accumsan vestibulum. Aenean quis posuere turpis, vitae feugiat mauris. Aenean vitae sem pharetra, eleifend diam eu, hendrerit metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id metus in felis facilisis vulputate non at felis. Morbi tincidunt id purus id hendrerit. 
                                Aenean varius, nunc ac tempus aliquet:</p>

                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>
                    <div class="col-md-5 d-flex align-items-center py-4">
                        <img src="imagenes/imgTaller_4.jpg" class="img-fluid rounded mx-auto d-block rounded-lg w-75" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
                    </div>
                </div>

                <div class="row border-dark-50 border-top">     
                    <div class="col-md-5 d-flex align-items-center py-4">
                        <img src="imagenes/imgTaller_7.jpg" class="img-fluid rounded mx-auto d-block rounded-lg w-75" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
                    </div>           
                    <div class="col-md-7 pt-4">
                        <div>
                            <h3 class="pb-3 text-center text-black-50">Nulla dictum erat id nisi sagittis malesuada</h3>                        

                            <p>Nunc placerat eleifend sollicitudin. Mauris sapien purus, suscipit nec congue et, accumsan ut felis. Proin quis urna non eros imperdiet commodo. Cras at hendrerit nisi. Nunc imperdiet at ex sit amet faucibus. Proin elementum velit ligula, sed fringilla erat posuere sit amet. Fusce malesuada leo eget finibus iaculis. Integer suscipit molestie mollis. Mauris placerat orci a arcu semper, ac convallis urna iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. 
                                Pellentesque vitae semper est. Etiam porttitor ac mi sit amet luctus:</p>

                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>                
                </div>

                <div class="row border-dark-50 border-top">                     
                    <div class="col-md-7 pt-4">
                        <div>
                            <h3 class="pb-3 text-center text-black-50">Duis interdum eleifend nunc, in auctor mi interdum ac</h3>                        

                            <p>Duis interdum eleifend nunc, in auctor mi interdum ac. Phasellus vitae dui mattis, egestas ante eget, cursus mi. Aenean porta congue dui ut ultricies. Cras consectetur ante sit amet finibus feugiat. Pellentesque tempor ante eget augue viverra dapibus vel vitae elit. Cras quis urna felis. Praesent bibendum non erat ut euismod. Fusce vel ipsum vel libero elementum tempus vel nec nisi. Integer in pharetra ligula. Sed at ligula purus. Mauris id magna vel leo imperdiet ultrices tristique eget eros. Etiam id metus in felis facilisis vulputate non at felis. 
                                Morbi tincidunt id purus id hendrerit:</p>

                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>
                    <div class="col-md-5 d-flex align-items-center py-4">
                        <img src="imagenes/imgTaller_9.jpg" class="img-fluid rounded mx-auto d-block rounded-lg w-75" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
                    </div>                           
                </div>

                <div class="row border-dark-50 border-top">  
                    <div class="col-md-5 d-flex align-items-center py-4">
                        <img src="imagenes/imgTaller_10.jpg" class="img-fluid rounded mx-auto d-block rounded-lg w-75" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
                    </div>                                              
                    <div class="col-md-7 pt-4">
                        <div>
                            <h3 class="pb-3 text-center text-black-50">Cras enim tellus, iaculis sit amet iaculis imperdiet</h3>                        

                            <p>Cras enim tellus, iaculis sit amet iaculis imperdiet, ornare sed sem. In commodo imperdiet faucibus. Suspendisse convallis pulvinar dolor a accumsan. Duis tortor leo, suscipit a augue sed, rhoncus blandit enim. Nulla vulputate lacus non massa ultrices porttitor quis sit amet justo. Curabitur quis eros et elit tincidunt euismod. Aliquam gravida elit ex, vitae luctus eros ultrices ac. Nullam rutrum erat sed pulvinar accumsan. Aenean mauris nibh, ultrices quis diam in, dapibus efficitur tellus. Integer faucibus nec eros nec malesuada. In porta sapien vitae sapien faucibus sollicitudin. Phasellus dictum eget nunc et auctor:</p>

                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div>                
                </div>

                <div class="row border-dark-50 border-top">          
                    <div class="col-md-7 pt-4">
                        <div>
                            <h3 class="pb-3 text-center text-black-50">Quisque ac dictum augue. Integer non tempus felis</h3>                        

                            <p>Quisque ac dictum augue. Integer non tempus felis, id bibendum tellus. Maecenas suscipit convallis malesuada. Aliquam nec dui a sapien rutrum iaculis vel sed elit. Donec cursus vehicula mauris vitae sollicitudin. Phasellus vulputate, diam quis pulvinar interdum, est massa placerat ligula, nec posuere felis enim ac purus. Praesent pellentesque metus est, a tincidunt erat venenatis non. Integer eros nisl, fringilla sed vehicula eget, consectetur vel ligula. Morbi sagittis tincidunt neque, commodo vulputate ante commodo sit amet. In venenatis lacus quam, ac elementum mauris ultrices eu. Phasellus dictum eget nunc et auctor:</p>

                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Ut auctor sapien</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;vel semper tortor pharetra</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Fusce pulvinar lobortis nisi</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;Donec pulvinar est quis</li>
                                <li><i class="bi bi-check-lg"></i>&nbsp;&nbsp;&nbsp;est ultricies commodo</li>                            
                            </ul>
                        </div>                    
                    </div> 
                    <div class="col-md-5 d-flex align-items-center py-4">
                        <img src="imagenes/imgTaller_14.jpg" class="img-fluid rounded mx-auto d-block rounded-lg w-75" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
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
                            <a href="nosotros.php" class="nav-link text-white p-0">Quienes somos</a>
                        </div>                
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-tools text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="nav-link text-white p-0">Nuestros servicios</a>
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
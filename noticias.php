<!DOCTYPE html>

<!-- Página donde se muestran varias noticias relacionadas con el mundo automotriz -->

<html lang="es">
    <head>
        <title>Noticias</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilosNoticias.css">
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
                <div class="row justify-content-between py-3">      
                    <div class="col-sm-3 d-flex flex-row justify-content-start align-items-center">
                        <img src="imagenes/LogoTaller_3.png" class="img-fluid w-50" alt="Logo taller">
                    </div>                    
                    <div class="col-sm-3 d-flex flex-row justify-content-center align-items-center">
                        <i class="iconHeader bi bi-envelope" style="color: cornflowerblue"></i>&nbsp;&nbsp;
                        <p class="mb-0">Escríbanos:<br>lorem_ipsum@mail.com</p>
                    </div>
                    <div class="col-sm-3 d-flex flex-row justify-content-center align-items-center">
                        <i class="iconHeader bi bi-headset" style="color: cornflowerblue"></i>&nbsp;&nbsp;
                        <p class="mb-0">Llámenos:<br>800-1234-5678</p>
                    </div>
                    <div class="col-sm-3 d-flex flex-row justify-content-center align-items-center">
                        <i class="iconHeader bi-alarm" style="color: cornflowerblue;"></i>&nbsp;&nbsp;
                        <p class="mb-0">Horario de servicio:<br>Lunes a sábado<br>7:30a.m. - 5:30p.m.</p>
                    </div>    
                </div>

                <!-- Menú de navegación -->
                <div class="row bg-secondary p-3">                    
                    <nav class="col-sm-12" id="navbarNav">
                        <ul class="nav nav-fill">
                            <li class="nav-item rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'maroon');" onmouseout="noResaltarOpcion('item_1', 'transparent')">
                                <a class="nav-link text-white" href="index.php"><i class="iconNav bi bi-house-fill text-white mr-2" style="font-size: 1.25rem;"></i>Inicio</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'maroon');" onmouseout="noResaltarOpcion('item_2', 'transparent')">
                                <a class="nav-link text-white" href="nosotros.php"><i class="iconNav bi bi-people-fill text-white mr-2" style="font-size: 1.25rem;"></i>Quienes somos</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'maroon');" onmouseout="noResaltarOpcion('item_3', 'transparent')">
                                <a class="nav-link text-white" href="servicios.php"><i class="iconNav bi bi-tools text-white mr-2" style="font-size: 1.25rem;"></i>Nuestros servicios</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'maroon');" onmouseout="noResaltarOpcion('item_4', 'transparent')">
                                <a class="nav-link text-white" href="#"><i class="iconNav bi bi-pencil-square text-white mr-2" style="font-size: 1.25rem;"></i>Noticias</a>
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
            <div class="container-fluid">
                <!-- Sección tres: información de las noticias -->                
                <div class="container-fluid mt-5">
                    <div class="bg-light">
                        <h2 class="text-black-50 text-center pt-2 my-3">La actualidad en el mundo automotriz</h2>
                        <div class="borde_gr"></div>                            
                    </div>  
                </div>

                <div class="row">
                    <div class="card-deck mx-3">
                        <div class="card my-5 border-0">
                            <img src="imagenes/image_blog_1.jpg" class="card-img-top img-fluid rounded-lg" alt="foto">
                            <p class="text-secondary pl-2 py-2 mb-0 border-bottom border-dark-50"><small>Marzo 20, 2020&nbsp;&nbsp;|&nbsp;&nbsp;Escrito por: Charly&nbsp;&nbsp;|&nbsp;&nbsp;Fuente: Revista Mecánica&nbsp;&nbsp;|&nbsp;&nbsp;<i class="bi bi-eye"></i>&nbsp;&nbsp;132&nbsp;&nbsp;<i class="bi bi-chat-fill"></i>&nbsp;&nbsp;7&nbsp;</small></p>
                            <h5 class="text-secondary text-uppercase pl-3 pt-4 pb-2">Es tiempo para cambiar sus llantas</h5>
                            <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur mauris vitae nisi venenatis ornare in facilisis sem. Ut volutpat lorem purus, sed tempus magna volutpat sed. Morbi ornare sem eget nisi dictum vulputate. Donec non pharetra mauris, eget vehicula ex. Nullam nec euismod nibh. Nullam convallis urna nisl, eu mollis arcu dictum sed. Duis auctor augue metus, nec rhoncus libero malesuada quis. Aliquam quis molestie nulla. Cras nisi felis, viverra quis lorem sit amet, sodales sagittis est. Mauris vel interdum enim.
                            </p>
                            <!-- <p class="pl-3 mb-0">                            
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsebutton1" aria-expanded="false" aria-controls="collapsebutton1">
                                    Mostrar artículo...
                                </button>                            
                            </p> -->
                            <div class="collapse" id="collapsebutton1">
                                <div class="card-body">                                                    
                                    <p>Aenean a metus et mauris rutrum interdum id quis purus. Aenean sed sapien ac nunc luctus finibus. Praesent finibus ligula mi, eu maximus velit mollis ac. Duis eget elementum erat, sed porta eros. Mauris nec neque efficitur, malesuada ante at, ullamcorper orci. Phasellus nec tortor vel arcu pellentesque rhoncus. Duis fermentum sapien lorem, id suscipit dolor finibus at. Nullam dapibus malesuada nulla, vitae lacinia nulla feugiat at. Sed sed tellus risus. Aliquam euismod egestas ligula et condimentum. In egestas quam sed dapibus auctor. Donec urna neque, iaculis id tempus eget, iaculis non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis sapien eros. Phasellus lobortis ipsum ligula, in luctus turpis laoreet imperdiet.</p>
                                    <h6 class="text-uppercase">Lacus modem elementum</h6>
                                    <p>Nullam ut viverra arcu. Suspendisse potenti. Integer aliquam libero eu tempus ornare. Mauris erat sapien, pellentesque a dapibus eu, elementum in erat. Cras quis sapien leo. Phasellus fermentum enim eu enim eleifend, id imperdiet nunc dictum. Quisque lacinia blandit tellus, eu molestie nisl elementum sit amet. Cras sagittis enim ac risus aliquam, vel accumsan ipsum vestibulum. Nam id volutpat diam. Vivamus volutpat augue nisl, eget auctor risus tincidunt consectetur. Aliquam erat volutpat.
                                    </p>
                                    <p>Vestibulum odio massa, interdum mollis rhoncus in, euismod sit amet tellus. Quisque convallis porttitor purus, at accumsan justo sodales et. Integer massa leo, cursus quis velit a, viverra cursus magna. Pellentesque gravida dapibus nisl, in convallis eros rhoncus non. Donec eget aliquet mi, sed condimentum ante. Duis ut urna vitae enim tempor dictum a cursus erat. Pellentesque suscipit felis in sem euismod, non congue massa lacinia. Etiam blandit sapien purus, nec lacinia sem tempor a. Aenean convallis facilisis tellus eget cursus. Aliquam erat volutpat. Nulla tristique sit amet ipsum et vulputate. Etiam ultricies turpis eget leo pretium, eget venenatis metus fringilla. Pellentesque enim sem, fringilla sit amet enim nec, tempus consequat est.
                                    </p>
                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu neque eu erat fermentum aliquet ut at erat. Ut eget lacinia neque. Nunc eget nunc non orci laoreet ultricies ac ut odio. Pellentesque vestibulum ipsum elit, eu consectetur sem tincidunt a. Sed vel purus eu elit mollis semper ac vitae enim. Nulla eget est est. Vestibulum tincidunt ac urna a commodo. Maecenas enim magna, suscipit a feugiat porttitor, porttitor vitae mauris. Fusce sed ipsum eget tortor viverra suscipit. In massa risus, lacinia id metus quis, fermentum porttitor tortor. Donec mi nisl, lacinia at erat quis, maximus elementum ante. Cras at lacus faucibus, venenatis purus nec, commodo nunc.</p>
                                    <h6 class="text-uppercase">Gravida terminal etos</h6>
                                    <p>Ut vitae venenatis enim. Nullam velit libero, faucibus et erat ac, vestibulum tincidunt nisi. Integer ultrices turpis felis, vel feugiat nibh auctor eu. Aenean pharetra justo volutpat odio dictum scelerisque. Donec nec magna id enim dignissim eleifend. Curabitur molestie tempor neque vitae tempus. Donec in vestibulum nisi. Maecenas commodo non magna sit amet consectetur. Nam volutpat sapien eu lacus dignissim, nec tincidunt sem placerat. Fusce in nisl molestie, convallis sapien sit amet, vehicula diam. Nam tempus dignissim molestie.</p>
                                </div>
                            </div> 
                            <a href="#collapsebutton1" class="btnTexto btn btn-primary w-50 ml-3" data-toggle="collapse">Mostrar artículo</a>                   
                        </div>
                        <div class="card my-5 border-0">
                            <img src="imagenes/image_blog_2.jpg" class="card-img-top img-fluid rounded-lg" alt="foto">
                            <p class="text-secondary pl-2 py-2 mb-0 border-bottom border-dark-50"><small>Marzo 20, 2020&nbsp;&nbsp;|&nbsp;&nbsp;Escrito por: Charly&nbsp;&nbsp;|&nbsp;&nbsp;Fuente: Revista Mecánica&nbsp;&nbsp;|&nbsp;&nbsp;<i class="bi bi-eye"></i>&nbsp;&nbsp;132&nbsp;&nbsp;<i class="bi bi-chat-fill"></i>&nbsp;&nbsp;7&nbsp;</small></p>
                            <h5 class="text-secondary text-uppercase pl-3 pt-4 pb-2">Consejos de seguridad para conducir en verano</h5>
                            <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur mauris vitae nisi venenatis ornare in facilisis sem. Ut volutpat lorem purus, sed tempus magna volutpat sed. Morbi ornare sem eget nisi dictum vulputate. Donec non pharetra mauris, eget vehicula ex. Nullam nec euismod nibh. Nullam convallis urna nisl, eu mollis arcu dictum sed. Duis auctor augue metus, nec rhoncus libero malesuada quis. Aliquam quis molestie nulla. Cras nisi felis, viverra quis lorem sit amet, sodales sagittis est. Mauris vel interdum enim.
                            </p>
                            <!-- <p class="pl-3 mb-0">                            
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsebutton2" aria-expanded="false" aria-controls="collapsebutton2">
                                    Mostrar artículo...
                                </button>                            
                            </p> -->
                            <div class="collapse" id="collapsebutton2">
                                <div class="card-body">                                                    
                                    <p>Aenean a metus et mauris rutrum interdum id quis purus. Aenean sed sapien ac nunc luctus finibus. Praesent finibus ligula mi, eu maximus velit mollis ac. Duis eget elementum erat, sed porta eros. Mauris nec neque efficitur, malesuada ante at, ullamcorper orci. Phasellus nec tortor vel arcu pellentesque rhoncus. Duis fermentum sapien lorem, id suscipit dolor finibus at. Nullam dapibus malesuada nulla, vitae lacinia nulla feugiat at. Sed sed tellus risus. Aliquam euismod egestas ligula et condimentum. In egestas quam sed dapibus auctor. Donec urna neque, iaculis id tempus eget, iaculis non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis sapien eros. Phasellus lobortis ipsum ligula, in luctus turpis laoreet imperdiet.</p>
                                    <h6 class="text-uppercase">Lacus modem elementum</h6>
                                    <p>Nullam ut viverra arcu. Suspendisse potenti. Integer aliquam libero eu tempus ornare. Mauris erat sapien, pellentesque a dapibus eu, elementum in erat. Cras quis sapien leo. Phasellus fermentum enim eu enim eleifend, id imperdiet nunc dictum. Quisque lacinia blandit tellus, eu molestie nisl elementum sit amet. Cras sagittis enim ac risus aliquam, vel accumsan ipsum vestibulum. Nam id volutpat diam. Vivamus volutpat augue nisl, eget auctor risus tincidunt consectetur. Aliquam erat volutpat.
                                    </p>
                                    <p>Vestibulum odio massa, interdum mollis rhoncus in, euismod sit amet tellus. Quisque convallis porttitor purus, at accumsan justo sodales et. Integer massa leo, cursus quis velit a, viverra cursus magna. Pellentesque gravida dapibus nisl, in convallis eros rhoncus non. Donec eget aliquet mi, sed condimentum ante. Duis ut urna vitae enim tempor dictum a cursus erat. Pellentesque suscipit felis in sem euismod, non congue massa lacinia. Etiam blandit sapien purus, nec lacinia sem tempor a. Aenean convallis facilisis tellus eget cursus. Aliquam erat volutpat. Nulla tristique sit amet ipsum et vulputate. Etiam ultricies turpis eget leo pretium, eget venenatis metus fringilla. Pellentesque enim sem, fringilla sit amet enim nec, tempus consequat est.
                                    </p>
                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu neque eu erat fermentum aliquet ut at erat. Ut eget lacinia neque. Nunc eget nunc non orci laoreet ultricies ac ut odio. Pellentesque vestibulum ipsum elit, eu consectetur sem tincidunt a. Sed vel purus eu elit mollis semper ac vitae enim. Nulla eget est est. Vestibulum tincidunt ac urna a commodo. Maecenas enim magna, suscipit a feugiat porttitor, porttitor vitae mauris. Fusce sed ipsum eget tortor viverra suscipit. In massa risus, lacinia id metus quis, fermentum porttitor tortor. Donec mi nisl, lacinia at erat quis, maximus elementum ante. Cras at lacus faucibus, venenatis purus nec, commodo nunc.</p>
                                    <h6 class="text-uppercase">Gravida terminal etos</h6>
                                    <p>Ut vitae venenatis enim. Nullam velit libero, faucibus et erat ac, vestibulum tincidunt nisi. Integer ultrices turpis felis, vel feugiat nibh auctor eu. Aenean pharetra justo volutpat odio dictum scelerisque. Donec nec magna id enim dignissim eleifend. Curabitur molestie tempor neque vitae tempus. Donec in vestibulum nisi. Maecenas commodo non magna sit amet consectetur. Nam volutpat sapien eu lacus dignissim, nec tincidunt sem placerat. Fusce in nisl molestie, convallis sapien sit amet, vehicula diam. Nam tempus dignissim molestie.</p>
                                </div>
                            </div>
                            <a href="#collapsebutton2" class="btnTexto btn btn-primary w-50 ml-3" data-toggle="collapse">Mostrar artículo</a>    
                        </div>
                        <div class="card my-5 border-0">
                            <img src="imagenes/image_blog_3.jpg" class="card-img-top img-fluid rounded-lg" alt="foto">
                            <p class="text-secondary pl-2 py-2 mb-0 border-bottom border-dark-50"><small>Marzo 20, 2020&nbsp;&nbsp;|&nbsp;&nbsp;Escrito por: Charly&nbsp;&nbsp;|&nbsp;&nbsp;Fuente: Revista Mecánica&nbsp;&nbsp;|&nbsp;&nbsp;<i class="bi bi-eye"></i>&nbsp;&nbsp;132&nbsp;&nbsp;<i class="bi bi-chat-fill"></i>&nbsp;&nbsp;7&nbsp;</small></p>                
                            <h5 class="text-secondary text-uppercase pl-3 pt-4 pb-2">Piezas que deben reemplazarse y a qué intervalos</h5>
                            <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur mauris vitae nisi venenatis ornare in facilisis sem. Ut volutpat lorem purus, sed tempus magna volutpat sed. Morbi ornare sem eget nisi dictum vulputate. Donec non pharetra mauris, eget vehicula ex. Nullam nec euismod nibh. Nullam convallis urna nisl, eu mollis arcu dictum sed. Duis auctor augue metus, nec rhoncus libero malesuada quis. Aliquam quis molestie nulla. Cras nisi felis, viverra quis lorem sit amet, sodales sagittis est. Mauris vel interdum enim.
                            </p>
                            <!-- <p class="pl-3 mb-0">                            
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsebutton3" aria-expanded="false" aria-controls="collapsebutton3">
                                    Mostrar artículo...
                                </button>                            
                            </p> -->
                            <div class="collapse" id="collapsebutton3">
                                <div class="card-body">                                                    
                                    <p>Aenean a metus et mauris rutrum interdum id quis purus. Aenean sed sapien ac nunc luctus finibus. Praesent finibus ligula mi, eu maximus velit mollis ac. Duis eget elementum erat, sed porta eros. Mauris nec neque efficitur, malesuada ante at, ullamcorper orci. Phasellus nec tortor vel arcu pellentesque rhoncus. Duis fermentum sapien lorem, id suscipit dolor finibus at. Nullam dapibus malesuada nulla, vitae lacinia nulla feugiat at. Sed sed tellus risus. Aliquam euismod egestas ligula et condimentum. In egestas quam sed dapibus auctor. Donec urna neque, iaculis id tempus eget, iaculis non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis sapien eros. Phasellus lobortis ipsum ligula, in luctus turpis laoreet imperdiet.</p>
                                    <h6 class="text-uppercase">Lacus modem elementum</h6>
                                    <p>Nullam ut viverra arcu. Suspendisse potenti. Integer aliquam libero eu tempus ornare. Mauris erat sapien, pellentesque a dapibus eu, elementum in erat. Cras quis sapien leo. Phasellus fermentum enim eu enim eleifend, id imperdiet nunc dictum. Quisque lacinia blandit tellus, eu molestie nisl elementum sit amet. Cras sagittis enim ac risus aliquam, vel accumsan ipsum vestibulum. Nam id volutpat diam. Vivamus volutpat augue nisl, eget auctor risus tincidunt consectetur. Aliquam erat volutpat.
                                    </p>
                                    <p>Vestibulum odio massa, interdum mollis rhoncus in, euismod sit amet tellus. Quisque convallis porttitor purus, at accumsan justo sodales et. Integer massa leo, cursus quis velit a, viverra cursus magna. Pellentesque gravida dapibus nisl, in convallis eros rhoncus non. Donec eget aliquet mi, sed condimentum ante. Duis ut urna vitae enim tempor dictum a cursus erat. Pellentesque suscipit felis in sem euismod, non congue massa lacinia. Etiam blandit sapien purus, nec lacinia sem tempor a. Aenean convallis facilisis tellus eget cursus. Aliquam erat volutpat. Nulla tristique sit amet ipsum et vulputate. Etiam ultricies turpis eget leo pretium, eget venenatis metus fringilla. Pellentesque enim sem, fringilla sit amet enim nec, tempus consequat est.
                                    </p>
                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu neque eu erat fermentum aliquet ut at erat. Ut eget lacinia neque. Nunc eget nunc non orci laoreet ultricies ac ut odio. Pellentesque vestibulum ipsum elit, eu consectetur sem tincidunt a. Sed vel purus eu elit mollis semper ac vitae enim. Nulla eget est est. Vestibulum tincidunt ac urna a commodo. Maecenas enim magna, suscipit a feugiat porttitor, porttitor vitae mauris. Fusce sed ipsum eget tortor viverra suscipit. In massa risus, lacinia id metus quis, fermentum porttitor tortor. Donec mi nisl, lacinia at erat quis, maximus elementum ante. Cras at lacus faucibus, venenatis purus nec, commodo nunc.</p>
                                    <h6 class="text-uppercase">Gravida terminal etos</h6>
                                    <p>Ut vitae venenatis enim. Nullam velit libero, faucibus et erat ac, vestibulum tincidunt nisi. Integer ultrices turpis felis, vel feugiat nibh auctor eu. Aenean pharetra justo volutpat odio dictum scelerisque. Donec nec magna id enim dignissim eleifend. Curabitur molestie tempor neque vitae tempus. Donec in vestibulum nisi. Maecenas commodo non magna sit amet consectetur. Nam volutpat sapien eu lacus dignissim, nec tincidunt sem placerat. Fusce in nisl molestie, convallis sapien sit amet, vehicula diam. Nam tempus dignissim molestie.</p>
                                </div>
                            </div> 
                            <a href="#collapsebutton3" class="btnTexto btn btn-primary w-50 ml-3" data-toggle="collapse">Mostrar artículo</a>   
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
                            <a href="nosotros.php" class="nav-link text-white p-0">Quienes somos</a>
                        </div>                
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-tools text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="servicios.php" class="nav-link text-white p-0">Nuestros servicios</a>
                        </div>
                        <div class="d-flex flex-row pb-2">                                        
                            <i class="bi bi-pencil-square text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="nav-link text-white p-0">Noticias</a>
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
        
        <!-- Archivos JavaScript -->
        <script src="js/btnNoticias.js" type="text/javascript"></script>
        
        <?php
        // put your code here
        ?>
    </body>
</html>

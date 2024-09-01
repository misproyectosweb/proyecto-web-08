<!DOCTYPE html>

<!-- Página donde se muestran varias noticias relacionadas con el mundo automotriz -->

<html lang="es">
    <head>
        <title>Noticias</title>
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
        <link href="css/estilosNoticias.css" rel="stylesheet" type="text/css"/>

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
                                <h3 class="mb-0 text-white">Entérese de las últimas informaciones del mundo automotriz</h3>
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
                    <h1 class="text-black-50 my-3 display-4 font-weight-bold">Noticias del mundo automotriz</h1>
                    <div style="width: 100%;border-bottom: 0.25rem solid #a41313;"></div>
                </div>
            </div>
                        
            <!-- Sección de noticias o blog -->
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="card my-4 p-2">
                        <img src="imagenes/imgNoticias_1.jpg" class="card-img-top img-fluid rounded-lg" alt="imagen de llanta ">
                        <p class="py-2 text-secondary border-bottom border-dark-50"><small><strong>Publicado en:</strong> marzo 20, 2020</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Escrito por:</strong> Charles</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Fuente:</strong> Revista Mecánica</small></p>
                        <h5 class="text-uppercase font-weight-bold py-2">¿Cuándo es el tiempo ideal para cambiar sus llantas?</h5>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur mauris vitae nisi venenatis ornare in facilisis sem. Ut volutpat lorem purus, sed tempus magna volutpat sed. Morbi ornare sem eget nisi dictum vulputate. Donec non pharetra mauris, eget vehicula ex. Nullam nec euismod nibh. Nullam convallis urna nisl, eu mollis arcu dictum sed. Duis auctor augue metus, nec rhoncus libero malesuada quis. Aliquam quis molestie nulla. Cras nisi felis, viverra quis lorem sit amet, sodales sagittis est. Mauris vel interdum enim.</p> 

                        <div class="collapse" id="collapsebutton1">
                            <div class="card-body p-2">
                                <p class="mb-0">Aenean a metus et mauris rutrum interdum id quis purus. Aenean sed sapien ac nunc luctus finibus. Praesent finibus ligula mi, eu maximus velit mollis ac. Duis eget elementum erat, sed porta eros. Mauris nec neque efficitur, malesuada ante at, ullamcorper orci. Phasellus nec tortor vel arcu pellentesque rhoncus. Duis fermentum sapien lorem, id suscipit dolor finibus at. Nullam dapibus malesuada nulla, vitae lacinia nulla feugiat at. Sed sed tellus risus. Aliquam euismod egestas ligula et condimentum. In egestas quam sed dapibus auctor. Donec urna neque, iaculis id tempus eget, iaculis non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis sapien eros. Phasellus lobortis ipsum ligula, in luctus turpis laoreet imperdiet.</p>
                                <h6 class="my-3 text-uppercase">Lacus modem elementum</h6>
                                <p class="mb-2">Nullam ut viverra arcu. Suspendisse potenti. Integer aliquam libero eu tempus ornare. Mauris erat sapien, pellentesque a dapibus eu, elementum in erat. Cras quis sapien leo. Phasellus fermentum enim eu enim eleifend, id imperdiet nunc dictum. Quisque lacinia blandit tellus, eu molestie nisl elementum sit amet. Cras sagittis enim ac risus aliquam, vel accumsan ipsum vestibulum. Nam id volutpat diam. Vivamus volutpat augue nisl, eget auctor risus tincidunt consectetur. Aliquam erat volutpat.</p>
                                <p class="mb-2">Vestibulum odio massa, interdum mollis rhoncus in, euismod sit amet tellus. Quisque convallis porttitor purus, at accumsan justo sodales et. Integer massa leo, cursus quis velit a, viverra cursus magna. Pellentesque gravida dapibus nisl, in convallis eros rhoncus non. Donec eget aliquet mi, sed condimentum ante. Duis ut urna vitae enim tempor dictum a cursus erat. Pellentesque suscipit felis in sem euismod, non congue massa lacinia. Etiam blandit sapien purus, nec lacinia sem tempor a. Aenean convallis facilisis tellus eget cursus. Aliquam erat volutpat. Nulla tristique sit amet ipsum et vulputate. Etiam ultricies turpis eget leo pretium, eget venenatis metus fringilla. Pellentesque enim sem, fringilla sit amet enim nec, tempus consequat est.</p>
                                <p class="mb-0">Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu neque eu erat fermentum aliquet ut at erat. Ut eget lacinia neque. Nunc eget nunc non orci laoreet ultricies ac ut odio. Pellentesque vestibulum ipsum elit, eu consectetur sem tincidunt a. Sed vel purus eu elit mollis semper ac vitae enim. Nulla eget est est. Vestibulum tincidunt ac urna a commodo. Maecenas enim magna, suscipit a feugiat porttitor, porttitor vitae mauris. Fusce sed ipsum eget tortor viverra suscipit. In massa risus, lacinia id metus quis, fermentum porttitor tortor. Donec mi nisl, lacinia at erat quis, maximus elementum ante. Cras at lacus faucibus, venenatis purus nec, commodo nunc.</p>
                                <h6 class="my-3 text-uppercase">Gravida terminal etos</h6>
                                <p class="mb-2">Ut vitae venenatis enim. Nullam velit libero, faucibus et erat ac, vestibulum tincidunt nisi. Integer ultrices turpis felis, vel feugiat nibh auctor eu. Aenean pharetra justo volutpat odio dictum scelerisque. Donec nec magna id enim dignissim eleifend. Curabitur molestie tempor neque vitae tempus. Donec in vestibulum nisi. Maecenas commodo non magna sit amet consectetur. Nam volutpat sapien eu lacus dignissim, nec tincidunt sem placerat. Fusce in nisl molestie, convallis sapien sit amet, vehicula diam. Nam tempus dignissim molestie.</p>
                            </div>
                        </div>
                        <a href="#collapsebutton1" class="btnTexto btn btn-primary w-50 my-3" data-toggle="collapse">Mostrar artículo</a>
                    </div>
                    <div class="card my-4 p-2">
                        <img src="imagenes/imgNoticias_2.jpg" class="card-img-top img-fluid rounded-lg" alt="imagen de frenos">
                        <p class="py-2 text-secondary border-bottom border-dark-50"><small><strong>Publicado en:</strong> marzo 20, 2020</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Escrito por:</strong> Charles</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Fuente:</strong> Revista Mecánica</small></p>
                        <h5 class="text-uppercase font-weight-bold py-2">Consejos de seguridad para conducir en el verano</h5>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur mauris vitae nisi venenatis ornare in facilisis sem. Ut volutpat lorem purus, sed tempus magna volutpat sed. Morbi ornare sem eget nisi dictum vulputate. Donec non pharetra mauris, eget vehicula ex. Nullam nec euismod nibh. Nullam convallis urna nisl, eu mollis arcu dictum sed. Duis auctor augue metus, nec rhoncus libero malesuada quis. Aliquam quis molestie nulla. Cras nisi felis, viverra quis lorem sit amet, sodales sagittis est. Mauris vel interdum enim.
                        </p>  

                        <div class="collapse" id="collapsebutton2">
                            <div class="card-body p-2">
                                <p class="mb-0">Aenean a metus et mauris rutrum interdum id quis purus. Aenean sed sapien ac nunc luctus finibus. Praesent finibus ligula mi, eu maximus velit mollis ac. Duis eget elementum erat, sed porta eros. Mauris nec neque efficitur, malesuada ante at, ullamcorper orci. Phasellus nec tortor vel arcu pellentesque rhoncus. Duis fermentum sapien lorem, id suscipit dolor finibus at. Nullam dapibus malesuada nulla, vitae lacinia nulla feugiat at. Sed sed tellus risus. Aliquam euismod egestas ligula et condimentum. In egestas quam sed dapibus auctor. Donec urna neque, iaculis id tempus eget, iaculis non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis sapien eros. Phasellus lobortis ipsum ligula, in luctus turpis laoreet imperdiet.</p>
                                <h6 class="my-3 text-uppercase">Lacus modem elementum</h6>
                                <p class="mb-2">Nullam ut viverra arcu. Suspendisse potenti. Integer aliquam libero eu tempus ornare. Mauris erat sapien, pellentesque a dapibus eu, elementum in erat. Cras quis sapien leo. Phasellus fermentum enim eu enim eleifend, id imperdiet nunc dictum. Quisque lacinia blandit tellus, eu molestie nisl elementum sit amet. Cras sagittis enim ac risus aliquam, vel accumsan ipsum vestibulum. Nam id volutpat diam. Vivamus volutpat augue nisl, eget auctor risus tincidunt consectetur. Aliquam erat volutpat.</p>
                                <p class="mb-2">Vestibulum odio massa, interdum mollis rhoncus in, euismod sit amet tellus. Quisque convallis porttitor purus, at accumsan justo sodales et. Integer massa leo, cursus quis velit a, viverra cursus magna. Pellentesque gravida dapibus nisl, in convallis eros rhoncus non. Donec eget aliquet mi, sed condimentum ante. Duis ut urna vitae enim tempor dictum a cursus erat. Pellentesque suscipit felis in sem euismod, non congue massa lacinia. Etiam blandit sapien purus, nec lacinia sem tempor a. Aenean convallis facilisis tellus eget cursus. Aliquam erat volutpat. Nulla tristique sit amet ipsum et vulputate. Etiam ultricies turpis eget leo pretium, eget venenatis metus fringilla. Pellentesque enim sem, fringilla sit amet enim nec, tempus consequat est.</p>
                                <p class="mb-0">Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu neque eu erat fermentum aliquet ut at erat. Ut eget lacinia neque. Nunc eget nunc non orci laoreet ultricies ac ut odio. Pellentesque vestibulum ipsum elit, eu consectetur sem tincidunt a. Sed vel purus eu elit mollis semper ac vitae enim. Nulla eget est est. Vestibulum tincidunt ac urna a commodo. Maecenas enim magna, suscipit a feugiat porttitor, porttitor vitae mauris. Fusce sed ipsum eget tortor viverra suscipit. In massa risus, lacinia id metus quis, fermentum porttitor tortor. Donec mi nisl, lacinia at erat quis, maximus elementum ante. Cras at lacus faucibus, venenatis purus nec, commodo nunc.</p>
                                <h6 class="my-3 text-uppercase">Gravida terminal etos</h6>
                                <p class="mb-2">Ut vitae venenatis enim. Nullam velit libero, faucibus et erat ac, vestibulum tincidunt nisi. Integer ultrices turpis felis, vel feugiat nibh auctor eu. Aenean pharetra justo volutpat odio dictum scelerisque. Donec nec magna id enim dignissim eleifend. Curabitur molestie tempor neque vitae tempus. Donec in vestibulum nisi. Maecenas commodo non magna sit amet consectetur. Nam volutpat sapien eu lacus dignissim, nec tincidunt sem placerat. Fusce in nisl molestie, convallis sapien sit amet, vehicula diam. Nam tempus dignissim molestie.</p>
                            </div>
                        </div>
                        <a href="#collapsebutton2" class="btnTexto btn btn-primary w-50 my-3" data-toggle="collapse">Mostrar artículo</a>
                    </div>
                    <div class="card my-4 p-2">
                        <img src="imagenes/imgNoticias_3.jpg" class="card-img-top img-fluid rounded-lg" alt="imagen de motor">
                        <p class="py-2 text-secondary border-bottom border-dark-50"><small><strong>Publicado en:</strong> marzo 20, 2020</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Escrito por:</strong> Mary L.</small><i class="bi bi-grip-vertical ml-1 mr-1"></i><small><strong>Fuente:</strong> Revista Mecánica</small></p>
                        <h5 class="text-uppercase font-weight-bold py-2">Piezas que deben reemplazarse y a qué intervalos</h5>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur mauris vitae nisi venenatis ornare in facilisis sem. Ut volutpat lorem purus, sed tempus magna volutpat sed. Morbi ornare sem eget nisi dictum vulputate. Donec non pharetra mauris, eget vehicula ex. Nullam nec euismod nibh. Nullam convallis urna nisl, eu mollis arcu dictum sed. Duis auctor augue metus, nec rhoncus libero malesuada quis. Aliquam quis molestie nulla. Cras nisi felis, viverra quis lorem sit amet, sodales sagittis est. Mauris vel interdum enim.
                        </p>

                        <div class="collapse" id="collapsebutton3">
                            <div class="card-body p-2">
                                <p class="mb-0">Aenean a metus et mauris rutrum interdum id quis purus. Aenean sed sapien ac nunc luctus finibus. Praesent finibus ligula mi, eu maximus velit mollis ac. Duis eget elementum erat, sed porta eros. Mauris nec neque efficitur, malesuada ante at, ullamcorper orci. Phasellus nec tortor vel arcu pellentesque rhoncus. Duis fermentum sapien lorem, id suscipit dolor finibus at. Nullam dapibus malesuada nulla, vitae lacinia nulla feugiat at. Sed sed tellus risus. Aliquam euismod egestas ligula et condimentum. In egestas quam sed dapibus auctor. Donec urna neque, iaculis id tempus eget, iaculis non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis sapien eros. Phasellus lobortis ipsum ligula, in luctus turpis laoreet imperdiet.</p>
                                <h6 class="my-3 text-uppercase">Lacus modem elementum</h6>
                                <p class="mb-2">Nullam ut viverra arcu. Suspendisse potenti. Integer aliquam libero eu tempus ornare. Mauris erat sapien, pellentesque a dapibus eu, elementum in erat. Cras quis sapien leo. Phasellus fermentum enim eu enim eleifend, id imperdiet nunc dictum. Quisque lacinia blandit tellus, eu molestie nisl elementum sit amet. Cras sagittis enim ac risus aliquam, vel accumsan ipsum vestibulum. Nam id volutpat diam. Vivamus volutpat augue nisl, eget auctor risus tincidunt consectetur. Aliquam erat volutpat.</p>
                                <p class="mb-2">Vestibulum odio massa, interdum mollis rhoncus in, euismod sit amet tellus. Quisque convallis porttitor purus, at accumsan justo sodales et. Integer massa leo, cursus quis velit a, viverra cursus magna. Pellentesque gravida dapibus nisl, in convallis eros rhoncus non. Donec eget aliquet mi, sed condimentum ante. Duis ut urna vitae enim tempor dictum a cursus erat. Pellentesque suscipit felis in sem euismod, non congue massa lacinia. Etiam blandit sapien purus, nec lacinia sem tempor a. Aenean convallis facilisis tellus eget cursus. Aliquam erat volutpat. Nulla tristique sit amet ipsum et vulputate. Etiam ultricies turpis eget leo pretium, eget venenatis metus fringilla. Pellentesque enim sem, fringilla sit amet enim nec, tempus consequat est.</p>
                                <p class="mb-0">Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu neque eu erat fermentum aliquet ut at erat. Ut eget lacinia neque. Nunc eget nunc non orci laoreet ultricies ac ut odio. Pellentesque vestibulum ipsum elit, eu consectetur sem tincidunt a. Sed vel purus eu elit mollis semper ac vitae enim. Nulla eget est est. Vestibulum tincidunt ac urna a commodo. Maecenas enim magna, suscipit a feugiat porttitor, porttitor vitae mauris. Fusce sed ipsum eget tortor viverra suscipit. In massa risus, lacinia id metus quis, fermentum porttitor tortor. Donec mi nisl, lacinia at erat quis, maximus elementum ante. Cras at lacus faucibus, venenatis purus nec, commodo nunc.</p>
                                <h6 class="my-3 text-uppercase">Gravida terminal etos</h6>
                                <p class="mb-2">Ut vitae venenatis enim. Nullam velit libero, faucibus et erat ac, vestibulum tincidunt nisi. Integer ultrices turpis felis, vel feugiat nibh auctor eu. Aenean pharetra justo volutpat odio dictum scelerisque. Donec nec magna id enim dignissim eleifend. Curabitur molestie tempor neque vitae tempus. Donec in vestibulum nisi. Maecenas commodo non magna sit amet consectetur. Nam volutpat sapien eu lacus dignissim, nec tincidunt sem placerat. Fusce in nisl molestie, convallis sapien sit amet, vehicula diam. Nam tempus dignissim molestie.</p>
                            </div>
                        </div>
                        <a href="#collapsebutton3" class="btnTexto btn btn-primary w-50 my-3" data-toggle="collapse">Mostrar artículo</a>
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
        
        <!-- Archivos JavaScript -->
        <script src="js/btnNoticias.js" type="text/javascript"></script>
        
        <?php
            // put your code here
        ?>
    </body>
</html>
<!DOCTYPE html>

<!-- Página donde se le permite al usuario registrar sus datos y concretar un servicio para el automóvil -->

<html lang="es">
    <head>        
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoTools_1.png"/>

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"/>        

        <!-- Utilizando Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"/>

        <!-- Utilizando iconos de Bootstrap y Fontawesome -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!-- Utilizando estilos css personalizados -->
        <link href="css/estilosContacto.css" rel="stylesheet" type="text/css"/>

        <!-- Utilizando animaciones para los elementos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $telcasa = filter_input(INPUT_POST, 'telcasa');
                $telcelular = filter_input(INPUT_POST, 'telcelular');
                $marca = filter_input(INPUT_POST, 'marca');
                $modelo = filter_input(INPUT_POST, 'modelo');
                $anio = filter_input(INPUT_POST, 'anio');
                $servicios = filter_input(INPUT_POST, 'servicio');                
                $comentario = filter_input(INPUT_POST, 'comentario');
            } 
        ?>
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
                                <h3 class="mb-0 text-white">Nuestras sucursales lo esperan para ayudarle en lo que necesite</h3>
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
                    <h1 class="text-black-50 my-3 display-4 font-weight-bold">Contáctenos</h1>
                    <div style="width: 100%;border-bottom: 0.25rem solid #a41313;"></div>
                </div>
            </div>

            <!-- Mapa de ubicación de la empresa -->
            <div class="container-fluid">
                <div class="row p-3 mb-3 justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                        <h2 class="text-black-50 py-3 mb-0">Atención personalizada</h2>
                        <img src="imagenes/imgCallCenter_2.jpg" class="img-fluid img-thumbnail p-2 mx-auto d-block w-100">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                        <h2 class="text-black-50 py-3 mb-0">¿Dónde estamos ubicados?</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15718.311510319605!2d-84.04664319999999!3d9.969034550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scr!4v1722202896494!5m2!1ses-419!2scr" width="800" height="600" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
                            
            <div class="container-fluid bg-light p-3 border-top border-dark-50">
                
                <!-- Formulario de contacto -->
                <div class="row">                    
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-5">
                        <h4 class="mb-0 text-black-50 my-3">Envíanos un mensaje o concreta un cita:</h4>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="frmContacto needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-12 py-4">                                    
                                    <h5 class="mb-0"><strong>Ingrese sus datos para contacto:</strong></h5>
                                </div>       
                                <div class="form-group col-6">
                                    <label for="nombre">Nombre completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row pb-3">
                                <div class="form-group col-6">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-3">
                                    <label for="telcasa">Teléfono casa:</label>
                                    <input type="tel" class="form-control" id="telcasa" name="telcasa" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-3">
                                    <label for="telcelular">Teléfono celular:</label>
                                    <input type="tel" class="form-control" id="telcelular" name="telcelular" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row border-dark-50 border-top pb-3">
                                <div class="col-11 py-4">                                    
                                    <h5 class="mb-0"><strong>Ingrese los datos de su vehículo:</strong></h5>
                                </div>            
                                <div class="form-group col-4">
                                    <label for="marca">Marca del vehículo:</label>
                                    <select class="form-control" id="marca" name="marca" required>
                                        <option selected disabled value="">Elija una marca</option>
                                        <option>Toyota</option>
                                        <option>Nissan</option>
                                        <option>Honda</option>
                                        <option>Mitsubishi</option>
                                        <option>Susuki</option>
                                    </select>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Elige la marca de tu automóvil</div>
                                </div>
                                <div class="form-group col-4">
                                    <label for="modelo">Modelo del vehículo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>                
                                <div class="form-group col-4">
                                    <label for="anio">Año del vehículo:</label>
                                    <input type="text" class="form-control" id="anio" name="anio" placeholder="" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row border-dark-50 border-top pb-3">
                                <div class="col-11 py-4">                                    
                                    <h5 class="mb-0"><strong>Seleccione el o los servicio(s) que necesita:</strong></h5>
                                </div>            
                                <div class="form-group col-12">                
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_1" name="servicio[]" value="Llantas">
                                        <label class="custom-control-label pt-1" for="serv_1">Llantas</label>                    
                                    </div>                
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_2" name="servicio[]" value="Motor">
                                        <label class="custom-control-label pt-1" for="serv_2">Motor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_3" name="servicio[]" value="Pintura">
                                        <label class="custom-control-label pt-1" for="serv_3">Pintura</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_4" name="servicio[]" value="Aceite">
                                        <label class="custom-control-label pt-1" for="serv_4">Aceite</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_5" name="servicio[]" value="Diagnostico">
                                        <label class="custom-control-label pt-1" for="serv_5">Diagnóstico</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_6" name="servicio[]" value="Aire_acondicionado">
                                        <label class="custom-control-label pt-1" for="serv_6">Aire acondicionado</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_7" name="servicio[]" value="Otros_servicios">
                                        <label class="custom-control-label pt-1" for="serv_7">Otro servicio</label>
                                    </div>
                                </div>            
                            </div>
                            <div class="form-row border-dark-50 border-top">
                                <div class="form-group col-11">                                    
                                    <h5 class="mb-0 py-4"><strong>Describa su solicitud de servicio o comentario adicional:</strong></h5>
                                    <textarea class="form-control" cols="30" rows="5" id="comentario" name="comentario" required></textarea>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Favor realice una breve descripción del problema de su auto</div>
                                </div>
                            </div>
                            
                            <button type="submit" id="boton" class="btn btn-primary my-3">Enviar mensaje</button>
                                                                                    
                            <?php
                                require 'validaciones.php';
                            ?>
                            
                        </form>  
                    </div>
                    
                    <!-- Horario de servicios -->
                    <div class="horario col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-row justify-content-center py-3">
                        <div class="col-10 col-sm-10 col-md-6 col-lg-11 col-xl-10 d-flex flex-column mt-2">
                            <h4 class="mb-3 text-black-50">Horario de servicio:</h4>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Lunes</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">7:30 a.m. - 5:30 p.m.</li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Martes</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">7:30 a.m. - 5:30 p.m.</li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Miércoles</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">7:30 a.m. - 5:30 p.m.</li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Jueves</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">7:30 a.m. - 5:30 p.m.</li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Viernes</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">7:30 a.m. - 5:30 p.m.</li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Sábado</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">7:30 a.m. - 5:30 p.m.</li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Domingo</li>
                                <li class="list-group-item bg-light border-0 p-0 pb-1">Cerrado</li>
                            </ul>
                            <div class="d-none d-md-block pt-5">
                                <img src="imagenes/imgContacto_1.png" class="img-fluid" alt=""/>
                            </div>
                        </div>                        
                    </div>
                </div> 
                
                <!-- Lista de servicios -->                                
                <div class="row border-dark-50 border-top mt-3">
                    <div class="col-11 col-sm-11 col-md-12 col-lg-12 col-xl-12 mt-2">
                        <h4 class="mb-0 text-black-50 p-4">Además le ofrecemos:</h4>
                    </div>
                </div>
                                
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center p-3">
                            <img src="imagenes/iconoContacto_1.png" class="img-fluid w-25 mr-3">
                            <div>
                                <h6 class="mb-1 text-uppercase"><small class="font-weight-bold">Servicio de asistencia:</small></h6>
                                <p class="mb-2 text-secondary text-justify">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</p>
                            </div>
                        </div>                    
                    </div> 
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center p-3">
                            <img src="imagenes/iconoContacto_2.png" class="img-fluid w-25 mr-3">
                            <div>
                                <h6 class="mb-1 text-uppercase"><small class="font-weight-bold">Trámites con su aseguradora:</small></h6>
                                <p class="mb-2 text-secondary text-justify">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center p-3">
                            <img src="imagenes/iconoContacto_3.png" class="img-fluid w-25 mr-3">
                            <div>
                                <h6 class="mb-1 text-uppercase"><small class="font-weight-bold">Calidad en cada trabajo:</small></h6>
                                <p class="mb-2 text-secondary text-justify">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center p-3">
                            <img src="imagenes/iconoContacto_4.png" class="img-fluid w-25 mr-3">
                            <div>
                                <h6 class="mb-1 text-uppercase"><small class="font-weight-bold">Personal especializado:</small></h6>
                                <p class="mb-2 text-secondary text-justify">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</p>
                            </div>
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
        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        
        <!-- Enlaces a librerías de javaScript -->
        <script src="librerias/sweetalert2.all.js" type="text/javascript"></script>
        
        <!-- Archivos JavaScript -->
        <script src="js/mensaje.js" type="text/javascript"></script>
        
        <!-- JavaScript -->
        <script>            
            function ResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }

            function noResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }
        </script> 
        
        <script>
            const opt = document.getElementsByClassName('opcion');
            const btn = document.querySelector('#boton');

            btn.onclick = () => {
                opt.value;
            };   
        </script>    
        
        <script>        
            // Función que permite la deshabilitación del envío de datos en formularios si hay campos inválidos
            (function() {
                'use strict';
                window.addEventListener('load', function() {

                    // Obtener todos los formularios a los que queremos aplicar estilos de validación personalizados
                    var forms = document.getElementsByClassName('needs-validation');

                    // Recorre los formularios y evita que el form se envíe de forma inmediata
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                        form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();                 
        </script>
                                                
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
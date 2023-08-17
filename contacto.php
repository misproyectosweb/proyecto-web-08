<!DOCTYPE html>

<!-- Página donde se le permite al usuario registrar sus datos y concretar un servicio para el automóvil -->

<html lang="es">
    <head>        
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">               
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/> 
        
        <!-- Utilizando google fonts -->        
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">
        
        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
        <!-- Utilizando Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!-- Archivos css -->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/estilosContacto.css">
        <link rel="stylesheet" href="librerias/sweetalert2.min.css">

        <!-- Utilizando animaciones para los elementos  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
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
                                <a class="nav-link text-white" href="noticias.php"><i class="iconNav bi bi-pencil-square text-white mr-2" style="font-size: 1.25rem;"></i>Noticias</a>
                            </li>
                            <li class="nav-item rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'maroon');" onmouseout="noResaltarOpcion('item_5', 'transparent')">
                                <a class="nav-link text-white" href="#"><i class="iconNav bi bi-envelope-open-fill text-white mr-2" style="font-size: 1.25rem;"></i>Contáctenos</a>
                            </li>
                        </ul>                        
                    </nav>                                       
                </div>
            </div> 
        </header>
        
        <main>
            <!-- Información de contacto con la empresa -->            
            <div class="container-fluid mt-5">
                <div class="bg-light">
                    <h2 class="text-black-50 text-center pt-2 my-3">Contáctenos</h2>
                    <div class="borde_gr"></div>                            
                </div>  
            </div>

            <!-- Mapa de ubicación de la empresa -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 border-dark-50 border-right border-bottom py-3">
                        <h4 class="text-black-50 text-center py-3 mb-0">Llámenos y te atenderemos con profesionalismo</h4>
                        <div>
                            <img src="imagenes/callCenter_2.jpg" class="img-fluid rounded-lg w-75 mx-auto d-block my-3" style="box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);">
                        </div>            
                    </div>
                    <div class="col-md-6 border-dark-50 border-bottom py-3">
                        <h4 class="text-black-50 text-center py-3 mb-0">¿Dónde estamos ubicados?</h4>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15718.176077541753!2d-84.0484498!3d9.9718428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scr!4v1656800937686!5m2!1ses-419!2scr" class="border border-info rounded-lg p-2 mx-auto d-block my-3" width="690" height="490" style="border:0;box-shadow:0 0.75em 0.75em 0.5em rgba(0,0,0,0.5);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                        </div>            
                    </div>
                </div>    
            </div>
                
            <div class="container-fluid bg-light pb-5">
                <div class="row">

                    <!-- Sección cinco: formulario de contacto -->
                    <div class="col-md-6 px-4 pt-4">                      
                        <h4 class="text-black-50 my-3">Envíanos un mensaje o concreta un cita:</h4>
                        <div class="borde_gr mb-3"></div>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="frmContacto needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-12 pb-2">
                                    <label><strong>Ingrese sus datos para contacto:</strong></label>
                                </div>       
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row pb-3">
                                <div class="form-group col-md-6">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección o domicilio" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telcasa">Teléfono casa:</label>
                                    <input type="tel" class="form-control" id="telcasa" name="telcasa" placeholder="Teléfono de casa" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telcelular">Teléfono celular:</label>
                                    <input type="tel" class="form-control" id="telcelular" name="telcelular" placeholder="Teléfono celular" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>
                            <div class="form-row border-dark-50 border-top pt-3">
                                <div class="col-md-12 pb-2">
                                    <label><strong>Ingrese los datos de su vehículo y seleccione el servicio que necesita:</strong></label>
                                </div>            
                                <div class="form-group col-md-3">
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
                                <div class="form-group col-md-3">
                                    <label for="modelo">Modelo del vehículo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del vehículo" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>                
                                <div class="form-group col-md-3">
                                    <label for="anio">Año del vehículo:</label>
                                    <input type="text" class="form-control" id="anio" name="anio" placeholder="Año del vehículo" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo</div>
                                </div>
                            </div>        
                            <div class="form-row py-2">
                                <div class="form-group col-md-12">                
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_1" name="servicio[]" value="Llantas">
                                        <label class="custom-control-label" for="serv_1">Llantas</label>                    
                                    </div>                
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_2" name="servicio[]" value="Motor">
                                        <label class="custom-control-label" for="serv_2">Motor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_3" name="servicio[]" value="Pintura">
                                        <label class="custom-control-label" for="serv_3">Pintura</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_4" name="servicio[]" value="Aceite">
                                        <label class="custom-control-label" for="serv_4">Aceite</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_5" name="servicio[]" value="Diagnostico">
                                        <label class="custom-control-label" for="serv_5">Diagnóstico</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_6" name="servicio[]" value="Aire_acondicionado">
                                        <label class="custom-control-label" for="serv_6">Aire acondicionado</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input opcion" id="serv_7" name="servicio[]" value="Otros_servicios">
                                        <label class="custom-control-label" for="serv_7">Otro servicio</label>
                                    </div>
                                </div>            
                            </div>                                   
                            <div class="form-row border-dark-50 border-top pt-3">
                                <div class="form-group col-md-12">
                                    <label for="comentario"><strong>Describa su solicitud de servicio o comentario adicional:</strong></label>
                                    <textarea class="form-control" cols="30" rows="5" id="comentario" name="comentario" required></textarea>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Favor realice una breve descripción del problema de su auto</div>
                                </div>
                            </div>
                            
<!--                            <input type="submit" id="boton" class="btn btn-primary" name="enviar" value="Enviar datos">-->
                            <button type="submit" id="boton" class="btn btn-primary">Enviar mensaje</button>
                                                                                    
                            <?php
                                require 'validaciones.php';
                            ?>
                            
                        </form>
                    </div>
                    
                    <div class="col-md-6 d-flex flex-row justify-content-center">
                                                
                        <!-- Horario de servicio -->
                        <div class="col-md-5 pt-4 mr-3">
                            <h4 class="text-black-50 my-3">Horario de servicio:</h4>
                            <div class="borde_gr mb-4"></div>

                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Lunes</small></li>
                                <li class="list-group-item"><small>7:30 a.m. - 5:30 p.m.</small></li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Martes</small></li>
                                <li class="list-group-item"><small>7:30 a.m. - 5:30 p.m.</small></li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Miércoles</small></li>
                                <li class="list-group-item"><small>7:30 a.m. - 5:30 p.m.</small></li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Jueves</small></li>
                                <li class="list-group-item"><small>7:30 a.m. - 5:30 p.m.</small></li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Viernes</small></li>
                                <li class="list-group-item"><small>7:30 a.m. - 5:30 p.m.</small></li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Sábado</small></li>
                                <li class="list-group-item"><small>7:30 a.m. - 1:00 p.m.</small></li>
                            </ul>
                            <ul class="list-group list-group-horizontal justify-content-between">
                                <li class="list-group-item"><small>Domingo</small></li>
                                <li class="list-group-item"><small>Cerrado</small></li>
                            </ul>
                        </div>
                        
                        <!-- Lista de servicios -->
                        <div class="col-md-6 pt-4 ml-3">
                            <h4 class="text-black-50 my-3">Además le ofrecemos:</h4>
                            <div class="borde_gr mb-4"></div>
                            
                            <div class="d-flex flex-row align-items-center">                        
                                <img src="imagenes/towTruckAzul48x48.png" class="iconServ">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><small class="font-weight-bold">Servicio de asistencia:</small><br><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <img src="imagenes/paperAzul48x48.png" class="iconServ">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><small class="font-weight-bold">Trámites con su aseguradora:</small><br><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <img src="imagenes/qualityAzul48x48.png" class="iconServ">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><small class="font-weight-bold">Calidad en cada trabajo:</small><br><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <img src="imagenes/workerAzul48x48.png" class="iconServ">&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="text-secondary"><small class="font-weight-bold">Personal especializado:</small><br><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sit amet efficitur metus pellentesque vitae.</small></p>
                            </div>
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
                            <a href="noticias.php" class="nav-link text-white p-0">Noticias</a>
                        </div>
                        <div class="d-flex flex-row pb-2">
                            <i class="bi bi-envelope-open-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="nav-link text-white p-0">Contáctenos</a>
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

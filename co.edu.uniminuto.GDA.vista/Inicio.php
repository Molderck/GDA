<!DOCTYPE html>
<html lang="es">

    <head>

        <!-- Meta Tag -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- SEO -->
        <meta name="description" content="150 words">
        <meta name="author" content="uipasta">
        <meta name="url" content="http://www.yourdomainname.com">
        <meta name="copyright" content="company name">
        <meta name="robots" content="index,follow">

        <title>GDA</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon/favicon.png">
        <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

        <!-- All CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="css/plugin.css">

        <!-- Main CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Google Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

        <!-- Configuración Mapa GDA -->
        <link href="css/styleMapGDA.css" rel="stylesheet" type="text/css"/>

        <!-- Script Configuración Funciones Mapa GDA -->
        <script src="../co.edu.uniminuto.GDA.controlador/js/scriptsMapGDA.js" type="text/javascript"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionEstadisticasInicio.js" type="text/javascript"></script>
    </head>
    <body>



        <!-- Preloader Start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader End -->



        <!-- Home & Menu Section Start -->
        <header id="home" class="home-section">

            <div class="header-top-area">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="logo" style="padding-top: 7px">
                                <img src="../co.edu.uniminuto.GDA.controlador/images/bg/logoGDA.png" alt=""/>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="navigation-menu">
                                <div class="navbar">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a class="smoth-scroll" href="#home">Inicio <div class="ripple-wrapper"></div></a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#about">Nosotros</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#registro">Registro</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#inicioSesion">Iniciar Sesión</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-section-background" data-stellar-background-ratio="0.6">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="header-text">

                                        <h2><span class="typing"></span></h2>

                                        <div class="margin-top-60">
                                            <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#inicioSesion">Iniciar Sesión</a>
                                        </div>

                                        <br><br>
                                        <div id="registroExitoso" class="alert alert-success alert-dismissible" hidden="true">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>¡Bien Hecho!</strong> Te has registrado satisfactoriamente. Ya puedes iniciar sesión.
                                        </div>

                                        <div id="registroFallido" class="alert alert-danger alert-dismissible" hidden="true">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>¡Algo paso!</strong> No te has podido registrar porque el correo ya esta registrado.
                                        </div>

                                        <div id="registroFallidoVacio" class="alert alert-danger alert-dismissible" hidden="true">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>¡Algo paso!</strong> No te has podido registrar porque no seleccionaste una ubicación.
                                        </div>

                                        <div id="sesionFallida" class="alert alert-danger alert-dismissible" hidden="true">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>¡Algo paso!</strong> No has podido iniciar sesión verifica tu correo y contraseña. Si todavía no estas registrado dirigete a Registro.
                                        </div>

                                        <div class="container">     
                                            <div class="row">
                                                <div class="statistics-center"> 

                                                    <div id="estadisticasInicio1">
                                                    </div>

                                                    <div id="estadisticasInicio2">
                                                    </div>

                                                    <div id="estadisticasInicio3">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </header>
        <!-- Home & Menu Section End-->




        <!-- About Start -->
        <section id="about" class="about-section">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="images/bg/me.jpg" draggable="false" alt="">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-me section-space-padding">

                        <h2>Nosotros</h2>
                        <p>Somos un grupo de profesionales convencidos de que la alimentación es uno de los elementos más sensibles en la evolución de la humanidad y que está ligada al desarrollo cultural y la adaptación del humano en el territorio, al aprovechamiento de recursos naturales para su sustento y la capacidad de ver, entender, interpretar y ajustar sus modelos de vida a las diferentes ofertas que el mismo territorio entrega.<br><br> 
                            Por eso y desde la plataforma GDA (GRADO DE DEPENDENCIA ALIMENTARIA), buscamos contribuir de manera positiva en la construcción de soluciones locales, nacionales e internacionales que mitiguen la dependencia alimentaria de las personas, familias y comunidades. Lo anterior, a través de indicadores medibles, que entregan cifras cuantitativas, de fácil interpretación y de alto impacto.<br><br>
                            Te invitamos hacer parte de nuestra red y a realizar aportes significativos con la seguridad, soberania y suficiencia alimentaria de tu país. 
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- About End -->

        <!-- Formulario Registro -->
        <section id="registro" class="contact-us section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Registrate</h2>
                            <p>Registrate para conocer tu índice GDA.</p>
                            <p style="font-size: 80%"><strong>Sigue estos pasos: </strong><br><strong>1.</strong> Ingresa los datos solicitados en los 6 (seis) campos.<br><strong>2.</strong> Ingresa tu ubicación en el campo en la parte superior del mapa.<br><strong>3.</strong> Selecciona la ubicación respectiva. <br><strong>4.</strong> Una vez se ubique un marcador en el mapa presiona el botón de <strong>Registrarse</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">   
                        <div class="row">
                            <form method="POST" action="../co.edu.uniminuto.GDA.controlador/ControlRegistro.php">
                                <br>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Nombres:</span>
                                        <input type="text" name="nombresUsuario" id="nombresUsuario" required class="form-control" placeholder="Escribe tus nombres" oninvalid="this.setCustomValidity('Debes ingresar tus nombres')" oninput="setCustomValidity('')" title="Ingresa tus nombres">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Apellidos:</span>
                                        <input type="text" name="apellidosUsuario" id="apellidosUsuario" required class="form-control" placeholder="Escribe tus apellidos" oninvalid="this.setCustomValidity('Debes ingresar tus apellidos')" oninput="setCustomValidity('')" title="Ingresa tus apellidos">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Fecha Nacimiento:</span>
                                        <input type="date" name="fechaNacimientoUsuario" id="fechaNacimientoUsuario" required class="form-control" oninvalid="this.setCustomValidity('Debes seleccionar una fecha')" oninput="setCustomValidity('')" title="Selecciona una fecha">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Ocupación:</span>
                                        <select class="form-control" id="ocupacionUsuario" name="ocupacionUsuario" required="" title="Selecciona una ocupación">
                                            <option value="Estudiante">Estudiante</option>
                                            <option value="Docente">Docente</option>
                                            <option value="Investigador">Investigador</option>
                                            <option value="Agricultor">Agricultor</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>Continente:</span>
                                        <input type="text" name="continenteUsuario" id="continenteUsuario"  class="form-control" placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false" >
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>País:</span>
                                        <input type="text" name="paisUsuario" id="paisUsuario"  class="form-control"placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false">
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>Departamento - Región:</span>
                                        <input type="text" name="departamentoRegionUsuario" id="departamentoRegionUsuario"  class="form-control" placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false" >
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>Ciudad - Municipio:</span>
                                        <input type="text" name="ciudadMunicipioUsuario" id="ciudadMunicipioUsuario"  class="form-control" placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false" >
                                    </div>
                                </div>

                                <input type="text" id="placeIDUsuario" name="placeIDUsuario" hidden="true">
                                <input type="text" id="ubicacionPersona" name="ubicacionPersona" hidden="true">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Correo:</span>
                                        <input type="email" name="correoUsuario" id="correoUsuario" required class="form-control" placeholder="Escribe tu correo" oninvalid="this.setCustomValidity('Ingresa tu correo correctamente')" oninput="setCustomValidity('')" title="Ingresa tu correo">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Contraseña:</span>
                                        <input type="password" name="contraseñaUsuario" id="contraseñaUsuario" required class="form-control" placeholder="Escribe tu contraseña" oninvalid="this.setCustomValidity('Debes ingresar tu contraseña')" oninput="setCustomValidity('')" title="Ingresa tu contraseña">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <br>
                                        <p style="font-size: 14px;text-align: center">Selecciona tu ubicación en el mapa →</p>
                                    </div>
                                </div>

                                <div class="text-center">      
                                    <button type="submit" id="Registrarse"name="Registrarse"  id="Registrarse" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Registrarse</button>
                                </div>

                            </form>

                        </div>
                    </div>


                    <div class="col-md-6">  
                        <input id="pac-input" class="controls" type="text"
                               placeholder="Ingresa tu ubicación">
                        <div id="map" style="width: 100%; height: 490px"></div>
                        <div id="infowindow-content">
                            <span id="place-name"  class="title"></span><br>
                            Place ID <span id="place-id"></span><br>
                            <span id="place-address"></span>
                        </div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRw99l8bYsLSNwqa8xJ7otyBcHDMPViY&libraries=places,geometry&callback=initMap"
                        async defer></script>
                    </div>
                </div>
            </div>
        </section>
        <!-- Formulario Registro -->

        <!-- Division 1.1 -->
        <section class="statistics-section21 section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
        </section>
        <!-- Division 1.1 -->

        <!-- Formulario Inicio Sesión -->
        <section id="inicioSesion" class="contact-us section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Iniciar Sesión</h2>
                            <p>Ingresa tu correo y contraseña para acceder a tu cuenta.</p>
                            <p style="font-size: 80%"><strong>Sigue estos pasos: </strong><br><strong>1.</strong> Ingresa tu correo electrónico registrado.<br><strong>2.</strong> Ingresa tu contraseña.<br><strong>3.</strong> Presiona el botón de <strong>Iniciar</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 text-center">

                        <div class="row">
                            <form method="POST" action="../co.edu.uniminuto.GDA.controlador/ControlSesion.php">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Correo:</span>
                                        <input type="email" name="correoUsuarioLogin" id="correoUsuarioLogin" class="form-control" placeholder="Ingresa tu correo" required="" oninvalid="this.setCustomValidity('Ingresa tu correo correctamente')" oninput="setCustomValidity('')" title="Ingresa tu correo">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Contraseña:</span>
                                        <input type="password" name="contraseñaUsuarioLogin" id="contraseñaUsuarioLogin" class="form-control" placeholder="Ingresa tu contraseña" required="" oninvalid="this.setCustomValidity('Ingresa tu contraseña')" oninput="setCustomValidity('')" title="Ingresa tu contraseña">
                                    </div>
                                </div>


                                <div class="text-center">      
                                    <button type="submit" name="Acceder" id="Acceder" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Iniciar</button>
                                </div>

                            </form>

                        </div>
                    </div>



                </div>
            </div>

            <div class="margin-top-80"> 
                <ul class="social-icon">
                    <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

        </section>
        <!-- Formulario Inicio Sesión -->

        <!-- Footer Start -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 text-left">
                        <p><span><a href="http://www.uniminuto.edu/web/bogota-presencial" target="_blank" class="smoth-scroll">Nosotros</a></span></p>
                    </div>

                    <div class="col-md-4 text-center">
                        <p>© Copyright 2018 - Uniminuto</p>
                    </div>

                    <div class="col-md-4 uipasta-credit text-right">
                        <p>Diseñado Por <a href="https://www.youtube.com/channel/UCWLCbJsrsr8BBP6Y9YzKEZA" target="_blank" title="SebastianOrtiz">Sebastian Ortiz</a></p>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <!-- Back to Top Start -->
        <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- Back to Top End -->


        <!-- All Javascript Plugins  -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugin.js"></script>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>-->

        <!-- Main Javascript File  -->
        <script type="text/javascript" src="js/scripts.js"></script>



    </body>
</html>
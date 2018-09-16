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
        <link rel="shortcut icon" href="../co.edu.uniminuto.GDA.controlador/images/favicon/favicon.png">
        <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

        <!-- All CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="css/plugin.css">

        <!-- Main CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/styleAdministrador.css">

        <!-- Google Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

        <!-- Configuración Mapa GDA -->
        <link href="css/styleMapGDA.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
        <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Script Configuración Funciones Mapa GDA -->
        <script src="js/scriptsMapGDAAlimento.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionesAlimentosGDA.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/guardarNuevoAlimentoAdmin.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionGestionAlimentos.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionEstadisticas.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
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
                                            <li><a class="smoth-scroll" href="#registroAlimento">Registrar Alimento</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#gestionarAlimentos">Gestionar Alimentos</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#estadisticasGDA">Estadísticas</a>
                                            </li>
                                            <li><a href="../inicio.php">Cerrar sesión</a>
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
                                        <p>¡Hola!</p>
                                        <h2><span class="typing"></span></h2>

                                        <div class="margin-top-60">
                                            <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#gestionarAlimentos">Gestionar Alimentos</a>
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

        <!-- Formulario Registro Alimento -->
        <section id="registroAlimento" class="contact-us section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Registrar Alimento</h2>
                            <p>Registra cualquier nuevo alimento en la plataforma.</p>
                            <p style="font-size: 80%"><strong>Sigue estos pasos: </strong><br><strong>1.</strong> Ingresa los datos solicitados en los 2 (dos) campos.<br><strong>2.</strong> Ingresa la ubicación del alimento en el campo en la parte superior del mapa.<br><strong>3.</strong> Selecciona la ubicación respectiva. <br><strong>4.</strong> Una vez se ubique un marcador en el mapa presiona el botón de <strong>Registrar Alimento</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">   

                        <div class="row">
                            <form method="POST" id="formAdminNuevoAlimento" name="formAdminNuevoAlimento">

                                <br><br><br><br><br><br>

                                <div id="registroAlimentoExitoso" class="alert alert-success alert-dismissible" hidden="true">
                                    <strong>¡Bien Hecho!</strong> El alimento ha sido registrado, queda pendiente de aprobación.
                                </div>

                                <div id="registroAlimentoFallido" class="alert alert-danger alert-dismissible" hidden="true">
                                    <strong>¡Algo paso!</strong> El alimento no ha sido registrado. Asegurate de ingresar ubicación y no dejar campos vacíos.
                                </div>

                                <div id="registroAlimentoFallidoRepetido" class="alert alert-danger alert-dismissible" hidden="true">
                                    <strong>¡Algo paso!</strong> El alimento no ha sido registrado debido a que ya existe.
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Nombre:</span>
                                        <input type="text" name="nombreAlimento" id="nombreAlimento" required class="form-control" placeholder="Escribe el nombre del alimento" oninvalid="this.setCustomValidity('Debes ingresar el nombre del alimento')" oninput="setCustomValidity('')" title="Ingresa el nombre del alimento">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span>Tipo - Variedad - Marca:</span>
                                        <input type="text" name="tipologiaAlimento" id="tipologiaAlimento" required class="form-control" placeholder="Escribe la marca/tipo/variedad de alimento" oninvalid="this.setCustomValidity('Debes ingresar la marca/tipo/variedad del alimento')" oninput="setCustomValidity('')" title="Ingresa la marca/tipo/variedad del alimento">
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>Continente:</span>
                                        <input type="text" name="continenteAlimento" id="continenteAlimento" required class="form-control" placeholder="Continente" >
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>País:</span>
                                        <input type="text" name="paisAlimento" id="paisAlimento" required class="form-control" placeholder="País" >
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>Departamento - Región:</span>
                                        <input type="text" name="departamentoRegionAlimento" id="departamentoRegionAlimento" required class="form-control" placeholder="Departamento - Región" >
                                    </div>
                                </div>

                                <div class="col-sm-6" hidden="true">
                                    <div class="form-group">
                                        <span>Ciudad - Municipio:</span>
                                        <input type="text" name="ciudadMunicipioAlimento" id="ciudadMunicipioAlimento" required class="form-control" placeholder="Ciudad - Municipio" >
                                    </div>
                                </div>

                                <input type="text" id="placeIDAlimentoNuevo" name="placeIDAlimentoNuevo" hidden="true">
                                <input type="text" id="ubicacionAlimentoNuevo" name="ubicacionAlimentoNuevo" hidden="true">

                                <div class="text-center">
                                    <button type="button" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center" onclick="guardarNuevoAlimentoAdmin();">Registrar Alimento</button>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="col-md-6">  
                        <input id="pac-input" class="controls" type="text"
                               placeholder="Ingresa ubicación del alimento">
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
        <!-- Formulario Registro Alimento -->

        <!-- Division 2.1 -->
        <section class="statistics-section section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
        </section>
        <!-- Division 2.1 -->


        <!-- Formulario de Gestionar Alimentos -->
        <section id="gestionarAlimentos" class="contact-us section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Gestionar Alimentos</h2>
                            <p>Administra que alimentos deben ser agregados a la plataforma si su información es correcta.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <form method="POST">
                                <div id="tablaGestionAlimentos"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Formulario de Gestionar Alimentos -->

        <!-- Division 2.2 -->
        <section class="statistics-section21 section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
        </section>
        <!-- Division 2.2 -->

        <!-- Formulario de Estadisticas -->
        <section id="estadisticasGDA" class="contact-us section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Estadísticas GDA</h2>
                            <p>Visualiza todas las estadísticas basada en los calculos de GDA</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div id="tablaEstadisticasGDA1" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div id="tablaEstadisticasGDA2" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div id="tablaEstadisticasGDA3" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div id="tablaEstadisticasGDA4" style="width: 100%;">
                            </div>
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
        <!-- Formulario de Estadisticas -->

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

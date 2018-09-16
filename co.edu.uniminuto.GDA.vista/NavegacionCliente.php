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
        <link rel="stylesheet" type="text/css" href="css/styleCliente.css">

        <!-- Google Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

        <!-- Configuración Mapa GDA -->
        <link href="css/styleMapGDA.css" rel="stylesheet" type="text/css"/>

        <link href="../co.edu.uniminuto.GDA.controlador/css/scriptSliderGDA.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
        <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Script Configuración Funciones Mapa GDA -->
        <script src="js/scriptsMapGDACalculo.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionesAlimentosGDA.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/ajaxID.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/ajaxUbicacion.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/ajaxGDAFinal.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/guardarValoraciones.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/guardarIndiceGDA.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/guardarNuevoAlimento.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/cambiarUbicacionUsuario.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionNombreAlimentoCargar.js" type="text/javascript"></script>
        <script src="../co.edu.uniminuto.GDA.controlador/js/funcionHistorialIndices.js" type="text/javascript"></script>
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
                                            <li><a class="smoth-scroll" href="#GDA">Calcular GDA</a>
                                            </li>
                                            <li><a class="smoth-scroll" href="#historialIndices">Historial Indices</a>
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
                                            <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#GDA">Calcular GDA</a>
                                        </div>

                                        <br><br>
                                        <div id="sesionExitosa" class="alert alert-success alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>¡Bien Hecho!</strong> Haz iniciado sesión satisfactoriamente.
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

        <!-- Division 2.1 -->
        <section class="statistics-section21 section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
        </section>
        <!-- Division 2.1 -->

        <!-- Formulario de GDA -->
        <section id="GDA" class="contact-us section-space-padding">
            <div id="zonaCalculoGDA"class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Calcular tu GDA</h2>
                            <p>Elige los alimentos que consumes y calcularemos tu indice GDA.</p>
                            <p style="font-size: 80%"><strong>Sigue estos pasos: </strong><br><strong>1.</strong> Presiona el botón de <strong>Confirmar</strong> si la ubicación en pantalla es la ubicación respectiva. De lo contrario presiona el botón <strong>Cambiar</strong>.<br><strong>2.</strong> Para escoger un alimento selecciona su nombre, su tipo - variedad - marca, el modo de adquisición y presiona el botón <strong>Asignar</strong>.<br><strong>3.</strong> Para agregar un alimento que no este en la lista presiona el botón <strong>Agregar Alimento</strong>. <br><strong>4.</strong> Para verificar si tu alimento ha sido aceptado presiona el botón <strong>Actualizar Alimento</strong> y revisa en la lista de nombre de alimentos.<br><strong>5.</strong> Presiona el botón <strong>Calcular</strong> para que la página haga el calculo respectivo.<br><strong>6.</strong> Presiona el botón <strong>Ver Resultado</strong> para observar cual es tu indice GDA.<br><strong>7.</strong> Presiona el botón <strong>Calcular Nuevo Indice</strong> para que la página calcule un nuevo indice GDA.</p>
                        </div>
                    </div>
                </div>

                <div id="confirmacionUbicacion" class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span>Ubicación registrada por el usuario:</span>
                                    <input type="text" name="referenciaUbicacionUsuario" id="referenciaUbicacionUsuario" class="form-control" placeholder="Referencia Ubicación" required="" readonly="">
                                </div>
                            </div>

                            <div class="col-sm-3">      
                                <a type="submit" name="confirmar" id="confirmar" onclick="" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Confirmar</a>
                            </div>

                            <div class="col-sm-3">      
                                <a type="submit" name="cambiar" id="cambiar" onclick="" data-toggle="modal" data-target="#modalcambiarUbicacion" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Cambiar</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <form id="formCalculoGDA" method="POST" action="../co.edu.uniminuto.GDA.controlador/ControlRegistroValoracion.php">

                                <div id="registroValoracionFallida" class="alert alert-danger alert-dismissible" hidden="true">
                                    <strong>¡Algo paso!</strong> El alimento no ha sido asignado, asegurate de seleccionar todas las opciones.
                                </div>

                                <div id="registroValoracionExitosa" class="alert alert-success alert-dismissible" hidden="true">
                                    <strong>¡Bien Hecho!</strong> El alimento ha sido asignado en el mapa.
                                </div>

                                <div id="registroValoracionFallidaRepetida" class="alert alert-danger alert-dismissible" hidden="true">
                                    <strong>¡Algo paso!</strong> El alimento no ha sido asignado debido a que ya ha sido asignado previamente.
                                </div>

                                <div id="nombreAlimentoGDAOpciones"class="col-sm-3" hidden="true">
                                    <div class="form-group">
                                        <span>Nombre:</span>
                                        <select id="nombreAlimentoGDA" name="nombreAlimentoGDA" class="form-control">
                                            <option value="Seleccionar Nombre">Seleccionar Nombre</option>
                                        </select>  
                                    </div>
                                </div>  

                                <div id="tipologiaAlimentoGDAOpciones"class="col-sm-3" hidden="true">
                                    <div class="form-group">
                                        <span>Tipo - Variedad - Marca:</span>
                                        <select id="tipologiaAlimentoGDA" class="form-control" onclick="asignarID();
                                                asignarUbicacion();" onchange="asignarPKAlimento();">
                                            <option value="Seleccionar Tipología">Seleccionar Tipo - Variedad - Marca</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="mercadoAlimentoGDAOpciones"class="col-sm-3" hidden="true">
                                    <div class="form-group">
                                        <span>Modo de Adquisicion:</span>
                                        <select id="mercadoAlimentoGDA" class="form-control" onchange="asignarPKMercado();">
                                            <option value="Seleccionar Mercado">Seleccionar Modo Adquisición</option>
                                            <option value="1" title="El producto que has consumido, es producido por ti mismo, no ha requerido ningun proceso de comercio.">Produce</option>
                                            <option value="2" title="Intercambiaste el alimento en un mercado de trueque, o has usado una moneda social, o un tipo de pago diferente al modelo convencional.">Intercambia</option>
                                            <option value="3" title="Has comprado el alimento con dinero convencional, en cualquiera de sus formas de pago (efectivo, dinero electronico o tarjetas de credito).">Compra</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="text" id="continenteUsuarioReferenciaGDA" name="continenteUsuarioReferenciaGDA" hidden="true">
                                <input type="text" id="paisUsuarioReferenciaGDA" name="paisUsuarioReferenciaGDA" hidden="true">
                                <input type="text" id="departamentoRegionUsuarioReferenciaGDA" name="departamentoRegionUsuarioReferenciaGDA" hidden="true">
                                <input type="text" id="ciudadMunicipioUsuarioReferenciaGDA" name="ciudadMunicipioUsuarioReferenciaGDA" hidden="true">

                                <input type="text" id="idUsuario" name="idUsuario" hidden="true">
                                <input type="text" id="idAlimento" name="idAlimento" hidden="true">
                                <input type="text" id="idOrigen" name="idOrigen" hidden="true">
                                <input type="text" id="idCuadrante" name="idCuadrante" hidden="true">
                                <input type="text" id="idMercado" name="idMercado" hidden="true">

                                <input type="text" id="refPlaceID" hidden="true">
                                <input type="text" id="refPlaceIDUsuario" hidden="true">
                                <input type="text" id="refFullAddress" hidden="true">

                                <input type="text" id="codigoReferenciaValoracion" name="codigoReferenciaValoracion" hidden="true">
                                <script>document.getElementById("codigoReferenciaValoracion").value = Math.random().toString(36).substring(2, 7) + Math.random().toString(36).substring(2, 7);</script>

                                <div id="asignacionAlimento" class="col-sm-3" hidden="true">      
                                    <a type="submit" name="asignar" id="asignar"  class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Asignar</a>
                                </div>

                                <div id="textoActualizarAlimento" class="col-sm-6" hidden="true">      
                                    <p>Nuevos alimentos han podido ser agregados, ¿Por qué no actualizas y verificas?</p>
                                    <a type="submit" name="actualizarAlimento" id="actualizarAlimento" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center" onclick="recargarNombreAlimento();">Actualizar Alimentos</a>
                                </div>

                                <div id="textoNuevoAlimento" class="col-sm-6 " hidden="true">      
                                    <p>Si el alimento no se encuentra, ¿Por qué no te atreves a agregarlo?</p>
                                    <a type="submit" name="agregarAlimento" id="agregarAlimento"  data-toggle="modal" data-target="#modalRegistroAlimento" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Agregar Alimento</a>
                                </div>


                                <div id="mapaAlimentos"class="text-center" hidden="true">  
                                    <div id="map" style="width: 100%; height: 490px"></div>
                                    <div id="infowindow-content">
                                        <span id="place-name"  class="title"></span><br>
                                        Place ID <span id="place-id"></span><br>
                                        <span id="place-address"></span>
                                    </div>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRw99l8bYsLSNwqa8xJ7otyBcHDMPViY&libraries=places,geometry&callback=initMap"
                                    async defer></script>
                                </div>

                                <!-- Modal Agregar Alimento-->

                                <div class="modal fade" id="modalRegistroAlimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <br><br><br>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h11 class="modal-title" id="exampleModalLabel">Agregar Alimento</h11>
                                                <br><br>
                                                <p style="font-size: 80%"><strong>Sigue estos pasos: </strong><br><strong>1.</strong> Ingresa la ubicación del alimento en el campo en la parte superior del mapa.<br><strong>2.</strong> Cuando escribas la ubicación debes usar las flechas ↑ o ↓ en tu teclado para navegar en las opciones y luego presionar la tecla Enter.<br><strong>3.</strong> Una vez se ubique un marcador en el mapa ingresa los datos solicitados en los 2 (dos) campos. <br> <strong>4.</strong> Presiona el botón <strong>Registrar Alimento</strong>.</p>
                                            </div>
                                            <div class="modal-body">

                                                <div id="registroAlimentoExitoso" class="alert alert-success alert-dismissible" hidden="true">
                                                    <strong>¡Bien Hecho!</strong> El alimento ha sido registrado, queda pendiente de aprobación.
                                                </div>

                                                <div id="registroAlimentoFallido" class="alert alert-danger alert-dismissible" hidden="true">
                                                    <strong>¡Algo paso!</strong> El alimento no ha sido registrado. Asegurate de ingresar ubicación y no dejar campos vacíos.
                                                </div>

                                                <div id="registroAlimentoFallidoRepetido" class="alert alert-danger alert-dismissible" hidden="true">
                                                    <strong>¡Algo paso!</strong> El alimento no ha sido registrado debido a que ya existe.
                                                </div>

                                                <input id="pac-input2" class="controls" type="text"
                                                       placeholder="Ingresa la ubicación del alimento">
                                                <div id="map2" style="width: 100%; height: 300px"></div>
                                                <div id="infowindow-content">
                                                    <span id="place-name2"  class="title"></span><br>
                                                    Place ID <span id="place-id2"></span><br>
                                                    <span id="place-address2"></span>
                                                </div>
                                                <br>
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

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" onclick="guardarNuevoAlimento();">Registrar Alimento</button>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Cambiar Ubicación-->

                                <div class="modal fade" id="modalcambiarUbicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <br><br><br>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h11 class="modal-title" id="exampleModalLabel">Cambiar Ubicación</h11>
                                                <br><br>
                                                <p style="font-size: 80%"><strong>Sigue estos pasos: </strong><br><strong>1.</strong> Ingresa tu nueva ubicación en el campo en la parte superior del mapa.<br><strong>2.</strong> Cuando escribas la ubicación debes usar las flechas ↑ o ↓ en tu teclado para navegar en las opciones y luego presionar la tecla Enter.<br><strong>3.</strong> Una vez se ubique un marcador en el mapa presiona el botón de <strong>Cambiar Ubicación</strong>.</p>
                                            </div>
                                            <div class="modal-body">

                                                <div id="nuevaUbicacionExitosa" class="alert alert-success alert-dismissible" hidden="true">
                                                    <strong>¡Bien Hecho!</strong> Tu nueva ubicación ha sido actualizada.
                                                </div>

                                                <div id="nuevaUbicacionFallida" class="alert alert-danger alert-dismissible" hidden="true">
                                                    <strong>¡Algo paso!</strong> Tu nueva ubicación no ha sido registrada. Asegurate de ingresar una ubicación.
                                                </div>

                                                <div id="nuevaUbicacionFallidaRepetida" class="alert alert-danger alert-dismissible" hidden="true">
                                                    <strong>¡Algo paso!</strong> La ubicación seleccionada es la misma que ya tenías.
                                                </div>

                                                <input id="pac-input3" class="controls" type="text"
                                                       placeholder="Ingresa tu nueva ubicación">
                                                <div id="map3" style="width: 100%; height: 300px"></div>
                                                <div id="infowindow-content">
                                                    <span id="place-name3"  class="title"></span><br>
                                                    Place ID <span id="place-id3"></span><br>
                                                    <span id="place-address3"></span>
                                                </div>
                                                <br>

                                                <div class="col-sm-6" hidden="true">
                                                    <div class="form-group">
                                                        <span>Continente:</span>
                                                        <input type="text" name="continenteUsuario" id="continenteUsuario" required class="form-control" placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false" >
                                                        <script>
                                                            $("#continenteUsuario").keydown(function (e) {
                                                                e.preventDefault();
                                                            });
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6" hidden="true">
                                                    <div class="form-group">
                                                        <span>País:</span>
                                                        <input type="text" name="paisUsuario" id="paisUsuario" required class="form-control"placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false">
                                                        <script>
                                                            $("#paisUsuario").keydown(function (e) {
                                                                e.preventDefault();
                                                            });
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6" hidden="true">
                                                    <div class="form-group">
                                                        <span>Departamento - Región:</span>
                                                        <input type="text" name="departamentoRegionUsuario" id="departamentoRegionUsuario" required class="form-control" placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false" >
                                                        <script>
                                                            $("#departamentoRegionUsuario").keydown(function (e) {
                                                                e.preventDefault();
                                                            });
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6" hidden="true">
                                                    <div class="form-group">
                                                        <span>Ciudad - Municipio:</span>
                                                        <input type="text" name="ciudadMunicipioUsuario" id="ciudadMunicipioUsuario" required class="form-control" placeholder="Ingresa tu ubicación en el mapa" oninvalid="this.setCustomValidity('Ingresa tu ubicación en el mapa')" title="Ingresa tu ubicación en el mapa" autocomplete="off" onpaste='return false' ondrop="return false" >
                                                        <script>
                                                            $("#ciudadMunicipioUsuario").keydown(function (e) {
                                                                e.preventDefault();
                                                            });
                                                        </script>
                                                    </div>
                                                </div>

                                                <input type="text" id="placeIDUbicacionNueva" name="placeIDUbicacionNueva" hidden="true"> 
                                                <input type="text" id="ubicacionNueva" name="ubicacionNueva" hidden="true">

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" onclick="guardarNuevaUbicacion();">Cambiar Ubicación</button>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="room_fileds" hidden="true">
                                    <div>
                                        <div class='label'>Ubicación Usuario:</div>
                                        <div class="content">
                                            <span>Continente</span>
                                            <input type="text" id="continente">
                                            <span>País</span>
                                            <input type="text" id="pais">
                                            <span>Departamento - Estado - Región</span>
                                            <input type="text" id="departamento">
                                            <span>Ciudad - Municipio</span>
                                            <input type="text" id="ciudad">
                                        </div>
                                    </div>
                                </div>

                                <div id="botonCalculoGDA"class="text-center" hidden="true">      
                                    <a type="submit" name="calcularGDA" id="calcularGDA" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center" onclick="guardarIndiceGDA();">Calcular</a>
                                </div>

                                <div id="botonResultadoGDA"class="text-center" hidden="true">      
                                    <a type="submit" name="resultadoGDA" id="resultadoGDA" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center"data-toggle="modal" data-target="#modalExample" onclick="asignarGDAFinal();">Ver Resultado</a>
                                </div>

                                <div id="botonRecargar"class="text-center" hidden="true">      
                                    <a type="submit" name="recargarGDA" id="recargarGDA" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center" onclick="window.location.reload();">Calcular Nuevo Indice</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Formulario GDA -->

        <!-- Division 2.2 -->
        <section class="statistics-section section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
        </section>
        <!-- Division 2.2 -->

        <!-- Modal -->
        <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <br><br><br><br><br><br>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h8 class="modal-title" id="exampleModalLabel">Resultado</h8>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-image: url('https://media.istockphoto.com/photos/vegetables-frame-picture-id505874940?k=6&m=505874940&s=612x612&w=0&h=DX8l5gkblEZOKIg3yfChPS-616GprMnTOc_hS9tOLf8='); background-size: cover;">
                        <!-- A PEN BY Jorge Epuñan -->
                        <div id="valorGDASlider" class="value"></div>
                        <input id="sliderGDA" type="range" min="1" max="5" step="0.1" disabled="">
                        <div id="textoGDASlider" class="value" style="font-size: 20px;letter-spacing: 2px"></div>
                        <!-- A PEN BY Jorge Epuñan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulario Historial Indices -->
        <section id="historialIndices" class="contact-us section-space-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Historial de Índices</h2>
                            <p>Visualiza tus índices GDA.</p>
                        </div>
                    </div>
                </div>

                <div id="tablaHistorialIndices" style="overflow-x: auto"></div>
            </div>

            <div class="margin-top-80"> 
                <ul class="social-icon">
                    <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

        </section>
        <!-- Formulario Historial Indices -->

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

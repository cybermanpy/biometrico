<!-- Autor: Edgar Missael Cabral Baez -->

<!DOCTYPE html><html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Portal único de informaciones y servicios orientados al ciudadano">
    <meta name="author" content="SENATICs">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>.:: Web ::. | Portada </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/960.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dispositivos/1000.css') }}" media="only screen and (min-width: 768px) and (max-width: 1000px)" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dispositivos/767.css') }}" media="only screen and (min-width: 480px) and (max-width: 767px)" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dispositivos/479.css') }}" media="only screen and (min-width: 200px) and (max-width: 479px)" />
    @yield('css')
</head>
<body>
<div class="body_detallado">
	<div class="controlador">
    
    <div class="controlador2">
        <div class="controlador_top">
            <div class="Buscador">
                <form action="" method="post">
                    <div class="icono-buscador"></div>
                    <input type="text" class="bases_buscador" placeholder="buscar"/>
                </form>
            </div>
        </div>
		<div class="cabecera_general">
        	<div class="logo">
                <a href="index.html"><img src="img/Logotipo.png" alt="Portal Paraguay" /></a>
            </div>
            <div class="logo2">
                <img src="img/gobierno.png" alt="Gobierno Nacional Paraguay" />
            </div>
        </div>
        
        <!-- Navegacion -->
        <nav id="nav">
            <ul class="Menu_general">
                <li class="seleccion"><a href="index.html">Portada</a></li>
                <li><a href="#">Institucional</a>
                    <ul>
                        <li><a href="mision-y-vision.html">Misión y Visión</a></li>
                        <li><a href="organigrama.html">Organigrama</a></li>
                        <li><a href="autoridades.html">Autoridades</a></li>
                    </ul>
                </li>
                <li><a href="noticias.html">Noticias</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="transparencia.html">Transparencia</a></li>
                <li><a href="contacto.html">Contactos</a></li>
            </ul>
        </nav>
        <!-- /Navegacion -->
            
        <!-- Cabecera -->
        <header id="header">
            <div class="contenedor_portal">
                
            </div>
        </header>
        <!-- /Cabecera -->
        
        <!-- Contenido -->
        <section id="Contenido">
            <div class="contenedor_portal">
            	<!--Laterar infos -->
                <div class="columna-uno-tres">
                	<div class="paneles">
                    	<h5>Estadistica de servicios catalogados</h5>
                        <a href="#"><div class="conocemas">
                            Últimos registrados
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Servicios más consultados
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Instituciones más consultadas
                        </div></a>
                    </div>
                    
                    <div class="paneles">
                    	<h5>Campañas del Estado</h5>
                        <img src="img/banner/ConectateSeguro_Paraguay.jpg" width="100%" height="auto" class="bases_contenidos"/>
                        <hr>
                        <img src="img/banner/portal.JPG" width="100%" height="auto" class="bases_contenidos"/>
                        <hr>
                        <div class="bases_contenidos">
                        	<h3 style="background-color:#EEE; padding:10px;">RECLAMÁ AQUI</h3>
                            <a href="#" class="boton_defe">Defensa al Consumidor</a>
                            <p style="margin-top:10px">Un servicio del MIC</p>
                        </div>
                    </div>
                    
                    <div class="paneles">
                    	<h5>Recursos Gratuitos</h5>
                        <div class="bases_contenidos">
                            <img src="img/banner/Guia_web.jpg" width="100%" height="auto"/>
                            <a href="#" class="boton_defe">Guía Estándar para sitios Web</a>
                        </div>
                    </div>
                    
                    <div class="paneles">
                    	<h5>Buscanos en Facebook</h5>
                    </div>
                </div>
                
                <!-- Contenido Principal -->
                <div class="Principal-contenido">
                
                    <!-- Terminos claves -->
                    <div class="columna-uno-tres">
                    	<h5>Servicios por términos claves</h5>
                        <div class="solo_base margen_no">
                        	@yield('content')
                        </div>
                        @yield('js')
                    </div>
                    <!-- /Terminos Claves -->
                    
                    <!-- Info en Linea -->
                	<div class="columna-uno-tres">
                    	<h5>Información en Linea</h5>
                        <div class="solo_base">
                        	<a href="#"><img src="img/banner/accede-en-linea.jpg" style="width:100%" height="auto" class="bases_contenidos" /></a>
                        </div>
                    </div>
                    <!-- /Info en Linea -->
                    
                    <!-- Sondeo -->
                    <div class="columna-dos-tres">
                    	<h5>Sondeo</h5>
                        <h6 class="normal"><a href="#">Obtención de documentos en linea</a></h6>
                        <h4 class="normal"><a href="#">¿Cuál de estos documentos te gustaría tramitarlo a través de internet?</a></h4>
                        <table width="100%" border="0" class="tabla">
                          <tr>
                            <th scope="col">%</th>
                            <th scope="col">Votos</th>
                            <th scope="col">Opc.</th>
                            <th scope="col">Titulo</th>
                          </tr>
                          <tr>
                            <td>60%</td>
                            <td>&nbsp;</td>
                            <td>a.</td>
                            <td>Certificado de defunción</td>
                          </tr>
                          <tr>
                            <td>9%</td>
                            <td>&nbsp;</td>
                            <td>b.</td>
                            <td>Certificado de Matrimonio</td>
                          </tr>
                          <tr>
                            <td>7%</td>
                            <td>&nbsp;</td>
                            <td>c.</td>
                            <td>Certificado de Nacimiento</td>
                          </tr>
                          <tr>
                            <td>8%</td>
                            <td>&nbsp;</td>
                            <td>d.</td>
                            <td>Certificado de Cédula</td>
                          </tr>
                          <tr>
                            <td>4%</td>
                            <td>&nbsp;</td>
                            <td>e.</td>
                            <td>Certificado de Estudios</td>
                          </tr>
                          <tr>
                            <td>8%</td>
                            <td>&nbsp;</td>
                            <td>f.</td>
                            <td>Certificado de Policiales</td>
                          </tr>
                          <tr>
                            <td>2%</td>
                            <td>&nbsp;</td>
                            <td>g.</td>
                            <td>Certificado de Otros (Completa el formulario de abajo)</td>
                          </tr>
                        </table>
                    </div>
                    <!-- /Sondeo -->
                    
                    <!-- Otros Tramites -->
                    <div class="columna-dos-tres">
                    	<h5>Otros Trámites</h5>
                        <div class="ancho" style="color:#333">
                            <p>Si especificaste "Otros", completa el siguiente formulario indicando el trámite de tu interés.</p>
                            <hr>
                            <div class="formulario">
                                Nombre del tramite
                                <input name="nombre" type="text" style="width:100%" class="campo_text">
                                Institución Involucrada en ofrecerla
                                <input name="nombre" type="text" style="width:100%" class="campo_text">
                                Tu Nombre y apellido (opcional)
                                <input name="nombre" type="text" style="width:100%" class="campo_text">
                                Tu correo electónico (opcional)
                                <input name="nombre" type="text" style="width:100%" class="campo_text">
                                <input name="enviar" type="submit">
                                <div class="info">
                            	Si el trámite o documento que te gustaría gestionar en linea, no se encuentra en las opciones anteriores, completa el formulario de abajo o escríbenos un correo electrónico a <a href="#">consultas@paraguay.gov.py.</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Otros Tramites -->
                    
                    <!-- conoce mas -->
                	<div class="columna-dos-tres">
                    	<div class="solo_base">
                        	<h5>Conoce más sobre</h5>
                            <div class="solo_base margen_no">
                                <a href="#"><div class="conocemas">
                                    Infocentros Comunitarios
                                </div></a>
                                <a href="#"><div class="conocemas">
                                    Paraguay Investment Opportunities - Invierta en Paraguay
                                </div></a>
                                <a href="#"><div class="conocemas">
                                    Visita Paraguay - Portal Turístico
                                </div></a>
                                <a href="#"><div class="conocemas">
                                    Paraguay en Fotos
                                </div></a>
                            </div>
                        </div>
                        
                        <div class="solo_base margen_no">
                        	<h5>Lo mejor</h5>
                            <div class="solo_base margen_no">
                                <h6 class="normal">Trabajamos para brindarle lo mejor en información del estado</h6>
                                <p>¿La información disponible en el portal es útil para usted?</p>
                                <p>¿Se siente cómodo con el formato de presentación y facilidad de uso del portal?</p>
                                <p>¿Necesita información con mayor detalle?</p>
                                <p>¿Tiene alguna recomendación?</p>
                                <p>Tome contacto con nosotros para realizar sus consultas, sugerencias y reclamos. Con mucho gusto lo atenderemos a través de los siguientes medios:</p>
                                <ul>
                                    <li>Llámenos a los teléfonos: 201-014 / 201-813</li>
                                    <li>Genere una consulta electrónica utilizando el formulario de Contacto Ciudadano</li>
                                    <li>Escríbanos un correo electrónico a consultas@paraguay.gov.py, o</li>
                                    <li>Síganos y comuníquese a través de las redes sociales.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /lo mejor -->
                </div>
                <!-- /Contenido Principal -->
                
            </div>    
        </section>
        <!-- / Contenidos -->
        
        <!-- Pie de pagina -->
        <footer id="footer" style="background:#eeeeee">
            <div class="contenedor_portal">
            	<div class="columna-dos-tres">
                    <h5>Enlaces de Interes</h5>
                    <a href="#">Enlace de Interes A</a><br />
                    <a href="#">Enlace de Interes B</a><br />
                    <a href="#">Enlace de Interes C</a>
                </div>
                <div class="columna-uno-tres">
                    <h5>Ayuda</h5>
                    <a href="#">Preguntas Frecuentes</a><br />
                    <a href="#">Consultas y Dudas</a>
                </div>
            </div>
        </footer>
        
        <footer id="footer">
            <div class="contenedor_portal" align="center">
                    República del Paraguay<br />
                    2015 Nombre de la Institucion<br />
                	<img src="img/80x15.png" width="80" height="15"> 
            </div>
        </footer>
        <!-- / Pie de pagima -->
    </div>
	</div>
</div>
<!-- / Fin web -->

<!-- SCRIPTS -->
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>
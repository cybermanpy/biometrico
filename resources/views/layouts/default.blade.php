<!-- Autor: Edgar Missael Cabral Baez -->

<!DOCTYPE html><html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Portal único de informaciones y servicios orientados al ciudadano">
    <meta name="author" content="SENATICs">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ANEAES - Asegurando la calidad de la Educación Superior  </title>
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
                <a href="{{ route('formcheck_show_path') }}"><img src="{{ asset ('img/logo400x108.png') }}" alt="Portal Paraguay" /></a>
            </div>
            <div class="logo2">
                <img src="img/gobierno.png" alt="Gobierno Nacional Paraguay" />
            </div>
        </div>
        
        <!-- Navegacion -->
        <nav id="nav">
            <ul class="Menu_general">
                <li class="seleccion"><a href="{{ route('formcheck_show_path') }}">Portada</a></li>
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
                    	<h5>Modelos de Acreditación y Evaluación</h5>
                        <a href="#"><div class="conocemas">
                            Modelo Nacional de Grado
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Modelo Nacional de Postgrado
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Proceso ARCU-SUR de Grado
                        </div></a>
                    </div>
                    
                    <div class="paneles">
                    	<h5>Universidade e Institutos </h5>
                        <a href="#"><div class="conocemas">
                            Nomina de Universidades
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Nomina de Inistitutos Superiores
                        </div></a>
                    </div>
                    
                    <div class="paneles">
                    	<h5>Informaciones</h5>
                        <a href="#"><div class="conocemas">
                            Aranceles
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Convocatorias Anuales
                        </div></a>
                        <a href="#"><div class="conocemas">
                            Informaciones y documentos relacionados con la Acreditación postergada
                        </div></a>
                    </div>
                    
                    <div class="paneles">
                    	<h5>Buscanos en Facebook</h5>
                    </div>
                </div>
                
                <!-- Contenido Principal -->
                <div class="Principal-contenido">
                
                    <!-- Terminos claves -->
                    <div class="columna-uno-tres">
                    	<h5>Consultar Asistencia</h5>
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
                        	<a href="#"><img src="{{ asset ('img/banner/accede-en-linea.jpg') }}" style="width:100%" height="auto" class="bases_contenidos" /></a>
                        </div>
                    </div>
                    <!-- /Info en Linea -->
                    
            
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
                    <a href="http://www.mec.gov.py">Ministerio de Educación y Cultura</a><br />
                    <a href="http://www.mec.gov.py/intramec/login">Nautilus</a><br />
                    <a href="http://www.conec.gov.py/">Conec</a>
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
                    2016 Agencia Nacional de Evaluación y Acreditación de la Educación Superior <br />
                	<img src="{{ asset ('img/80x15.png') }}" width="80" height="15"> 
            </div>
        </footer>
        <!-- / Pie de pagima -->
    </div>
	</div>
</div>
<!-- / Fin web -->

<!-- SCRIPTS -->
<script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
</body>
</html>
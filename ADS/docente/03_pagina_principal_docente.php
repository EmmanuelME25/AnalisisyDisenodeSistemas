﻿<?php
    session_start();
?>
<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Inicio docente</title>
	<!-- Bootstrap Styles-->
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='../../brilliant-free-bootstrap-admin-template/http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-plane"></i> MENÚ</strong></a>
				<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                  
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                   
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="03_pagina_principal_docente.php"><i class="fa fa-dashboard"></i> Página Principal</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i>Pase de lista<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="11_consultar_lista_asistencia.php">Consultar lista de asistencia</a>
                            </li>
                            <li>
                                <a href="12_generar_lista_asistencia.php">Generar lista de asistencia</a>
                            </li>
						</ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-sitemap"></i> Calificaciones<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Calificiones de actividades<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="04_calificar_actividad.php">Calificar una actividad</a>
                                    </li>
                                    <li>
                                        <a href="06_eliminar_calif_actividad.php">Eliminar calificaciones de actividad</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Calificar parciales<samp class="fa arrow"></samp></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="07_registrar_calif_parciales.php">Registrar calificaciones de parcial</a>
                                    </li>
                                    <li>
                                        <a href="08_actualizar_calif_parciales.php">Actualizar calificaciones de parcial</a>
                                    </li>

                                </ul>
                            </li>
						</ul>
					</li>
                    <li>
                        <a href="09_10_crear_planeacion.php"><i class="fa fa-qrcode"></i>Planeaciones</a>
                    </li>
                    
                    <li>
                        <a href="../cerrar.php"><i class="fa fa-table"></i>Cerrar sesión</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Inicio <small>Sistema escolar</small>
                        </h1>
						<ol class="breadcrumb">
					  <li class="active">Inicio</li>
					</ol> 
									
		</div>
            <div id="page-inner">
                <!-- -------------------------------------------------------------------------------------------------------- -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3><b>Bienvenido</b></h3><br>
                                <div class="sub-title"> ¿Con qué desea comenzar?<br></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div>
                                    <ul>
                                        <li>Calificaciones
                                            <ul>
                                                <li><a href="#">Consultar calificaciones de actividades</a></li>
                                                <li><a href="04_calificar_actividad.html">Calificar actividades</a></li>
                                                <li><a href="#">Consultar calificaciones parciales y final</a></li>
                                                <li><a href="07_registrar_calif_parciales.html">Registrar calificaciones parciales y final</a></li>
                                            </ul>
                                        </li><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div>
                                    <ul>
                                        <li>Pase de lista
                                            <ul>
                                                <li><a href="11_consultar_lista_asistencia.html">Consultar lista de asistencia</a></li>
                                                <li><a href="12_generar_lista_asistencia.html">Generar lista de asistencia</a></li>
                                            </ul>
                                        </li><br>                                        
                                        <li>Planeaciones
                                            <ul>
                                                <li><a href="09_10_crear_planeacion.html">Generar planeaciones</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <footer><br><br><br><br><p align="right">|   EME   |   APRS   |   ATC   |   EDTA   |   BSVR   |</a></p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../brilliant-free-bootstrap-admin-template/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../../brilliant-free-bootstrap-admin-template/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../brilliant-free-bootstrap-admin-template/assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../../brilliant-free-bootstrap-admin-template/assets/js/custom-scripts.js"></script>
    
   
</body>
</html>




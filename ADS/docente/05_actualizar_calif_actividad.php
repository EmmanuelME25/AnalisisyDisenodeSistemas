<?php
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
    <title>Bootstrap Admin Theme : Master - WebThemez</title>
	<!-- Bootstrap Styles-->
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/font-awesome.css" rel="stylesheet" />
	
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/select2.min.css" rel="stylesheet" >
	<link href="../../brilliant-free-bootstrap-admin-template/assets/css/checkbox3.min.css" rel="stylesheet" >
        <!-- Custom Styles-->
    <link href="../../brilliant-free-bootstrap-admin-template/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-plane"></i> SCC</strong></a>
				<div id="sideNav" href="">
			<i class="fa fa-bars icon"></i> 
			</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
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
        <div id="page-wrapper" >
		  <div class="header"> 
            <h1 class="page-header">Calificar una actividad</h1>
            <ol class="breadcrumb">
                <li><a href="#">Página Principal</a></li>
                <li class="active">Calificar una actividad</li>
            </ol> 		
		</div>
		
            <div id="page-inner"> 
            <!-- -------------------------------------------------------------------------------------------------------- -->
                <div class="row">
                    <div class="col-md-8">

                        <!-- TABLA DE ALUMNOS PARA INGRESAR CALIFICACIONES -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre del alumno</th>
                                                <th>Calificación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Trejo Aguiñaga Eliane Danae</td>
                                                <td>
                                                    <input type="text" class="form-control" id="calif_act" placeholder="Ingresar calificación">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Rebolloso Saucedo Ana Paola</td>
                                                <td>
                                                    <input type="text" class="form-control" id="calif_act" placeholder="Ingresar calificación">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tamayo Castro Alejandro</td>
                                                <td>
                                                    <input type="text" class="form-control" id="calif_act" placeholder="Ingresar calificación">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- ----------------------------------------------------------------------------------------------------------------- -->
                <!-- SELECCIONAR CAMPOS -->
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="sub-title">Grado:</div>
                                <div>
                                    <select class="form-control" id="grado">
                                        <option value="1ro">1ro</option>
                                        <option value="2do">2do</option>
                                        <option value="3ro">3ro</option>
                                        <option value="4to">4to</option>
                                        <option value="5to">5to</option>
                                        <option value="6to">6to</option>
                                    </select>
                                </div>
                                <div class="sub-title">Grupo:</div>
                                <div>
                                    <select class="form-control" id="grupo">
                                        <option value="1ro">A</option>
                                        <option value="2do">B</option>
                                        <option value="3ro">C</option>
                                        <option value="4to">D</option>
                                        <option value="5to">E</option>
                                        <option value="6to">F</option>
                                    </select>
                                </div>
                                <div class="sub-title">Materia:</div>
                                <div>
                                    <select class="form-control" id="materia">
                                        <option value="Español">Español</option>
                                        <option value="Matematicas">Matematicas</option>
                                        <option value="Ciencias Naturales">Ciencias Naturales</option>
                                        <option value="Historia">Historia</option>
                                        <option value="Geografia">Geografia</option>
                                        <option value="Etica">Etica</option>
                                    </select>
                                </div>
                                <div class="sub-title">Actividad:</div>
                                <div>
                                    <select class="form-control" id="materia">
                                        <option value="Español">Análisis de verbos</option>
                                        <option value="Matematicas">Conceptos básicos I</option>
                                    </select>
                                </div>
                                <div class="form-group" align="center">
                                    <br>
                                    <a href="#" class="btn btn-primary">Actualizar</a>
                                </div>
                                <div class="form-group" align="center">
                                    <a href="#" class="btn btn-default">Cancelar</a><br>
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
	<script src="../../brilliant-free-bootstrap-admin-template/assets/js/select2.full.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	  $(".selectbox").select2();
	});
	</script>
      <!-- Custom Js -->
    <script src="../../brilliant-free-bootstrap-admin-template/assets/js/custom-scripts.js"></script> 
	
		
   
</body>
</html>
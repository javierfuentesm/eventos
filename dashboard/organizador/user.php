<<<<<<< HEAD
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Perfil</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
=======
<?php session_start(); 
include("conexion.php");
?>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Perfil</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
>>>>>>> origin/master
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<<<<<<< HEAD

    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


=======
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
>>>>>>> origin/master
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
<<<<<<< HEAD

=======
>>>>>>> origin/master
            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>Perfil de Usuario</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
<<<<<<< HEAD
               
=======
>>>>>>> origin/master
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Eventos</p>
                    </a>
                </li>
<<<<<<< HEAD
            
                
            </ul>
        </div>
    </div>


=======
            </ul>
        </div>
    </div>
>>>>>>> origin/master
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Perfil</a>
                </div>
                <div class="collapse navbar-collapse">
<<<<<<< HEAD
                    

=======
>>>>>>> origin/master
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Cuenta
                            </a>
                        </li>
<<<<<<< HEAD
                              
=======
>>>>>>> origin/master
                        <li>
                            <a href="#">
                                Cerrar Sesion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<<<<<<< HEAD


=======
>>>>>>> origin/master
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
<<<<<<< HEAD
                                <h4 class="title">Editar Perfil</h4>
=======
                                <h4 class="title">Resumen de Perfil</h4>
>>>>>>> origin/master
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
<<<<<<< HEAD
                                                <label>ID</label>
                                                <?php
                                                    include("conexion.php");
                                                    $con = new conexion1();
                                                    $con->recuperarDatos();
                                                 ?>
=======
                                                <label>ID Organizador</label>
                                                <?php
                                                    recuperarDatos1();
                                                ?>
>>>>>>> origin/master
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo Electronico</label>
<<<<<<< HEAD
                                                <input type="Correo" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

=======
                                                <?php
                                                    recuperarDatos2();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
>>>>>>> origin/master
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Primer Nombre</label>
<<<<<<< HEAD
                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
=======
                                                <?php
                                                    recuperarDatos3();
                                                ?>
>>>>>>> origin/master
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido</label>
<<<<<<< HEAD
                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                            </div>
                                        </div>
                                    </div>

                            

=======
                                                <?php
                                                    recuperarDatos4();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
>>>>>>> origin/master
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono</label>
<<<<<<< HEAD
                                                <input type="text" class="form-control" placeholder="Telefono" value="Mike">
=======
                                                <?php
                                                    recuperarDatos5();
                                                ?>
>>>>>>> origin/master
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>RFC</label>
<<<<<<< HEAD
                                                <input type="text" class="form-control" placeholder="RFC" value="Andrew">
=======
                                                <?php
                                                    recuperarDatos6();
                                                ?>
>>>>>>> origin/master
                                            </div>
                                        </div>
                                        </div>
                                    </div>
<<<<<<< HEAD


                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
=======
>>>>>>> origin/master
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                   
                       


        <footer class="footer">
            <div class="container-fluid">
               
=======
        <footer class="footer">
            <div class="container-fluid">
>>>>>>> origin/master
                <p class="copyright pull-right">
                    &copy; 2016
                </p>
            </div>
        </footer>
<<<<<<< HEAD

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

=======
    </div>
</div>
</body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="assets/js/light-bootstrap-dashboard.js"></script>
	<script src="assets/js/demo.js"></script>
>>>>>>> origin/master
</html>
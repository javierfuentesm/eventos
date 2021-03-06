<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Agenda de Eventos</title>

	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<script type="text/javascript">
	function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}

div.panel.show {
    display: block;
}

</style>
</head>
<body>
	<?php
		if(session_status()!=PHP_SESSION_ACTIVE)
		session_start();
		//$_SESSION["email"]="correo@gmail.com";
	 ?>
	<!-- .preloader -->
	<div class="preloader"></div>
	<!-- /.preloader -->


	<!-- #header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<!-- .logo -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 logo">
					<a href="index.php"><img src="img/resources/logo.png" alt="Logo Image"></a>
				</div>
				<!-- /.logo -->

				<!-- .mainmenu-container -->
				<nav class="col-lg-9 col-md-9 col-sm-6 col-xs-6 mainmenu-container">
					<button class="nav-toggler">Navigation <i class="fa fa-bars"></i></button>
					<ul class="mainmenu clearfix">
						<li class="nav-closer"><i class="fa fa-close"></i></li>
						<li class="current scrollToLink dropdown">
							<a href="#banner">Inicio</a>
						</li>

						<li class="scrollToLink"><a href="#upcoming-event">EVENTOS</a></li>
		<?php
		if(!isset($_SESSION['email']) || empty($_SESSION['email']))
		{
			echo "<li class=\"scrollToLink\"><a href=\"#register-now\">REGISTRATE</a></li>";
		}
		//$_SESSION["email"]="correo@gmail.com";
	 ?>
	<?php
		if(!isset($_SESSION['email']) || empty($_SESSION['email']))
		{
			echo "<li class=\"scrollToLink\"><a href=\"index2.html\">INICIA SESION</a></li>";
		}
		//$_SESSION["email"]="correo@gmail.com";
	 ?>
	 
	<?php
		if(isset($_SESSION['email']) || !empty($_SESSION['email']))
		{
			echo "<li class=\"scrollToLink\"><a href=\"dashboard/participante/user.php\">MI CUENTA</a></li>";
		}
		//$_SESSION["email"]="correo@gmail.com";
	 ?>			




					</ul>
				</nav>
				<!-- /.mainmenu-container -->
			</div>
		</div>
	</header>
	<!-- /#header -->

	<!-- #banner -->
	<section id="banner">
		<div class="banner-container">
			<div class="banner">
				<ul>

					<li
						data-transition="fade"
						data-slotamount="7"
						class="slider-1 text-center gradient-overlay"
						data-thumb="img/background/banner-bg.jpg"
						data-title="EXPERTISE YOU CAN TRUST">
						<img
							src="img/background/banner-bg.jpg"
							data-bgposition="center center"
							data-kenburns="on"
							data-duration="20000"
							data-ease="Linear.easeNone"
							data-bgfit="100"
							data-bgfitend="130"
							data-bgpositionend="center center"
							alt="slider image">
						<div
							class="caption sfb tp-resizeme text-center"
							data-x="0"
							data-y="220"
							data-speed="700"
							data-start="1000"
							data-easing="easeOutBack">

							<div class="date">


								<?php
								//se despliegan la fecha del ultimo evento registrado
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "evento";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error)
									{
										//echo ("Connection failed: " . $conn->connect_error);
									}
									else
									{
										//echo "Connection succesful";
									}

									$sql = "SELECT titulo_e,FechIniEv,ubicacion,costo FROM evento";
									$result = $conn->query($sql);

									if ($result->num_rows > 0)
									{
										$i=0;
										// output data of each row
										while($row = $result->fetch_assoc())
										{
											//echo "titulo_e: " . $row["titulo_e"]. " - FechIniEv: " . $row["FechIniEv"] . " - ubicacion: " . $row["ubicacion"] ." - costo: " . $row["costo"] ."<br>";
											$i+=1;;
											if($i==$result->num_rows)
											{
												echo "El evento iniciará el: " . $row["FechIniEv"] . "<br>";
											}
										}
									}
									else
									{
										//echo "0 results";
									}
									$conn->close();
								?>



							</div>
						</div>

						<div
							class="caption sfb tp-resizeme"
							data-x="0"
							data-y="290"
							data-speed="700"
							data-start="1500"
							data-easing="easeOutBack">

							<h1>

																<?php
																//se despliegan la fecha del ultimo evento registrado
																	$servername = "localhost";
																	$username = "root";
																	$password = "";
																	$dbname = "evento";

																	// Create connection
																	$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																	if ($conn->connect_error)
																	{
																		//echo ("Connection failed: " . $conn->connect_error);
																	}
																	else
																	{
																		//echo "Connection succesful";
																	}

																	$sql = "SELECT titulo_e,FechIniEv,lugar,costo FROM evento";
																	$result = $conn->query($sql);

																	if ($result->num_rows > 0)
																	{
																		$i=0;
																		// output data of each row
																		while($row = $result->fetch_assoc())
																		{
																			//echo "titulo_e: " . $row["titulo_e"]. " - FechIniEv: " . $row["FechIniEv"] . " - ubicacion: " . $row["ubicacion"] ." - costo: " . $row["costo"] ."<br>";
																			$i+=1;;
																			if($i==$result->num_rows)
																			{
																				echo "Evento: " . $row["titulo_e"] . "<br>";
																				echo "Lugar: " . $row["lugar"] . "<br>";

																			}
																		}
																	}
																	else
																	{
																		//echo "0 results";
																	}
																	$conn->close();
																?>
							</h1>
						</div>
<!--
						<div
							class="caption sfb tp-resizeme input-box"
							data-x="0"
							data-y="370"
							data-speed="700"
							data-start="2200"
							data-easing="easeOutBack">

							<ul class="count-down"></ul>
						</div>
-->
						<ul
							class="caption sfb tp-resizeme banner-buttons"
							data-x="0"
							data-y="530"
							data-speed="700"
							data-start="2500"
							data-easing="easeOutBack">

							<li class="scrollToLink"><a href="#register-now" class="colored hvr-bounce-to-right">Registrate Ahora</a></li>
							<li class="scrollToLink"><a href="#upcoming-event" class="bordered hvr-bounce-to-right">Ve los demás eventos</a></li>

						</ul>
					</li>

					<li
						data-transition="fade"
						data-slotamount="7"
						class="slider-2 text-center gradient-overlay"
						data-thumb="img/background/subscribe-section-bg.jpg"
						data-title="EXPERIENCIA EN LA CUAL PUEDES CONFIAR">

						<img
							src="img/background/subscribe-section-bg.jpg"
							data-bgposition="center center"
							data-kenburns="on"
							data-duration="20000"
							data-ease="Linear.easeNone"
							data-bgfit="100"
							data-bgfitend="130"
							data-bgpositionend="center center"
							alt="slider image">

						<div
							class="caption sfb tp-resizeme text-center"
							data-x="0"
							data-y="300"
							data-speed="700"
							data-start="1000"
							data-easing="easeOutBack">

							<h1>NO TE LO PIERDAS<br/>
							</h1>
						</div>

						<div
							class="caption sfb tp-resizeme"
							data-x="0"
							data-y="370"
							data-speed="700"
							data-start="1500"
							data-easing="easeOutBack">

							<p>


								<?php
								//se despliegan la fecha del ultimo evento registrado
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "evento";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error)
									{
										//echo ("Connection failed: " . $conn->connect_error);
									}
									else
									{
										//echo "Connection succesful";
									}

									$sql = "SELECT titulo_e,FechIniEv,lugar,costo FROM evento";
									$result = $conn->query($sql);

									if ($result->num_rows > 0)
									{
										$i=0;
										// output data of each row
										while($row = $result->fetch_assoc())
										{
											//echo "titulo_e: " . $row["titulo_e"]. " - FechIniEv: " . $row["FechIniEv"] . " - ubicacion: " . $row["ubicacion"] ." - costo: " . $row["costo"] ."<br>";
											$i+=1;;
											if($i==1)
											{
												echo "" . $row["titulo_e"] . "<br>";
												echo "" . $row["lugar"] . "<br>";
												echo "" . $row["FechIniEv"] . "<br>";
											}
										}
									}
									else
									{
										//echo "0 results";
									}
									$conn->close();
								?>

							</p>
						</div>
						<ul
							class="caption sfb tp-resizeme banner-buttons"
							data-x="0"
							data-y="450"
							data-speed="700"
							data-start="2500"
							data-easing="easeOutBack">

							<li class="scrollToLink"><a href="#register-now" class="bordered hvr-bounce-to-right">Registrate</li>
							<li class="scrollToLink"><a href="#upcoming-event" class="bordered hvr-bounce-to-right">Ver Más</a></li>

						</ul>
					</li>
				</ul>
			</div>
		</div>
	</section> <!-- /#banner -->

	<!-- #information-bar -->
	<section id="information-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<li><span class="img-holder"><img src="img/icons/1.png" alt=""></span></li>
						<li><span><b>México</b> Localizaciones</span></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<li><span class="img-holder"><img src="img/icons/2.png" alt=""></span></li>
						<li><span><b>Tú</b> Patrocinadores</span></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<li><span class="img-holder"><img src="img/icons/3.png" alt=""></span></li>
						<li><span><b>Disucrsantes</b></span></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<li><span class="img-holder"><img src="img/icons/4.png" alt=""></span></li>
						<li><span><b>Tazas de Cafe</b> Contador de cafe</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- /#information-bar -->

	<iframe style="display:none;" name="frame"></iframe>

	<!-- #upcoming-event -->
	<section id="upcoming-event">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7">
					<div class="section-title">
						<h1>Todos los Eventos</h1>
						<p>OBSERVA TODOS NUESTROS EVENTOS Y SUBSCRÍBETE AL QUE SE ADE TU MAYOR INTERÉS</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--
					<div class="tab-title-wrap">
						<ul class="clearfix">
							<li class="filter active" data-filter="all"><span>All Event</span></li>
							<li class="filter" data-filter=".april-14"><span>April 14</span></li>
							<li class="filter" data-filter=".april-22"><span>April 22</span></li>
							<li class="filter" data-filter=".april-28"><span>April 28</span></li>
							<li class="filter" data-filter=".may-10"><span>May 10</span></li>
							<li class="filter" data-filter=".may-15"><span>May 15</span></li>
							<li class="filter" data-filter=".may-22"><span>May 22</span></li>
							<li class="filter" data-filter=".may-23"><span>May 23</span></li>
							<li class="filter" data-filter=".jun-01"><span>June 01</span></li>
						</ul>
					</div>
					<iframe style="display:none;" name="frame" src="registrarse_evento.php"></iframe>

					-->

					<div id="mis_eventos" class="tab-content-wrap row">
						<?php
						//se despliegan todos los eventos en la pagina principal
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "evento";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error)
							{
							    //echo ("Connection failed: " . $conn->connect_error);
							}
							else
							{
								//echo "Connection succesful";
							}

							$sql = "SELECT titulo_e,FechIniEv,ubicacion,costo,id_evento FROM evento";
							$result = $conn->query($sql);

							if ($result->num_rows > 0)
							{
								$cadena="";
								$i=0;
							    // output data of each row
							    while($row = $result->fetch_assoc())
								{
									$i+=1;

							        //echo "titulo_e: " . $row["titulo_e"]. " - FechIniEv: " . $row["FechIniEv"] . " - ubicacion: " . $row["ubicacion"] ." - costo: " . $row["costo"] ."<br>";
									$cadena.=
									"
										<div class=\"col-lg-3 col-md-4 col-sm-6 mix hvr-float-shadow wow fadeIn\">
											<div class=\"img-holder\"><img src=\"img/upcoming-event/1.jpg\" alt=\"\"></div>
											<div class=\"content-wrap\">
												<img src=\"img/upcoming-event/author.png\" alt=\"\" class=\"author-img\">
												<div class=\"meta\">
													<ul>
														<li><span><i class=\"fa fa-clock-o\"></i>" . $row["FechIniEv"] .
														"___\$i=".$i.
														"</span></li>
														<li><span><i class=\"fa fa-map-marker\"></i>".$row["ubicacion"]."</span></li>
													</ul>
												</div>
												<h3>".$row["titulo_e"]."</h3>
												<p>"."Costo: \$".$row["costo"]."</p>
												";
												if(isset($_SESSION['email']) && !empty($_SESSION['email']))
												{
													$cadena.=
													"
													<form action=\"registrarse_evento.php\" method=\"post\" >
													<input style=\"display:none;\" type=\"hidden\" name=\"id_evento\" value=\"".$row["id_evento"]."\">
													<input style=\"display:none;\" type=\"hidden\" name=\"email\" value=\"".$_SESSION["email"]."\">
													<input type=\"submit\" value=\"Suscribirse\">
													</form>
													";
												}
												else
												{
													$cadena.=
													"<a class=\"read-more \" href=\"#register-now\">Suscribirse<i class=\"fa fa-angle-right\"></i></a>";

												}
												//echo "i = ".$i.", isset(\$_SESSION['email']) && !empty(\$_SESSION['email']) = ".(isset($_SESSION['email']) && !empty($_SESSION['email']));
												$cadena.="
											</div>
										</div>
									";
									echo $cadena;
							    }
							}
							else
							{
							    echo "0 results";
							}
							$conn->close();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /#upcoming-event -->

	<!-- #register-now -->
	
	<?php
	if(isset($_SESSION['email']) || !empty($_SESSION['email']))
	{
		
	}
	else
	{
		
	echo 
	"
	<section id=\"register-now\" class=\"gradient-overlay\">
		<div class=\"container\">
			<div class=\"row\">
				<div class=\"col-lg-12\">
					<div class=\"section-title text-center\">
						<h1>REGÍSTRATE Y ÚNETE A NOSOTROS</h1>
					</div>
				</div>
			</div>
			<div class=\"row\">
				<div class=\"col-lg-12\">


						<h1>Selecciona el Tipo de usuario</h1>
						<br>
						<button class=\"accordion\">Alumno</button>
				<div class=\"panel\">
  				<form action=\"altaalumno.php\" method=\"post\">
					<ul class=\"clearfix\">
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\" >NOMBRE</label>
								<input type=\"text\" name=\"nombrea\" placeholder=\"Nombre\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">APELLIDO PATERNO</label>
								<input type=\"text\" name=\"apa\" placeholder=\"Apellido Paterno\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">APELLIDO MATERNO</label>
								<input type=\"text\" name=\"ama\" placeholder=\"Apellido Materno\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">EDAD</label>
								<input type=\"Number\" name=\"edada\" placeholder=\"Edad\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/email.png\" alt=\"\">CODIGO POSTAL</label>
								<input type=\"text\" name=\"cpa\" placeholder=\"Código Postal\" onkeypress=\"return valida(event)\" size=\"5\" maxlength=\"5\" minlength=\"5\" required>

							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/email.png\" alt=\"\">EMAIL</label>
								<input type=\"text\" name=\"emaila\" placeholder=\"Ingresa tu email\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/phone.png\" alt=\"\">TELÉFONO</label>
								<input type=\"text\"  name=\"tela\" placeholder=\"Ingresa tu número\"  onkeypress=\"return valida(event)\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/phone.png\" alt=\"\">TELÉFONO CELULAR</label>
								<input type=\"text\" name=\"cela\" placeholder=\"Ingresa tu número celular\" onkeypress=\"return valida(event)\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">DIRECCIÓN</label>
								<input type=\"text\" name=\"direccion\" placeholder=\"Ingresa tu direccón\" required><BR><BR>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">BOLETA</label>
								<input type=\"text\" name=\"boleta\" placeholder=\"Ingresa tu boleta\" onkeypress=\"return valida(event)\" required><BR><BR>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">ESCUELA</label>
								<input type=\"text\" placeholder=\"Ingresa tu escuela\" name=\"escuela\" required>
							</div>
						</li>
						<li>

								<label><img src=\"img/icons/name.png\" alt=\"\">SELECCIONA TUS INTERESES</label>
								<label><input type=\"checkbox\" name=\"op1\" value=\"rap\">Option 1</label>
								<label><input type=\"checkbox\" value=\"\">Option 2</label>
								<label><input type=\"checkbox\" value=\"\">Option 3</label>

						</li>

						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/password.png\" alt=\"\">CONTRASEÑA</label>
								<input type=\"password\" name=\"password\" placeholder=\"PASSWORD\" required><BR><BR>
							</div>
						</li>
							<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">SOCIO</label>
								<select name=\"socio\">
								<option value=\"1\">SI</option>
								<option value=\"0\">NO</option>
								
									</select>
							</div>
						</li>

						<li>
							<div class=\"input-wrap\">
								<button type=\"submit\" class=\"hvr-bounce-to-right\">REGISTRAR</button>
							</div>
						</li>
						</ul>
						</form>
								</div>

			<button class=\"accordion\">Maestro</button>
								<div class=\"panel\">
 			<form action=\"altamaestro.php\" method=\"post\">
					<ul class=\"clearfix\">
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\" >NOMBRE</label>
								<input name=\"nombrem\" type=\"text\" placeholder=\"Nombre\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">APELLIDO PATERNO</label>
								<input type=\"text\" name=\"apm\" placeholder=\"Apellido Paterno\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">APELLIDO MATERNO</label>
								<input type=\"text\" name=\"amm\" placeholder=\"Apellido Materno\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">EDAD</label>
								<input type=\"Number\" name=\"edadm\" placeholder=\"Edad\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/email.png\" alt=\"\">CODIGO POSTAL</label>
								<input type=\"text\" name=\"cpm\" placeholder=\"Código Postal\" onkeypress=\"return valida(event)\" size=\"5\" maxlength=\"5\" minlength=\"5\" required>

							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/email.png\" alt=\"\">EMAIL</label>
								<input type=\"text\" name=\"emailm\" placeholder=\"Ingresa tu email\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">DIRECCIÓN</label>
								<input type=\"text\" name=\"direccionm\" placeholder=\"Ingresa tu direccón\" required><BR><BR>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/phone.png\" alt=\"\">TELÉFONO</label>
								<input type=\"text\" name=\"telm\" placeholder=\"Ingresa tu número\"  onkeypress=\"return valida(event)\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/phone.png\" alt=\"\">TELÉFONO CELULAR</label>
								<input type=\"text\" name=\"celm\" placeholder=\"Ingresa tu número celular\" onkeypress=\"return valida(event)\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">NÚMERO DE EMPLEADO</label>
								<input type=\"text\" name=\"numempleado\" placeholder=\"Ingresa tu número de empleado\" onkeypress=\"return valida(event)\" required><BR><BR>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">ESCUELA</label>
								<input type=\"text\" name=\"escuelam\" placeholder=\"Ingresa tu escuela\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">ESPECIALIDAD</label>
								<input type=\"text\" name=\"especialidad\" placeholder=\"Especialidad\" required>
							</div>
						</li>
						<li>

								<label><img src=\"img/icons/name.png\" alt=\"\">SELECCIONA TUS INTERESES</label>
								<label><input type=\"checkbox\" value=\"\" name=\"interesm\">Option 1</label>
								<label><input type=\"checkbox\" value=\"\">Option 2</label>
								<label><input type=\"checkbox\" value=\"\">Option 3</label>

						</li>

						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/password.png\" alt=\"\">CONTRASEÑA</label>
								<input type=\"password\" name=\"passm\" placeholder=\"PASSWORD\" required><BR><BR>
							</div>
						</li>
							<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">SOCIO</label>
								<select name=\"socio\">
								<option value=\"1\">SI</option>
								<option value=\"0\">NO</option>
								
									</select>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<button type=\"submit\" class=\"hvr-bounce-to-right\">REGISTRAR</button>
							</div>
						</li>
						</ul>
						</form>
								</div>

				<button class=\"accordion\">Competidor</button>
								<div class=\"panel\">
 				<form action=\"altacompetidor.php\" method=\"post\">
					<ul class=\"clearfix\">
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\" >NOMBRE</label>
								<input type=\"text\" name=\"nombrec\" placeholder=\"Nombre\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">APELLIDO PATERNO</label>
								<input type=\"text\"  name=\"apc\" placeholder=\"Apellido Paterno\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">APELLIDO MATERNO</label>
								<input type=\"text\"  name=\"amc\" placeholder=\"Apellido Materno\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">EDAD</label>
								<input type=\"Number\"  name=\"edadc\" placeholder=\"Edad\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/email.png\" alt=\"\">CODIGO POSTAL</label>
								<input type=\"text\"  name=\"cpc\" placeholder=\"Código Postal\" onkeypress=\"return valida(event)\" size=\"5\" maxlength=\"5\" minlength=\"5\" required>

							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/email.png\" alt=\"\">EMAIL</label>
								<input type=\"text\"  name=\"emailc\" placeholder=\"Ingresa tu email\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/phone.png\" alt=\"\">TELÉFONO</label>
								<input type=\"text\" placeholder=\"Ingresa tu número\"  name=\"telc\" onkeypress=\"return valida(event)\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/phone.png\" alt=\"\">TELÉFONO CELULAR</label>
								<input type=\"text\" placeholder=\"Ingresa tu número celular\"  name=\"celc\" onkeypress=\"return valida(event)\" required>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">DIRECCIÓN</label>
								<input type=\"text\" name=\"direccionC\" placeholder=\"Ingresa tu direccón\" required><BR><BR>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">RFC</label>
								<input type=\"text\" placeholder=\"Ingresa tu número de empleado\"  name=\"rfc\"  required><BR><BR>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">EMPRESA</label>
								<input type=\"text\" placeholder=\"Ingresa tu empresa\"  name=\"empresac\" required>
							</div>
						</li>

						<li>

								<label><img src=\"img/icons/name.png\" alt=\"\">SELECCIONA TUS INTERESES</label>
								<label><input type=\"checkbox\"  name=\"interesc\" value=\"\">Option 1</label>
								<label><input type=\"checkbox\" value=\"\">Option 2</label>
								<label><input type=\"checkbox\" value=\"\">Option 3</label>

						</li>

						<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/password.png\" alt=\"\">CONTRASEÑA</label>
								<input type=\"password\" placeholder=\"PASSWORD\"  name=\"passc\" required><BR><BR>
							</div>
						</li>
							<li>
							<div class=\"input-wrap\">
								<label><img src=\"img/icons/name.png\" alt=\"\">SOCIO</label>
								<select name=\"socio\">
								<option value=\"1\">SI</option>
								<option value=\"0\">NO</option>
								
									</select>
							</div>
						</li>
						<li>
							<div class=\"input-wrap\">
								<button type=\"submit\" class=\"hvr-bounce-to-right\">REGISTRAR</button>
							</div>
						</li>
						</ul>
						</form>
								</div>





				</div>

			</div>

		</div>
	</section>
	";
	}
	?>
	
	<!-- /#register-now -->


	<!-- #event-speakers -->

	<!-- /#event-speakers -->

	<!-- #app-section -->

	<!-- /#app-section -->

	<!-- #pricing-table -->

	<!-- /#pricing-table -->

	<!-- #testimonials -->

	<!-- /#testimonials -->

	<!-- #gallery
	<section id="gallery">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>Nuestra Galeria</h1>
						<p>Aqui algunas fotos de nuestros eventos</p>
					</div>
				</div>
			</div>
			<div class="row gallery-image">
				<a class="fancybox" href="img/gallery/1.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/1.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/2.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/2.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/3.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/3.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/4.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/4.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/5.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/5.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/6.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/6.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/7.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/7.png" alt="">
				</div></a>
				<a class="fancybox" href="img/gallery/8.png"><div class="col-lg-3 col-md-4 col-sm-6">
					<img src="img/gallery/8.png" alt="">
				</div></a>
			</div>
		</div>
	</section>
	 /#gallery -->

	<!-- #blog -->

	<!-- /#blog -->


	<!-- #contact -->

	<!-- /#contact -->

	<!--
	<section id="event-sponsor">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h1>PATROCINADORES DE LOS EVENTOS</h1>
						<p>Conoce a los que hacen posible estos eventos</p>
					</div>
				</div>
			</div>
			<div class="row sponsor-logo-row">
				<div class="col-lg-12">
					<ul class="sponsor-logo">
						<li>
							<div class="item"><img src="img/sponsor-logo/1.png" alt=""></div>
						</li>
						<li>
							<div class="item"><img src="img/sponsor-logo/2.png" alt=""></div>
						</li>
						<li>
							<div class="item"><img src="img/sponsor-logo/3.png" alt=""></div>
						</li>
						<li>
							<div class="item"><img src="img/sponsor-logo/4.png" alt=""></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	 /#event-sponsor -->

	<!-- #subscribe-newsletter
	<section id="subscribe-newsletter">
		<div class="container">
			<div class="gradient-overlay">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
						<div class="text-box col-lg-6 col-md-6 col-sm-6">
							<span>Subcribe </span>Our News
						</div>
						<div class="input-box col-lg-6 col-md-6 col-sm-6">
							<form action="#">
								<input type="text" placeholder="Enter Email">
								<button type="submit"><i class="fa fa-paper-plane"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	/#subscribe-newsletter -->

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<!-- .footer-widget -->
				<div class="col-lg-4 col-md-4 col-sm-6 footer-widget about-widget" >
					<img src="img/resources/logo.png" alt="Footer Logo">
					<p>Gestor de eventos <br>  <br> <br> .</p>
				<!-- /.footer-widget -->

				<!-- .footer-widget
				<div class="col-lg-2 col-md-2 col-sm-6 footer-widget menu-widget">
					<h3>QUICK LINKS</h3>
					<ul>
						<li><a href="#"><i class="fa fa-angle-right"></i> FAQ</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Support</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Sitemap</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Blog</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Community</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Membership</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Event</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Contact Us</a></li>
					</ul>
				</div>
				<!-- /.footer-widget -->

				<!-- .footer-widget
				<div class="col-lg-3 col-md-3 col-sm-6 footer-widget twitter-feed " >
					<h3>Twitter Feed</h3>
					<div class="twitter"></div>
				</div>
				<!-- /.footer-widget -->

				<!-- .footer-widget -
				<div class="col-lg-3 col-md-3 col-sm-6 footer-widget" >
					<h3>Footer Widget</h3>
					<ul class="photo-gallery">
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/1.jpg"><img src="img/footer-widget/photo-gallery/1.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/2.jpg"><img src="img/footer-widget/photo-gallery/2.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/3.jpg"><img src="img/footer-widget/photo-gallery/3.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/4.jpg"><img src="img/footer-widget/photo-gallery/4.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/5.jpg"><img src="img/footer-widget/photo-gallery/5.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/6.jpg"><img src="img/footer-widget/photo-gallery/6.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/3.jpg"><img src="img/footer-widget/photo-gallery/3.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/1.jpg"><img src="img/footer-widget/photo-gallery/1.jpg" alt=""></a></li>
						<li><a class="fancybox" href="img/footer-widget/photo-gallery/main/2.jpg"><img src="img/footer-widget/photo-gallery/2.jpg" alt=""></a></li>
					</ul>
				</div>
				<!-- /.footer-widget -->
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- #bottom-bar -->
	<section id="bottom-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>&copy; 2015 <a href="#">EVENT TIME</a> ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /#bottom-bar -->



	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.themepunch.tools.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/countdown.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/circle-progress.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/custom.js"></script>

<!--Start of Tawk.to Script-->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>


</html>

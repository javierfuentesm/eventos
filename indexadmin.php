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

<link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
</head>
<body>
	
	<!-- .preloader -->
	<div class="preloader"></div>
	<!-- /.preloader -->
	
	
	<!-- #header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<!-- .logo -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 logo">
					<a href="index-2.html"><img src="img/resources/logo.png" alt="Logo Image"></a>
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
						<li class="deadlink">
							<a href="#">Páginas</a>
							<ul class="submenu">
								<li><a href="about-us.html">Acerca de Nosotros</a></li>
								<li class="dropdown">
									<a href="services.html">Servicios</a>
									<!--
									<ul class="submenu">
										<li class="deadlink"><a href="#">Third Level Menu</a></li>
									</ul>
									-->
								</li>
							</ul>
						</li>
						<li class="scrollToLink"><a href="#upcoming-event">EVENTO</a></li>			
						<li class="scrollToLink"><a href="#event-speakers">DISCURSANTE</a></li>
						<li class="scrollToLink"><a href="#pricing-table">PRECIOS</a></li>
						<li class="scrollToLink"><a href="#gallery">GALERIA</a></li>
						
						<li class="scrollToLink"><a href="#contact">CONTACTO</a></li>
						
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
								Puede jalar la fecha del ultimo evento registrado
							</div>
						</div>

						<div 
							class="caption sfb tp-resizeme"
							data-x="0" 
							data-y="290" 
							data-speed="700" 
							data-start="1500"  
							data-easing="easeOutBack">

							<h1>Aqui se instanciara un arreglo de los eventos para poner el Nombre de la ultima Feria de la ciencias registrada</h1>
						</div>					
						<div 
							class="caption sfb tp-resizeme input-box"
							data-x="0" 
							data-y="370" 
							data-speed="700" 
							data-start="2200"  
							data-easing="easeOutBack">

							<ul class="count-down"></ul>
						</div>

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

							<h1>DONT MISS THE EVENT</h1>
						</div>

						<div 
							class="caption sfb tp-resizeme"
							data-x="0" 
							data-y="370" 
							data-speed="700" 
							data-start="1500"  
							data-easing="easeOutBack">

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, neque,  <br> nam? Sed at dolor, perferendis, quaerat, esse dignissimos praesentium unde dolore.</p>
						</div>
						<ul 
							class="caption sfb tp-resizeme banner-buttons"
							data-x="0" 
							data-y="450" 
							data-speed="700" 
							data-start="2500"  
							data-easing="easeOutBack">

							<li class="scrollToLink"><button type="submit" class="colored hvr-bounce-to-right">Register Now</button></li>
							<li class="scrollToLink"><a href="#upcoming-event" class="bordered hvr-bounce-to-right">Watch Video</a></li>

						</ul>
					</li>
					<li 
						data-transition="fade" 
						data-slotamount="7" 
						class="slider-3 text-center gradient-overlay" 
						data-thumb="img/background/register-bg.jpg"
						data-title="EXPERTISE YOU CAN TRUST">

						<img 
							src="img/background/register-bg.jpg" 
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
								December 31, 2015 23:59pm
							</div>
						</div>

						<div 
							class="caption sfb tp-resizeme"
							data-x="0" 
							data-y="290" 
							data-speed="700" 
							data-start="1500"  
							data-easing="easeOutBack">

							<h1>FRONT END DEVELOPER CONFERENCE</h1>
						</div>					
						<div 
							class="caption sfb tp-resizeme input-box"
							data-x="0" 
							data-y="370" 
							data-speed="700" 
							data-start="2200"  
							data-easing="easeOutBack">

							<ul>
								<li><span><input type="text" placeholder="Your Name"></span></li>
								<li><span><input type="text" placeholder="Your Email"></span></li>
								<li><span><input type="text" placeholder="Your Phone"></span></li>
							</ul>
						</div>

						<ul 
							class="caption sfb tp-resizeme banner-buttons"
							data-x="0" 
							data-y="450" 
							data-speed="700" 
							data-start="2500"  
							data-easing="easeOutBack">

							<li class="scrollToLink"><button type="submit" class="colored hvr-bounce-to-right">Register Now</button></li>
							<li class="scrollToLink"><a href="#upcoming-event" class="bordered hvr-bounce-to-right">Watch Video</a></li>

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
						<li><span><b>México</b> Contador de localizaciones</span></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<li><span class="img-holder"><img src="img/icons/2.png" alt=""></span></li>
						<li><span><b>Patrocinador</b> Contador de Patrocinadores</span></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<li><span class="img-holder"><img src="img/icons/3.png" alt=""></span></li>
						<li><span><b>25+ Disucrsantes</b> Contador de Disucrsantes</span></li>
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
				<div class="col-lg-5 col-md-5 col-sm-5">
					<form action="#" class="pull-right">
						<input type="text" placeholder="Search Event"> <button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
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
					<div class="tab-content-wrap row">
						<div class="col-lg-3 col-md-4 col-sm-6 mix april-14 april-22 hvr-float-shadow wow fadeIn">
							<div class="img-holder"><img src="img/upcoming-event/1.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>22 April, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix april-28 april-14 hvr-float-shadow wow fadeIn" data-wow-delay=".3s">
							<div class="img-holder"><img src="img/upcoming-event/2.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>28 April, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix may-10 may-22 hvr-float-shadow wow fadeIn" data-wow-delay=".6s">
							<div class="img-holder"><img src="img/upcoming-event/3.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>10 May, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix may-15 may-23 hvr-float-shadow wow fadeIn" data-wow-delay=".9s">
							<div class="img-holder"><img src="img/upcoming-event/1.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>15 May, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix may-22 hvr-float-shadow">
							<div class="img-holder"><img src="img/upcoming-event/1.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>15 May, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix may-23 hvr-float-shadow ">
							<div class="img-holder"><img src="img/upcoming-event/1.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>15 May, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix jun-01 hvr-float-shadow">
							<div class="img-holder"><img src="img/upcoming-event/1.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>01 June, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mix april-22 hvr-float-shadow ">
							<div class="img-holder"><img src="img/upcoming-event/1.jpg" alt=""></div>
							<div class="content-wrap">
								<img src="img/upcoming-event/author.png" alt="" class="author-img">
								<div class="meta">
									<ul>
										<li><span><i class="fa fa-clock-o"></i>15 June, 2015</span></li>
										<li><span><i class="fa fa-map-marker"></i>California</span></li>
									</ul>
								</div>
								<h3>Event Name</h3>
								<p>Lorem Ipsum is simply dummy text of the printing [...]</p>
								<a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /#upcoming-event -->

	<!-- #register-now -->
	<section id="register-now" class="gradient-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>REGÍSTRATE Y ÚNETE A NOSOTROS</h1>
					</div>
				</div>
			</div>
			<div class="row">
				
 				
						
					

				<div id="PeopleTableContainer" style="width: 1050px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Table of people',
				actions: {
					listAction: 'Maestroactions.php?action=list',
					
					updateAction: 'Maestroactions.php?action=update',
					deleteAction: 'Maestroactions.php?action=delete'
				},
				fields: {
					id_part: {
						title: 'id__part',
						key: true,
						create: false,
						edit: false,
						width: '10%',
						list: true
					},
					num_empleado: {
						title: 'No.empleado',
						create: false,
						width: '10%'
					},
					escuela: {
						title: 'escuela',
						create: false,
						width: '20%'
					},
					interes: {
						title: 'interes',
						create: false,
						width: '10%'
					},
					especialidad: {
						title: 'especialidad',
						create: false,
						width: '10%'
					},
					socio: {
						title: 'socio',
						create: false,
						edit: false,
						width: '10%'
						
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>		
					
				

			</div>

		</div>
	</section>
	<!-- /#register-now -->


	<!-- #event-speakers -->
	<section id="event-speakers">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>NUESTROS DISCURSANTES</h1>
						<p>Conoce a nuestros discursantes y su experiencia</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="info text-right col-lg-6 col-md-7 col-sm-7">
							<h3>Masum Rana</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container"><img src="img/speakers/1.png" alt=""></div>
						</div>
					</div>
					<!-- /.single-speakers -->

					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="info text-right col-lg-6 col-md-7 col-sm-7">
							<h3>Muhibbur Rashid</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container"><img src="img/speakers/2.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-10 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container" data-wow-delay=".6s"><img src="img/speakers/3.png" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>Rafifa Nodi</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /.single-speakers -->

					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container"><img src="img/speakers/4.png" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>Rashed Kabir</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /.single-speakers -->
				</div>
			</div>
			<div class="row text-center">
				<a href="#" class="show-more hvr-bounce-to-right">SEE MORE</a>
			</div>
		</div>
	</section>
	<!-- /#event-speakers -->

	<!-- #app-section -->
	
	<!-- /#app-section -->

	<!-- #pricing-table -->
	<section id="pricing-table">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>TABLA DE PRECIOS</h1>
						<p>Aquí podrás encontrar el precio de cada evento</p>
					</div>
				</div>
			</div>
			<div class="row price-table-row">
				<div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn">
					<!-- .single-price-box -->
					<div class="single-price-box">
						<div class="title">
							<span>free</span>
						</div>
						<div class="content">
							<span class="time">1-months</span>
							<span class="price"><span class="currency">$</span>0</span>
							<a href="#" class="sign-up hvr-bounce-to-right">sign up</a>
						</div>
					</div>
					<!-- /.single-price-box -->
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay=".5s">
					<!-- .single-price-box -->
					<div class="single-price-box">
						<div class="title">
							<span>basic</span>
						</div>
						<div class="content">
							<span class="time">6-months</span>
							<span class="price"><span class="currency">$</span>16</span>
							<a href="#" class="sign-up hvr-bounce-to-right">sign up</a>
						</div>
					</div>
					<!-- /.single-price-box -->
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="1s">
					<!-- .single-price-box -->
					<div class="single-price-box">
						<div class="title">
							<span>STANDARD</span>
						</div>
						<div class="content">
							<span class="time">8-months</span>
							<span class="price"><span class="currency">$</span>39</span>
							<a href="#" class="sign-up hvr-bounce-to-right">sign up</a>
						</div>
						<div class="bagage">
							best
						</div>
					</div>
					<!-- /.single-price-box -->
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-4 wow zoomIn" data-wow-delay="1.5s">
					<!-- .single-price-box -->
					<div class="single-price-box">
						<div class="title">
							<span>business</span>
						</div>
						<div class="content">
							<span class="time">12-months</span>
							<span class="price"><span class="currency">$</span>65</span>
							<a href="#" class="sign-up hvr-bounce-to-right">sign up</a>
						</div>
					</div>
					<!-- /.single-price-box -->
				</div>
			</div>
		</div>
	</section>
	<!-- /#pricing-table -->

	<!-- #testimonials -->
	<section id="testimonials" class="gradient-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>Clientes satisfechos</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="testimonial custom-pager text-center">
						<ul>
							<li class="prev"><img src="img/testimonials/arrow-left.png" alt=""></li>
							<li class="next"><img src="img/testimonials/arrow-right.png" alt=""></li>
							<li class="active" data-slide-index="0"><span><img src="img/testimonials/1.png" alt=""></span></li>
							<li data-slide-index="1"><span><img src="img/testimonials/2.png" alt=""></span></li>
							<li data-slide-index="2"><span><img src="img/testimonials/3.png" alt=""></span></li>
							<li data-slide-index="3"><span><img src="img/testimonials/4.png" alt=""></span></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<ul class="testimonial-slide">
						<li class="slide">
							<h3>Rafifa Nodi</h3>
							<span>Designer, EventTime CO.</span>
							
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>

						</li>
						<li class="slide">
							<h3>Masum Rana</h3>
							<span>Designer, EventTime CO.</span>
							
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>

						</li>
						<li class="slide">
							<h3>Rashed Kabir</h3>
							<span>Designer, EventTime CO.</span>
							
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>

						</li>
						<li class="slide">
							<h3>Muhibbur Rashid</h3>
							<span>CEO, EventTime CO.</span>
							
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>

						</li>
					</ul>
				</div>
			</div>

		</div>
	</section>
	<!-- /#testimonials -->

	<!-- #gallery -->
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
	<!-- /#gallery -->

	<!-- #blog -->
	
	<!-- /#blog -->
	

	<!-- #contact -->
	<section id="contact" class="gradient-overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>Contáctanos</h1>
						<p>Estaremos dispuestos a escucharte y en solucionar cualquiera de tus dudas</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 form-section">
					<form class="contact-form" action="http://wp1.themexlab.com/html/event_time/include/sendemail.php">
						<ul class="clearfix">
							<li class="half"><input type="text" name="name" placeholder="Tu Nombre"></li>
							<li class="half"><input type="text" name="email" placeholder="Tu Email"></li>
							<li class="full"><input type="text" name="subject" placeholder="El Asunto"></li>
							<li class="full"><textarea name="message" placeholder="Tu mensaje va aquí"></textarea></li>
							<li class="full"><button type="submit" class="hvr-bounce-to-right">Contáctanos</button></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /#contact -->

	<!-- #event-sponsor -->
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
	<!-- /#event-sponsor -->

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
					<p>Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry. Lorem <br> <br> Ipsum has been the industry's standard <br> dummy text ever since th1500s, when an <br> unknown printer took a galley book.</p>
					<div class="social-icons">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
				<!-- /.footer-widget -->

				<!-- .footer-widget -->
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

				<!-- .footer-widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 footer-widget twitter-feed " >
					<h3>Twitter Feed</h3>
					<div class="twitter"></div>
				</div>
				<!-- /.footer-widget -->

				<!-- .footer-widget -->
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
					<p>&copy; 2015 <a href="index-2.html">EVENT TIME</a> ALL RIGHTS RESERVED</p>
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
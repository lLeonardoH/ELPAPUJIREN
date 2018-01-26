<!DOCTYPE HTML>
<?php 
session_start();
session_destroy();
error_reporting(0);
 ?>
<html>
	<head>
		<title>Linear by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.html">Mi perfil</a></li>
						<li><a href="hobbies.html">HOBBIES</a></li>
						<li><a href="aspiraciones.html">ASPIRACIONES</a></li>
						<li><a href="contacto.php">CONTACTO</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">CONTACTAME</a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<form class="f1" action="result.php" method="POST">
							<div>
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" placeholder="<?php echo $_SESSION['error'];?>" value="<?php echo $_SESSION['nom'];?>" >
							</div>
							<div>
								<label for="apellido">Primer apellido</label>
								<input type="text" name="apellido" id="apellido" placeholder="<?php echo $_SESSION['error2'];?>" value="<?php echo $_SESSION['apellido'];?>">
							</div>
							<div>
								<label for="apellido2">Segundo apellido</label>
								<input type="text" name="apellido2" id="apellido2" placeholder="<?php echo $_SESSION['error3'];?>" value="<?php echo $_SESSION['apellido2'];?>" >
							</div>
							<div>
								<label for="numero">Telefono</label>
								<input type="number" name="telefono" id="numero" placeholder="<?php echo $_SESSION['error4'];?>" value="<?php echo $_SESSION['telefono'];?>">
							</div>
							<div>
								<label for="email">E-mail</label>
								<input type="email" name="email" id="email" placeholder="<?php echo $_SESSION['error5'];?>" value="<?php echo $_SESSION['email'];?>">
							</div>
							<div class="t">
								
								<input class="t1" type="text" name="cuerpo" id="cuerpo" placeholder="Escribe tu mensaje">
							</div>
							<div><input type="submit" value="enviar"></div>

						</form>
				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Si las oportunidades no se te dan crealas tu mismo recuerda si cabe en tu imaginacion cabe en tu mundo.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<span class="byline">Copyright 2018  | Todos los derechos de autor</span>
						<div><span class="byline">	Desarrollados por Leonardo Heredia</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>


	</body>
</html>
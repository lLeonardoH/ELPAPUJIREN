
<!DOCTYPE HTML>
<?php 
session_start();

error_reporting(0);

 
session_start();
error_reporting(0);
if (!empty($_POST['nombre'])) {
	$_SESSION['nom']=$_POST['nombre'];
	$tamaño=strlen($_SESSION['nom']);
	for ($i=0; $i <$tamaño ; $i++) { 
		$letra=substr($_SESSION['nom'],$i,1);
		if (is_numeric($letra)) {		
			$_SESSION['error']="ingrese un nombre";
			header("location:contacto.php");
			break;
		}
	}

}else{
	$_SESSION['error']="ingrese un nombre";
	header("location:contacto.php");
}
/* validacion primer apellido*/
if (!empty($_POST['apellido'])) {
	$_SESSION['apellido']=$_POST['apellido'];
	$tamaño=strlen($_SESSION['apellido']);
	for ($i=0; $i <$tamaño ; $i++) { 
		$letra=substr($_SESSION['apellido'],$i,1);
		if (is_numeric($letra)) {

			$_SESSION['error2']="ingrese un apellido";
			header("location:contacto.php");
			break;
		}
	}

}else{
	$_SESSION['error2']="ingrese un apellido";
	header("location:contacto.php");
}

/*validacion segundo apellido*/

if (!empty($_POST['apellido2'])) {
	$_SESSION['apellido2']=$_POST['apellido2'];
	$tamaño=strlen($_SESSION['apellido2']);
	for ($i=0; $i <$tamaño ; $i++) { 
		$letra=substr($_SESSION['apellido2'],$i,1);
		if (is_numeric($letra)) {

			$_SESSION['error3']="ingrese segundo apellido";
			header("location:contacto.php");
			break;
		}
	}

}else{
	$_SESSION['error3']="ingrese segundo apellido";
	header("location:contacto.php");
}

/*Validacion telefono*/

if (!empty($_POST['telefono'])&&(strlen($_POST['telefono'])==7||strlen($_POST['telefono'])==10)) {
$_SESSION['telefono']=$_POST['telefono'];

		$tamaño=strlen($_SESSION['telefono']);
	for ($i=0; $i <$tamaño ; $i++) { 
		$numero=substr($_SESSION['telefono'],$i,1);
		if (!is_numeric($numero)) {

			$_SESSION['error4']="ingrese un numero telefonico";
			header("location:contacto.php");
			break;
		}
	}
	
	
}else{
	$_SESSION['error4']="ingrese un numero telefonico";
	header("location:contacto.php");
}

/* validar correo*/
if (!empty($_POST['email'])&&filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	$_SESSION['email']=$_POST['email'];
	$tamaño=strlen($_SESSION['email']);
	

}else{
	$_SESSION['error5']="ingrese correo valido";
	header("location:contacto.php");
}

/*validar mensaje*/
if (!empty($_POST['cuerpo'])) {
	$_SESSION['mensaje']=$_POST['cuerpo'];

}else{
	$_SESSION['error6']="ingrese un mensaje";
	header("location:contacto.php");
}

 


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
						<li class="active"><a href="contacto.php">Salir</a></li>
						
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">INFORMACION</a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header class="c1">
						<div>	
						<h2>Nombre: <?php 	echo $_SESSION['nom']." ".$_SESSION['apellido']." ".$_SESSION['apellido2']; ?></h2>
						</div>

						<div>	
						<h2>Telefono: <?php 	echo $_SESSION['telefono']; ?></h2>
						</div>
						<div>	
						<h2>E-mail: <?php 	echo $_SESSION['email']; ?></h2>
						</div>

						<div class="cc">	
						<h2>Mensaje: </h2> <h2><?php 	echo $_SESSION['mensaje']; ?></h2>
						</div>
					</header>
						
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

<?php 	
session_destroy();
 ?>

	</body>
</html>













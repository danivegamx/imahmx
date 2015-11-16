<!DOCTYPE html>
<html lang="es" ng-app="imahpp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="format-detection" content="telephone=no">
	<title>Clinic Intel v1</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/foundation/css/foundation.css"/>
	<link rel="stylesheet" type="text/css" href="css/master.css"/>
</head>
<body>
	<header>
		<div class="row relative">
			<figure id="logo">
				<img src="images/logo_header.png" />
			</figure>
			<div id="menu-wrapper">
				<span id="call-us-tooltip">¡LLÁMANOS!</span>
				<span id="call-us"><a href="tel:3515156086">(351) 515 6086</a></span>
				<span id="call-us-hour">Lun-Sáb, 9am a 4pm</span>
			</div>
		</div>
	</header>
	<nav>
		<div id="nav-inner" class="row">
			<a id="inicio-link" class="nav-item" href="#"></a>
			<a id="user-trigger">
				<span id="user-name">Registro de pacientes</span>
			</a>
		</div>
	</nav>
	<div id="main" class="row">
		<div id="appointments" class="medium-4 columns">
			<div id="appointment-title">Inicia Sesión</div>
			<div class="app-field">
				<div class="app-field-title">Nombre de usuario</div>
				<div class="app-field-input">
					<input id="login-field-username" type="text" placeHolder="Ej. juanperez"/>
				</div>
			</div>
			<div class="app-field">
				<div class="app-field-title">Contraseña</div>
				<div class="app-field-input">
					<input id="login-field-password" type="password" placeHolder="* * * * * * * *"/>
				</div>
			</div>
			<div id="app-buttons">
				<div class="forgot-section">¿Olvidó su contraseña?</div>
				<a id="login" class="button">Iniciar Sesión</a>
				<div id="app-login">
					Si tiene problemas para iniciar sesión, póngase en contácto con el administrador del sistema
				</div>
			</div>
			<div id="sec-info">
				<div id="sec-info-inner">
					<strong>¡No te preocupes!</strong> Todo lo que hagas en nuestras plataformas está totalmente protegido con la más alta encriptación y seguridad para brindarte la mejor y más confiable experiencia.
				</div>
			</div>
		</div>
		<div id="main-pic" class="medium-8 columns">
			<figure id="main-pic-figure">
				<img src="images/big.jpg" />
			</figure>
			<div id="overlay">
				<div id="overlay-title"><span class="imahblue">I</span>NSTITUTO DE <span class="imahblue">M</span>EDICINA <span class="imahblue">A</span>VANZADA Y <span class="imahblue">H</span>UMANÍSTICA</div>
				<div id="overlay-items">
					<span class="overlay-item">Cirugía robótica</span>
					<span class="overlay-item">Cirugía laparoscópica</span>
					<span class="overlay-item">Cirugía con asistencia mecatrónica</span>
				</div>
			</div>
		</div>
	</div>
	<div id="imahpp-info" class="row">
			<span class="brand">ClinicIntel</span> es una moderna plataforma <i>SPA</i> (Single Page App) para administración de <strong>Clínica IMAH Urología</strong>. En ella usted podrá:
			<ul>
				<li>Agendar citas.</li>
				<li>Administrar su perfil clínico</li>
				<li>Tener control de su historial.</li>
				<li>Chatear con nuestro personal médico.</li>
			</ul>
		</div>
	<footer id="dvmx">
		<div class="footer-dark">
			ClinicIntel &copy; Desarrollado en México por
			<a id="dvmx-link" href="http://www.imah.mx">Clinica IMAH</a>&nbsp;
			<span class="italic">Todos los derechos reservados. 2015 </span>&nbsp;&copy;
		</div>
	</footer>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/CoreServices.js"></script>
</html>

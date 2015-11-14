<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="format-detection" content="telephone=no">
	<title>Clínicas IMAH</title>
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
			<div id="user-wrapper">
				<span id="call-us-tooltip">Bienvenid@</span>
				<span id="call-us"><a href="tel:3515156086">Dr. Juan Bosco</a></span>
				<span id="call-us-hour">Director General</span>
			</div>
		</div>
	</header>
	<nav>
		<div id="nav-inner" class="row">
			<a id="inicio-link" class="nav-item" href="#"></a>
			<a id="pacientes-link" class="nav-item" href="#"></a>
			<a id="cirugias-link" class="nav-item" href="#"></a>
			<a id="admin-link" class="nav-item" href="#"></a>
			<a id="user-trigger">
				<span id="user-name">Cerrar sesión</span>
			</a>
		</div>
	</nav>
	<div id="main" class="row">
		<div class="medium-2 columns">
			<div id="calendar-widget">
				<div id="calwg-day-name">+ Ingresos</div>
			</div>
			<div id="calendar-widget">
				<div id="calwg-day-name">- Egresos</div>
			</div>
			<div id="calendar-widget">
				<div id="calwg-day-name">Reportes</div>
			</div>
		</div>
		<div class="medium-10 columns">
			<div id="add-in-admin" class="launcher-item">
				<div class="row">
					<div class="small-12 columns">
						<div class="admin-item-title">Agregar Ingreso</div>
						
						<div class="launcher-item-desc-wrapper row">
							<div class="medium-6 columns">
								<select>
									<option value="-1">Seleccione un tipo de ingreso...</option>
									<option value="1">Consulta</option>
									<option value="2">Cirugía</option>
									<option value="3">Farmacia</option>
									<option value="4">Otros</option>
								</select>
							</div>
							<div class="medium-6 columns">
								<input type="text" placeHolder="Añadir descripción..."/>
							</div><br><br>
							<div class="medium-6 columns">
								<input type="date" />
							</div>
							<div class="medium-6 columns">
								<input type="text" placeHolder="$ monto"/>
							</div>
						</div>
					</div>
				</div>
				<div class="add-app-buttons">
					<span id="add-app-button" class="button">Agregar</span>
				</div>
			</div>
			<div id="add-eg-admin" class="launcher-item">
				<div class="row">
					<div class="small-12 columns">
						<div class="admin-item-title">Agregar egreso</div>
						
						<div class="launcher-item-desc-wrapper row">
							<div class="medium-6 columns">
								<select>
									<option value="-1">Seleccione un tipo de egreso...</option>
									<option value="1">Servicios</option>
									<option value="2">Farmacia</option>
									<option value="3">Material</option>
									<option value="4">Contable</option>
									<option value="5">Otros</option>
								</select>
							</div>
							<div class="medium-6 columns">
								<input type="text" placeHolder="Añadir descripción..."/>
							</div><br><br>
							<div class="medium-6 columns">
								<input type="date" />
							</div>
							<div class="medium-6 columns">
								<input type="text" placeHolder="$ monto"/>
							</div>
						</div>
					</div>
				</div>
				<div class="add-app-buttons">
					<span id="add-app-button" class="button">Agregar</span>
				</div>
			</div>
		</div>
	</div>
	<div id="dvmx">
		<div class="footer-dark">
			<span class="italic">ClinicIntel v1.0</span>&nbsp;&copy;
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/launcher.js"></script>
</body>
</html>
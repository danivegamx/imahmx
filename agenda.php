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
		<div id="widgets" class="medium-2 columns">
			<div id="calendar-widget">
				<div id="calwg-day-name">Sábado</div>
				<div id="calwg-day-numb">31</div>
				<div id="calwg-month-name">Octubre</div>
				<a onclick="prevDay();" id="calwg-prev-d"></a>
				<a onclick="nextDay();" id="calwg-next-d"></a>
			</div>
			<div id="appo-widget">
				<div class="wg-title">Pendientes:</div>
				<div class="cita1">
								<div class="row">
									<div class="appo-img-wrapper medium-2 columns">
										<img class="appo-img" src="images/dr.jpg"/>
									</div>
									<div class="medium-8 columns">
										<div class="appo-name">Rafael Vega del Río</div>
										<div class="appo-hour">12:00 pm - 1:00 pm</div>
										<div class="appo-type"><strong>Cita</strong></div>
									</div>
									<div class="medium-2 columns">
										
									</div>
								</div>
							</div>
			</div>
			<div id="add-widget">
				Nueva Cita
			</div>
		</div>
		<div id="agenda" class="medium-10 columns">
			<div id="add-app-wrapper">
				<div class="add-app-title">Agregar cita:</div>
				<div class="add-app-content">
					<div class="separate-top row">
						<div class="medium-6 columns">
							<div class="add-app-icon-pac"><input type="text" placeHolder="Paciente..."/></div>
						</div>
						<div class="medium-6 columns">
							<div class="add-app-icon-date"><input type="date" /></div>
						</div>
					</div>
					<div class="separate-top row">
						<div class="medium-6 columns">
							<div class="add-app-icon-hour">
								<select name="add-app-hour-select" id="add-app-hour-select">
									<option value="-1">Seleccione una hora</option>
									<option value="9:00am">9:00am</option>
									<option value="9:30am">9:30am</option>
									<option value="10:00am">10:00am</option>
									<option value="10:30am">10:30am</option>
									<option value="11:00am">11:00am</option>
									<option value="11:30am">11:30am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="12:30pm">12:30pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="1:30pm">1:30pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="2:30pm">2:30pm</option>
								</select>
							</div>
						</div>
						<div class="medium-6 columns">
							<div class="add-app-icon-desc"><input type="text" placeHolder="Comentarios..."/></div>
						</div>
					</div>
					<div class="add-app-buttons">
						<span id="add-app-button" class="button">Agregar</span>
					</div>
				</div>
			</div>
			<table id="agenda-table">
				<tbody>
					<tr>
						<td class="ag-hour-indicator">9:00<br>am</td>
						<td class="droppable">
							<div class="cita1">
								<div class="row">
									<div class="appo-img-wrapper medium-2 columns">
										<img class="appo-img" src="images/dr.jpg"/>
									</div>
									<div class="appo-data-wrapper medium-8 columns">
										<div class="appo-name">Daniel Vega Ceja</div>
										<div class="appo-hour">9:00 am - 9:30 am</div>
										<div class="appo-type"><strong>Cirugía</strong></div>
									</div>
									<div class="order-wrapper medium-2 columns">
										<span class="cancel-app">X</span>
										<span class="order">$</span>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">9:30<br> am</td>
						<td class="droppable"></td>
					</tr>
						<td class="ag-hour-indicator">10:00<br> am</td>
						<td class="droppable">
							<div class="cita1">
								<div class="row">
									<div class="appo-img-wrapper medium-2 columns">
										<img class="appo-img" src="images/dr.jpg"/>
									</div>
									<div class="appo-data-wrapper medium-8 columns">
										<div class="appo-name">Rafael Vega Del Río</div>
										<div class="appo-hour">10:00 am - 10:30 am</div>
										<div class="appo-type"><strong>Cirugía</strong></div>
									</div>
									<div class="order-wrapper medium-2 columns">
										<span class="cancel-app">X</span>
										<span class="order">$</span>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">10:30<br> am</td>
						<td class="droppable"></td>
					</tr>
						<td class="ag-hour-indicator">11:00<br> am</td>
						<td class="droppable"></td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">11:30<br> am</td>
						<td class="droppable"></td>
					</tr>
						<td class="ag-hour-indicator">12:00<br> pm</td>
						<td class="droppable"></td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">12:30<br> pm</td>
						<td class="droppable"></td>
					</tr>
						<td class="ag-hour-indicator">1:00<br> pm</td>
						<td class="droppable"></td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">1:30<br> pm</td>
						<td class="droppable"></td>
					</tr>
						<td class="ag-hour-indicator">2:00<br> pm</td>
						<td class="droppable"></td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">2:30<br> pm</td>
						<td class="droppable"></td>
					</tr>
						<td class="ag-hour-indicator">3:00<br> pm</td>
						<td class="droppable"></td>
					</tr>
					<tr>
						<td class="ag-hour-indicator">3:30<br> pm</td>
						<td class="droppable"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div id="dvmx">
		<div class="footer-dark">
			<span class="italic">ClinicIntel v1.0</span>&nbsp;&copy;
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/agenda.js"></script>
</body>
</html>
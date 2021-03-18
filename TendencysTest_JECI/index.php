<!DOCTYPE HTML>
<html>
	<link href="view/css/design.css" rel="stylesheet" type="text/css">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta content="width=device-width, initial-scale=1" name="viewport" /> -->
		<meta charset="UTF-8">
		<title>TEST Tendencys - ORDERS</title>
	</head>
	<body>
		<div class=header-project>
			<div class="logo">TEST</div>
			<div class="nav-project">
				<div class="nav-option1">Enrique Careon</div>
				<div class="nav-option">Juan Enrique Carreon Ibarra</div>
			</div>
		</div>
		<!-- Lista de ordenes-->
		<?php require_once("view/orders.php"); ?>
		<!-- Detalle de orden-->
		<?php require_once("view/view_order.php"); ?>
	</body>
</html>
<script src='assets/jquery-3.3.1.js'></script>
<script src='controller/getOrders.js'></script>
<script src='js/functions.js'></script>
<!DOCTYPE html> 
<html> 
<head>
	<meta charset="UTF-8">
	<title>Shop</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
	<div id="main">
		<div id="top">
			<div id="k1"></div>
			<div id="k2"></div>
			<div id="k3"></div>
			<div id="korz"></div>
			<span id="vybr_tov">Вибрано товарів: <span id="vybr_tov_num">0</span></span>
		</div>
		<div id="content">
			<table>
				<?php include "tovary.php"; ?>
			</table>
		</div>
	</div>
	<div class="modal" id="about">
		<center><img src="img/eko.jpg"></center>
		<p>sadhkjashdkj</p>
	</div>
	<div class="modal" id="rules">
		<center><img src="img/eko.jpg"></center>
		<p>asdasdasdlad</p>
	</div>
	<div class="modal" id="contacts">
		<center><img src="img/eko.jpg"></center>
		<p>sadassad</p>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>
		$(function() {
			$('#k1').click(function() {
				$('#about').dialog({width: 800});
			});
			$('#k2').click(function() {
				$('#rules').dialog({width: 800});
			});
			$('#k3').click(function() {
				$('#contacts').dialog({width: 800});
			});
		});
	</script>
</body>
</html>
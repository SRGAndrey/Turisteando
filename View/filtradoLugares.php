<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.php");?>
  
  	
</head>
<body>
<?php
	include("navbar.php");
?>
	<link rel="stylesheet" href="../css/jquery-ui.css" type="text/css" media="all">
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<div class="wrapper row1">
		<br>
		
		<div class="w3_frm">
		<h3>Criterios de busqueda</h3>
			<form action="#" method="post">
		
	
	
	
		<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Precio: <span class="w3ls-star">  </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3_sd4">
			<select>
									<option value="1"> 0 a 25000 </option>
									<option value="2"> 26000 a 50000 </option>
									<option value="3"> 51000 a 100000 </option>
									<option value="4"> Mas de 100000 </option>
									
				</select>
			</div>
		</div>
	</div>
	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Tipo de turista:   <span class="w3ls-star"> </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3_sd4">
			<select>
									<option value="1"> Aventurero </option>
									<option value="2"> Cultural </option>
									<option value="3"> Gastronomico </option>
									<option value="4"> Convencional </option>
									
				</select>
			</div>
		</div>
	</div>
	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Tipo de actividad: 	<span class="w3ls-star"> </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3_sd4">
			<select>
									<option value="1"> Alojamiento </option>
									<option value="2"> Aire libre </option>
									<option value="3"> Volcanes </option>
									<option value="4"> Senderismo </option>
									<option value="5"> Kayak </option>
									
				</select>
			</div>
		</div>
	</div>
	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Tipo de atractivo: 	<span class="w3ls-star"> </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3_sd4">
			<select>
									<option value="1"> Bibliotecas </option>
									<option value="2"> Galería de artes </option>
									<option value="3"> Museos </option>
									<option value="4"> Jardines </option>
									<option value="5"> Hoteles </option>
									
				</select>
			</div>
		</div>
	</div>

	
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" value="Ir ">
	</div>
</form>
		</div>
		<br>
			<hr>

	</div>
	<?php
	include("footer.php");
	?>
	</body>
</html>
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
 <!---728x90---> 
 <h3>Editar seccion Sobre Nosotros: </h3>
  <form action="#" method="post">
		
	<div class="w3l_nm">
		<div class="agile_fx">
		<!---728x90---> 
		<label class="w3ls-opt">Telefono:  <span class="w3ls-star">  </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="username"  placeholder="Phone Number" required=" "/>
		</div>
		</div>
	</div>
	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Email:  <span class="w3ls-star">  </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="email" name="username"  placeholder="Email" required=" "/>
		</div>
		</div>
	</div>

	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Información básica: <span class="w3ls-star">  </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<textarea id="message" name="message" placeholder="Your Queries" title="Please enter Your Queries"></textarea>

		</div>
		</div>
	</div>
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" value="Salvar">
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
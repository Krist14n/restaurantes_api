<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	
<head>
	<title>Registro Grupo Midas</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				<div class="login-form">
						<h1><img src="images/logo_midas.png" style="width: 166px;"></h1>
						<h2><a href="#">Registrar</a></h2>
				{!! Form::open(['route' => 'datos.store']) !!}					<li>
						<input type="text" class="text" value="Nombre" name="nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="email" class="text" value="Correo" name="correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" ><a href="#" class=" icon mail"></a>
					</li>
					<li>
						<input type="text" class="text" value="Teléfono de Contacto" name="telefono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" ><a href="#" class=" icon telephone"></a>
					</li>
					<li>
						<input type="text" class="text" value="Producto de Interés" name="producto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" ><a href="#" class=" icon product"></a>
					</li>
					 <div class ="forgot">
						
						<input type="submit" value="Enviar" > <a href="#" class=""></a></h4>
					</div>
				{!! Form::close() !!}
			</div>
			<!--//End-login-form-->
					<div class="ad728x90" style="text-align:center">
				
		   </div>

		 		
</body>
</html>
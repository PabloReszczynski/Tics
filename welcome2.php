<html lang="es">
  <head>
    <title>welcome</title>
    <meta charset="utf-8">
    <style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			</style>
  </head>
  <body>
  	<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
    <div>
    	<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="#">Inicio</a></li>
  <li role="presentation"><a href="#">Perfil de Usuario</a></li>
  <li role="presentation"><a href="#">¿Quienes somos?</a></li>
  <li role="presentation"><a href="#">Contacto</a></li>
	</ul>	
	</div>
    <div class="container">
      <?php
        echo "<h1> Bienvenido user!</h1>";
      ?>
      
    </div>

  </body>
</html>

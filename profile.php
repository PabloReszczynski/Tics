<!DOCTYPE html>
<html>
	<head>
		<meta charset=“UTF-8”>
		<title>Mi Perfil</title>
	</head>
	<body>
<?php
session_start();
if (!isset($_SESSION['user'])){
	header("Location: index.php");
	}
?>
<!--titulo -->
<h3>Mi Perfil</h3>
<br/>
<!--tabla con datos personales -->
<table border="1px">
			<tr>
				<td>
					Nombre
				</td>
				<td>
					Cosita Escobar
				</td>
				<td>
					<form method="POST" action="miperfil.php"> <!--opcion a actualizar datos -->
					Actualizar nombre: <input type="text"/>
					<input type="submit" value="Enviar" />
					</form>
				</td>
			</tr>
			
			<tr>
				<td>
					Sexo
				</td>
				<td>
					Femenino
				</td>
				<td>
					<form method="POST" action="miperfil.php"> <!--opcion a actualizar datos -->
					Actualizar sexo: <input type="text"/>
					<input type="submit" value="Enviar" />
					</form>
				</td>
			</tr>
			<tr>
				<td>
					Especie
				</td>
				<td>
					Felina
				</td>
				<td>
					<form method="POST" action="miperfil.php"> <!--opcion a actualizar datos -->
					Actualizar especie: <input type="text"/>
					<input type="submit" value="Enviar" />
					</form>
				</td>
			</tr>
			<tr>
				<td>
					Fecha de nacimiento
				</td>
				<td>
					15 de octubre, 2012
				</td>
				<td>
					<form method="POST" action="miperfil.php"> <!--opcion a actualizar datos -->
					Actualizar fecha de nacimiento: <input type="text"/>
					<input type="submit" value="Enviar" />
					</form>
				</td>
			</tr>
			<tr>
				<td>
					Dirección
				</td>
				<td>
					Aconcagua 620, Reina Sur, Colina
				</td>
				<td>
					<form method="POST" action="miperfil.php"> <!--opcion a actualizar datos -->
					Actualizar dirección: <input type="text"/>
					<input type="submit" value="Enviar" />
					</form>
				</td>
			</tr>	
		</table>	
<br>
<!--volver a pagina principal -->
<a href="principal.php">Volver  pagina principal</a>
	</body>
</html>

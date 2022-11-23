<?php
	require ("../modelo/conexion.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ficha pescado</title>
	
	<!--FONT NEUTON-->
	<link rel = "preconnect" href = "https://fonts.googleapis.com">
	<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
	<!--FONT AWESOME-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--ARCHIVO CSS-->
	<link rel="stylesheet" href="../src/css/galeria2.css">

</head>

<body>

<?php
	$conexion = crearConexion("recetario"); 
	$mireceta=$_POST["enviando"]; 
	?>
		<div id="titulo" style="margin-bottom: 2%; margin-top: 2%; margin-left:5%;" ><h1><?php echo $mireceta ?></h1> </div>
			<div id="cajaimagenes"> 
				<div id="cajatexto"> 
					<table id="tablaanimales" style="width: 600px;"> 
					<?php	
					$result=obtenerCarne($mireceta);
					while($mostrar=$result->fetch_assoc()){ 
						?><div id="galeria">
								<div id="galeria_miniaturas"></div><?php
									switch ($mireceta){ 
										case "Albondigas": ?>
											<img id="imgGaleria" src="../imagenes/recetas/13.jpg" height="450px" width="500px">
											<?php break;
										
										case "Cordero miel y mostaza": ?>
											<img id="imgGaleria" src="../imagenes/recetas/14.jpg" height="450px" width="500px">
											
											<?php break;
										
										case "Pollo con almendras": ?>
											<img id="imgGaleria" src="../imagenes/recetas/15.jfif" height="450px" width="500px">
											<?php break;
										
										case "Estofado": ?>
											<img id="imgGaleria" src="../imagenes/recetas/16.jpg" height="450px" width="500px">
											<?php break;
										
										case "Solomillo a la pimienta": ?>
											<img id="imgGaleria" src="../imagenes/recetas/17.jpg" height="450px" width="500px">
											<?php break;
	
										case "Conejo en salsa española": ?>
											<img id="imgGaleria" src="../imagenes/recetas/18.jpg" height="450px" width="500px">
											<?php break;
	
										case "Costillas a la parrilla": ?>
											<img id="imgGaleria" src="../imagenes/recetas/19.jfif" height="450px" width="500px">
											<?php break;
										
										case "Revuelto de morcilla": ?>
											<img id="imgGaleria" src="../imagenes/recetas/20.png" height="450px" width="500px">
											<?php break;
										
										case "Sándwich de Frankfurt": ?>
											<img id="imgGaleria" src="../imagenes/recetas/21.jpg" height="450px" width="500px">
											<?php break;
	
										case "Pulled pork": ?>
											<img id="imgGaleria" src="../imagenes/recetas/22.jpg" height="450px" width="500px">
											<?php break;
										
										case "Filetes de pavo a la naranja": ?>
											<img id="imgGaleria" src="../imagenes/recetas/23.jpg" height="450px" width="500px">
											<?php break;
	
										case "Sesos": ?>
											<img id="imgGaleria" src="../imagenes/recetas/24.jpg" height="450px" width="500px">
											<?php break;
										?>
											<?php break;
											?>
										
									?>
								</div>
								</div>
								<?php
							}?>
				<tr>
					<td><h3>Nombre:</h3><br><?php echo $mostrar['Nombre'] ?></td>
				</tr>
				<tr>
					<td><h3>Ingredientes:</h3><br><?php echo $mostrar['Ingredientes'] ?></td><br>
				</tr>
				<tr>
					<td><h3>Elaboración:</h3><br><?php echo $mostrar['Descripcion'] ?></td>
				</tr>
		
				<?php
			}
			?>
		</table>
		</div>
	</div>
		
</body>
</html>

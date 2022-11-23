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
					$result=obtenerReceta($mireceta);
					while($mostrar=$result->fetch_assoc()){ 
						?><div id="galeria">
								<div id="galeria_miniaturas"></div><?php
									switch ($mireceta){ 

										case "Merluza a la plancha": ?>
											<img id="imgGaleria" src="../imagenes/recetas/1.png" height="450px" width="500px">
											<?php break;
										
										case "Atún al ajillo": ?>
											<img id="imgGaleria" src="../imagenes/recetas/2.jpeg" height="450px" width="500px">
											
											<?php break;
										
										case "Salmón a la plancha": ?>
											<img id="imgGaleria" src="../imagenes/recetas/3.png" height="450px" width="500px">
											<?php break;
										
										case "Calamares a la romana": ?>
											<img id="imgGaleria" src="../imagenes/recetas/4.jpg" height="450px" width="500px">
											<?php break;
										
										case "Dorada": ?>
											<img id="imgGaleria" src="../imagenes/recetas/5.png" height="450px" width="500px">
											<?php break;
	
										case "Gambas al ajillo": ?>
											<img id="imgGaleria" src="../imagenes/recetas/6.jpg" height="450px" width="500px">
											<?php break;
	
										case "Sardinas": ?>
											<img id="imgGaleria" src="../imagenes/recetas/7.jpg" height="450px" width="500px">
											<?php break;
										
										case "Gambas rebozadas": ?>
											<img id="imgGaleria" src="../imagenes/recetas/8.jpg" height="450px" width="500px">
											<?php break;
										
										case "Mejillones a la marinera": ?>
											<img id="imgGaleria" src="../imagenes/recetas/9.jpg" height="450px" width="500px">
											<?php break;
	
										case "Almejas": ?>
											<img id="imgGaleria" src="../imagenes/recetas/10.jpg" height="450px" width="500px">
											<?php break;
										
										case "Langosta": ?>
											<img id="imgGaleria" src="../imagenes/recetas/11.jpg" height="450px" width="500px">
											<?php break;
	
										case "Merluza con salsa": ?>
											<img id="imgGaleria" src="../imagenes/recetas/12.jpg" height="450px" width="500px">
											<?php break;
									?>
								</div>
								</div>
								<?php
							}?>
				<tr>
					<td><h3>Nombre:</h3><br><?php echo $mostrar['Nombre'] ?><hr></td>
				</tr>
				<tr>
					<td><h3>Ingredientes:</h3><br><?php echo $mostrar['Ingredientes'] ?><hr></td>
				</tr>
				<tr>
					<td><h3>Elaboración:</h3><br><?php echo $mostrar['Descripcion'] ?><hr></td>
				</tr>
		
				<?php
			}
			?>
		</table>
		</div>
	</div>


</body>
</html>

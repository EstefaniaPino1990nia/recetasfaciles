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
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!--ARCHIVO CSS-->
    <link rel="stylesheet" href="../src/css/galeria2.css">

</head>

<body>
<?php
$conexion = crearConexion("recetario"); 
	$mireceta=$_POST["enviando"]; 
	?>
		<div id="titulo" style="margin-bottom: 2%; margin-top: 2%; margin-left:5%;"><h1><?php echo $mireceta ?></h1> </div>
			<div id="cajaimagenes"> 
				<div id="cajatexto"> 
					<table id="tablaanimales" style="width: 600px;"> 
					<?php	
					$result=obtenerVerdura($mireceta);
					while($mostrar=$result->fetch_assoc()){ 
						?><div id="galeria">
								<div id="galeria_miniaturas"></div><?php
									switch ($mireceta){ 

                                            case "Revuelto de espinacas": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/25.jfif" height="450px" width="500p">
                                                <?php break;
                                            
                                            case "Lasaña de verduras": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/26.jpg" height="450px" width="500p">
                                                
                                                <?php break;
                                            
                                            case "Crema de calabaza": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/27.jpg" height="450px" width="500p">
                                                <?php break;
                                            
                                            case "Brochetas de verduras": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/28.jpg" height="450px" width="500p">
                                                <?php break;
                                            
                                            case "Medallones de verduras": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/29.jpg" height="450px" width="500p">
                                                <?php break;
        
                                            case "Sopa de verduras": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/30.jpg" height="450px" width="500p">
                                                <?php break;
        
                                            case "Ensalada variada": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/31.jpg" height="450px" width="500p">
                                                <?php break;
                                            
                                            case "Tomates rellenos": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/32.jpeg" height="450px" width="500p">
                                                <?php break;
                                            
                                            case "Escalivada de verduras": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/33.jpg" height="450px" width="500p">
                                                <?php break;
        
                                            case "Salmorejo": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/34.jpg" height="450px" width="500p">
                                                <?php break;
                                            
                                            case "Ensalada de quinoa": ?>
                                               <img id="imgGaleria" src="../imagenes/recetas/35.jpeg" height="450px" width="500p">
                                                <?php break;
        
                                            case "Revuelto de esparragos": ?>
                                                <img id="imgGaleria" src="../imagenes/recetas/36.jpg" height="450px" width="500p">
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

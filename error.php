<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='UTF-8' />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/estilo.css" />
		<title>
			Evaluación a cursos - Universidad Loyola del Pacífico
		</title>
	</head>
	<body>
		<br /><br />
		<div class="container" id="errorcont">
			<div class=" row">
				<div class="col-xs-12 col-lg-4 col-sm-4 col-md-4">
					<img src="img/Logo_horizontal.png" class="img-responsive" id="logodatos"/>
				</div>
				<!--div class="row"-->
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<?php
							$err = $_GET['err'];
							$source = $_GET['s'];
							$txt = null;
							if ($source == "conn") {
								$txt = "AL TRATAR DE CONECTAR A LA DB SE PRODUJO EL SIGUIENTE ERROR:";		
							} else if($source == "mat") {
								$txt = "ERROR AL MOSTRAR LA INFORMACION";
							} else if ($source == "ne"){
								$txt = "La matricula: " . $err . " NO fue encontrada!!";
							} else if($source == "save") {
								$txt = "ERROR AL TRATAR DE GUARDAR LAS RESPUESTAS!!!";
							}
							echo 
								"<div id='aviso'>
						 			<STRONG>
										<H2>
											".$txt."
										</H2>
							 		</STRONG> 
									".$err.
			 					"</div>
			 					 <br />
			 					 <br />
			 					 <div class='col-lg-offset-4'>
		   					 		<a class='btn btn-primary' role='button' href='principal.html'>REGRESAR</a>
		   					 	 </div>";
		   				?>
		   			<!--/div-->
		   		</div>
			</div>
		</div>
		<script src="js/jquery.min.2.1.3.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
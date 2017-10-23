<?php
	$infalumno = $_GET['infalum'];
	$listamaterias = $_GET['lstmates'];
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta  charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/estilo.css" />
		<title>
			Evaluación a cursos - Universidad Loyola del Pacífico
		</title>
		<script src="js/jquery.min.2.1.3.js"></script>
		<script>
			$(document).ready(function() {
				var a = document.getElementById("alumno");
				var m = document.getElementById("matricula");
				var p = document.getElementById("profesor");
				var g = document.getElementById("grupo");				
			});
		</script>
	</head>
	<body>
		<br /><br />
		<div class="container" id="inf">
			<div class="row">
				<div class="col-xs-12 col-lg-4 col-sm-4 col-md-4">
					<img src="img/Logo_horizontal.png" class="img-responsive" id="logodatos"/>
				</div>
				<div class="col-xs-12 col-lg-8 col-sm-8 col-md-8">
					<h3>
						Dirección General Académica
					</h3>
					<span id="eva">
						Evaluación a Cursos
					</span>										
					<?php
							
						$arralum = stripslashes($infalumno);
						$arral = urldecode($arralum);
						$arral = unserialize($arral);
							
						$arrmates = stripslashes($listamaterias);
						$arrmat = urldecode($arrmates);
						$arrmat = unserialize($arrmat);
						$tam = count($arrmat);
						
						//DATOS GENERALES DEL ALUMNO
						$alumno = $arral['alumno'];
						$matricula = $arral['matricula'];
						$grupo = $arral['grupo'];
						$nivel = $arral['nivel'];
						$idgrupo = $arral['id_grupo'];
						$coord = $arral['coord'];
						
						$datos = new datos($alumno, $matricula, $grupo, $arrmat, $nivel, $tam, $idgrupo, $coord);
						if($tam > 0) {
							$datos->showDatos();	
						} else {
							$datos->evaluadas();
						}					
											
						class datos {
							private $alumno;
							private $matricula;
							private $materias;
							private $grupo;
							private $nivel;
							private $tam;
							private $idgrupo;
							private $coord;
		
							public function __construct($alumno, $matricula, $grupo, $materias, $nivel, $tam, $idgrupo, $coord) {
								$this->alumno = $alumno;
								$this->matricula = $matricula;
								$this->materias = $materias;
								$this->grupo = $grupo;
								$this->nivel = $nivel;
								$this->tam = $tam;
								$this->idgrupo = $idgrupo;
								$this->coord = $coord;
							}
		
							public function showDatos() {
								echo "<h4>
										Alumno: $this->alumno
										<br />
										Matricula: $this->matricula
										<br />
									  </h4>";
								echo "<form class='form-horizontal' method='post' action='seccion1.php'>
									  <input type='hidden' name='alumno' value='" . $this->alumno . "' />
									  <input type='hidden' name='matricula' value='" . $this->matricula . "' />
									  <input type='hidden' name='tam' value='" . $this->tam . "' />
									  <input type='hidden' name='grupo' value='" . $this->grupo . "' />
									  <input type='hidden' name='nivel' value='" . $this->nivel . "' />
									  <input type='hidden' name='idgrupo' value='" . $this->idgrupo . "' />
									  <input type='hidden' name='coord' value='" . $this->coord . "' />
									<div class='form-group col-xs-12 col-lg-9'>
										<!--select class='form-control' name='materia' required>
											<option value=''></option-->";
												foreach($this->materias as $row) {
													echo "<input type='text' name='materia' size='40' value='" . $row['materia'] . "' disable readonly />";
													echo"
										  	<input type='hidden' name='profesor' value='" . $row['profesor'] . "'/-->";
											break;
											}
								echo "	<!--/select-->
									</div>
									<div class='form-group col-lg-4 '>
										<button class='btn btn-primary btn-md' type='submit'>
											Siguiente
										</button>
									</div>
								</form>
								</div>
								<div class='col-xs-12 col-lg-12 col-lg-offset-2'>
						<br />
						<br />
						<small>
							<b>
								NOTA: Te pedimos contestar todas las preguntas honestamente, los resultados serán confidenciales para fines exclusivamente estadísticos.
							</b>
						</small>
				</div>";
							}
							public function evaluadas() {
								echo 
									"<br />
									<br />
									<div class='col-xs-12 col-sm-12 col-md-12 col-lg-9 text-center'>
									<p class='bg-primary' id='eleaviso'>
										NO TIENES MAS MATERIAS POR EVALUAR
									</p>
									<a class='btn btn-primary btn-lg' href='principal.html'>
										Aceptar
									</a>
									<br />
									<br />
								</div>";
							}
						}
					?>
			</div>		
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
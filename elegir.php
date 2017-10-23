<?php
	$matricula = $_GET['matricula'];
	$alumno = $_GET['alumno'];
	$tam = $_GET['tam'];
	
	$elegir = new Elegir($matricula, $alumno, $tam);
	$elegir->pintaPagina();
	
	class Elegir {
		
		private $matricula;
		private $alumno;
		private $tam;
		
		public function __construct($matricula, $alumno, $tam) {
			$this->matricula = $matricula;
			$this->alumno = $alumno;
			$this->tam = $tam;
		}
		
		public function pintaPagina() {
			echo 
				"<!DOCTYPE html>
				 <html lang='es'>
				 	<head>
						<meta charset='UTF-8' />
						<meta name='viewport' content='width=device-width, initial-scale=1' />
						<link rel='stylesheet' href='css/bootstrap.css' />
						<link rel='stylesheet' href='css/estilo.css'/>
						<title>
							Evaluación a cursos - Universidad Loyola del Pacífico
						</title>
					</head>
					<body>
					<br /><br />
						<div class='container' id='elegircontainer1'>
							<div class='row'>
								<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
									<img src='img/Logo_horizontal.png' class='img-responsive' />
								</div>
								<div class='col-xs-12 col-sm-8 col-md-8  col-lg-8 '>
									<h3>
										Dirección General Académica
									</h3>
									<span id='eva'>
										Evaluación a cursos
									</span>
									<br /><br />
									<h4>
										Alumno: " . $this->alumno . "
										<br />
										Matricula: " . $this->matricula . " 
									</h4>
								</div>
							</div>
							<br />
							<br />";
							if($this->tam == 1) {
								$this->pintaMsjEnd(); 
							} else {
								$this->pintaMsjNext();
							}
				   echo"</div>		
						<script src='js/jquery.min.js'></script>
						<script src='js/bootstrap.js'></script>
					</body>
				 </html>";
		}
		
		private function pintaMsjNext() {
			echo 
				"<div class='row'>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2 text-center'>
									<p class='bg-primary' id='eleaviso'>
										TUS RESPUESTAS FUERON GUARDADAS DE MANERA SATISFACTORIA
									</p>
								</div>
							</div>
							<br />
							<form class='form-horizontal' method='post' action='controlador/ctrlDatos.php'>
								<div class='form-group text-center' >
									<button class='btn bnt-lg btn-primary' type='submit'>
										<b>
											EVALUAR LA SIGUIENTE MATERIA
										</b>
									</button>
								</div>
								<input type='hidden' name='mat' value='" . $this->matricula . "' />
							</form>";
		}
		
		private function pintaMsjEnd() {
			echo 
				"<div class='row'>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2 text-center'>
									<p class='bg-primary' id='eleaviso'>
										TUS RESPUESTAS FUERON GUARDADAS DE MANERA SATISFACTORIA
									</p>
								</div>
							</div>
							<br />
							<div class='form-group text-center' >
								<a class='btn bnt-lg btn-primary' href='principal.html'>
									<b>
										GRACIAS POR TU PARTICIPACIÓN
									</b>
								</a>
							</div>
							</form>";
		}
		
		public function __destruct() {}
	}
?>
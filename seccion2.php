<!DOCTYPE html>
<?php
	$alumno = $_POST['alumno'];
	$matricula = $_POST['matricula'];
	$profesor = $_POST['profesor'];
	$grupo = $_POST['grupo'];
	$materia = $_POST['materia'];
	$tam = $_POST['tam'];
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$p5 = $_POST['p5'];
	$p6 = $_POST['p6'];
	$p7 = $_POST['p7'];
	$p8 = $_POST['p8'];
	$p9 = $_POST['p9'];
	$p10 = $_POST['p10'];
	$p11 = $_POST['p11'];
	$p12 = $_POST['p12'];
	$p13 = $_POST['p13'];
	$p14 = $_POST['p14'];
	$p15 = $_POST['p15'];
	$p16 = $_POST['p16'];
	$p17 = $_POST['p17'];
	$p18 = $_POST['p18'];
	$p19 = $_POST['p19'];
	$p20 = $_POST['p20'];
	$p21 = $_POST['p21'];
	$p22 = $_POST['p22'];
	$p23 = $_POST['p23'];
	$p24 = $_POST['p24'];
		
	$secc2 = new seccion2($alumno, $matricula, $profesor, $grupo, $materia, $tam, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24);
	$secc2->pintaPagina();
	
	class seccion2 {
		
		private $alumno;
		private $matricula;
		private $profesor;
		private $grupo;
		private $materia;
		private $tam;
		private $p1;
		private $p2;
		private $p3;
		private $p4;
		private $p5;
		private $p6;
		private $p7;
		private $p8;
		private $p9;
		private $p10;
		private $p11;
		private $p12;
		private $p13;
		private $p14;
		private $p15;
		private $p16;
		private $p17;
		private $p18;
		private $p19;
		private $p20;
		private $p21;
		private $p22;
		private $p23;
		private $p24;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $materia, $tam, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24) {
			$this->alumno = $alumno;
			$this->matricula = $matricula;
			$this->profesor = $profesor;
			$this->grupo = $grupo;
			$this->materia = $materia;
			$this->tam = $tam;
			$this->p1 = $p1;
			$this->p2 = $p2;
			$this->p3 =  $p3;
			$this->p4 = $p4;
			$this->p5 = $p5;
			$this->p6 = $p6;
			$this->p7 = $p7;
			$this->p8 = $p8;
			$this->p9 = $p9;
			$this->p10 = $p10;
			$this->p11 = $p11;
			$this->p12 = $p12;
			$this->p13 = $p13;
			$this->p14 = $p14;
			$this->p15 = $p15;
			$this->p16 = $p16;
			$this->p17 = $p17;
			$this->p18 = $p18;
			$this->p19 = $p19;
			$this->p20 = $p20;
			$this->p21 = $p21;
			$this->p22 = $p22;
			$this->p23 = $p23;
			$this->p24 = $p24;
			//echo "$tam";		
		}
		
		public function pintaPagina() {
			echo 
				"<html lang='es'>
				 	<head>
				 		<meta charset='UTF-8' />
				 		<meta name='viewport' content='width=device-width, initla-scale=1' />
				 		<link rel='stylesheet' href='css/bootstrap.min.css' />
				 		<link rel='stylesheet' href='css/estilo.css' />
				 	</head>
				 	<body>
				 		<div class='container' id='secc2container1'>
				 			<div class='row'>
				 				<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
				 					<img src='img/Logo_horizontal.png' class='img-responsive' id='secc1logo' />
								</div>
								<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>						
									<h3>
										Dirección General Académica
									</h3>
									<span id='eva'>
										Evaluación a Cursos
									</span>
								</div>
							</div>
							<div clas='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<span id='profmat'>
									Profesor: " . $this->profesor . "
									<br />
									Materia: " . $this->materia . "
								</span>
								<br />
								<br />
								<p class='bg-primary' id='secc1prof'>
									Sección 2: Como Alumno...
								</p>
								<br />
							</div>
							<form class='form-horizontal' name='secc2form' method='post' action='controlador/ctrlRespuestas.php'>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									25. Quisiera tomar otra clase con el profesor.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select class='form-control' name='p25' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='3'>
												De acuerdo
											</option>
											<option value='2'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									26. Las calificaciones que obtengo son el resultado de mi desempeño.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='p26' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='3'>
												De acuerdo
											</option>
											<option value='2'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									27. La forma en que estudio es la adecuada para obtener aprender.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='p27' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='3'>
												De acuerdo
											</option>
											<option value='2'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									28. Sé organizar mi tiempo para estudiar y divertirme sin tener problemas para mi desempeño académico.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='p28' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='3'>
												De acuerdo
											</option>
											<option value='2'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									29. Cuando no he comprendído algo pido ayuda al profesor.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='p29' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='3'>
												De acuerdo
											</option>
											<option value='2'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									30. Cuando no he comprendído algo en clase acudo al serviciode tutorías (sólo si aplica para la materia).
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='p30' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='3'>
												De acuerdo
											</option>
											<option value='2'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span   class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
									<div class='form-group'>
										<span id='obs' class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
											<b>	Si tienes observaciones adicionales y respetables, escríbelas: </b>
										</span>
										<span class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
											<br />
											<textarea class='form-control' id='txtarea' name='observ'>
											</textarea>
										</span>
									</div>
								</span>
								<div class='form-group'>
									<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
										<button class='btn btn-primary btn-md' type='submit'>
											Siguiente
										</button>
									</div>
								</div>
								<input type='hidden' name='alumno' value='" . $this->alumno . "' />
								<input type='hidden' name='matricula' value='" . $this->matricula . "' />
								<input type='hidden' name='grupo' value='" . $this->grupo . "' />
								<input type='hidden' name='profesor' value='" . $this->profesor . "' />
								<input type='hidden' name='materia' value='" . $this->materia . "' />
								<input type='hidden' name='tam' value='" . $this->tam . "' />
								<input type='hidden' name='p1' value='" . $this->p1 . "' />
								<input type='hidden' name='p2' value='" . $this->p2 . "' />
								<input type='hidden' name='p3' value='" . $this->p3 . "' />
								<input type='hidden' name='p4' value='" . $this->p4 . "' />
								<input type='hidden' name='p5' value='" . $this->p5 . "' />
								<input type='hidden' name='p6' value='" . $this->p6 . "' />
								<input type='hidden' name='p7' value='" . $this->p7 . "' />
								<input type='hidden' name='p8' value='" . $this->p8 . "' />
								<input type='hidden' name='p9' value='" . $this->p9 . "' />
								<input type='hidden' name='p10' value='" . $this->p10 . "' />
								<input type='hidden' name='p11' value='" . $this->p11 . "' />
								<input type='hidden' name='p12' value='" . $this->p12 . "' />
								<input type='hidden' name='p13' value='" . $this->p13 . "' />
								<input type='hidden' name='p14' value='" . $this->p14 . "' />
								<input type='hidden' name='p15' value='" . $this->p15 . "' />
								<input type='hidden' name='p16' value='" . $this->p16 . "' />
								<input type='hidden' name='p17' value='" . $this->p17 . "' />
								<input type='hidden' name='p18' value='" . $this->p18 . "' />
								<input type='hidden' name='p19' value='" . $this->p19 . "' />
								<input type='hidden' name='p20' value='" . $this->p20 . "' />
								<input type='hidden' name='p21' value='" . $this->p21 . "' />
								<input type='hidden' name='p22' value='" . $this->p22 . "' />
								<input type='hidden' name='p23' value='" . $this->p23 . "' />
								<input type='hidden' name='p24' value='" . $this->p24 . "' />
							</form>
						</div>
						<script src='js/jquery.min.js'></script>
						<script src='js/bootstrap.min.js'></script>
					</body>
				</html>";			
		}
		
		public function __destruct() {}
	}
?>
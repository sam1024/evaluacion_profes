<!DOCTYPE html>
<?php
	$alumno = $_POST['alumno'];
	$matricula = $_POST['matricula'];
	$profesor = $_POST['profesor'];
	$grupo = $_POST['grupo'];
	$materia = $_POST['materia'];
	$nivel = $_POST['nivel'];
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
	$pa = $_POST['pa'];
	$pb = $_POST['pb'];
	$pc = $_POST['pc'];
	$pd = $_POST['pd'];
	$pe = $_POST['pe'];
	$pf = $_POST['pf'];
	$pg = $_POST['pg'];
	$ph = $_POST['ph'];
	$pi = $_POST['pi'];
	$tam = $_POST['tam'];
	$idgrupo = $_POST['idgrupo'];
	$coord = $_POST['coord'];
		
	$secc3 = new seccion3($alumno, $matricula, $profesor, $grupo, $materia, $nivel, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $pa, $pb, $pc, $pd, $pe, $pf, $pg, $ph, $pi, $tam, $idgrupo, $coord);
	$secc3->pintaPagina();
	
	class seccion3 {
		
		private $alumno;
		private $matricula;
		private $profesor;
		private $grupo;
		private $materia;
		private $nivel;
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
		private $pa;
		private $pb;
		private $pc;
		private $pd;
		private $pe;
		private $pf;
		private $pg;
		private $ph;
		private $pi;
		private $tam;
		private $idgrupo;
		private $coord;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $materia, $nivel, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $pa, $pb, $pc, $pd, $pe, $pf, $pg, $ph, $pi, $tam, $idgrupo, $coord) {
			$this->alumno = $alumno;
			$this->matricula = $matricula;
			$this->profesor = $profesor;
			$this->grupo = $grupo;
			$this->materia = $materia;
			$this->nivel = $nivel;
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
			$this->pa = $pa;
			$this->pb = $pb;
			$this->pc = $pc;
			$this->pd = $pd;
			$this->pe = $pe;
			$this->pf = $pf;
			$this->pg = $pg;
			$this->ph = $ph;
			$this->pi = $pi;
			$this->tam = $tam;
			$this->idgrupo = $idgrupo;
			$this->coord = $coord;
			//echo "Alumno: $this->alumno. Pregunta1: $this->p1 Matricula: $this->matricula . Grupo: $this->grupo . Materia: $this->materia";		
			echo "Alumno: $this->alumno. Pregunta1: $this->p1 Matricula: $this->matricula . Grupo: $this->grupo . Materia: $this->materia . $this->nivel . $this->coord";
		}
		
		public function pintaPagina() {
			echo 
				"<html lang='es'>
				 	<head>
				 		<meta charset='UTF-8' />
				 		<meta name='viewport' content='width=device-width, initla-scale=1' />
				 		<link rel='stylesheet' href='css/bootstrap.min.css' />
				 		<link rel='stylesheet' href='css/estilo.css' />
				 		<title>
				 			Evaluación a cursos - Universidad Loyola del Pacífico
				 		</title>
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
									19. Señala las actividades que con mayor frecuencia se han realizado en la materia
								</p>
								<br />
							</div>
							<form class='form-horizontal' name='secc2form' method='post' action='controlador/ctrlRespuestasUni.php'>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									a) Exposición del profesor.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select class='form-control' name='pa3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									b) Exposición de los alumnos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='pb3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									c) Solución de problemas o estudios de caso.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='pc3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									d) Discusión o debates basados en lecturas o trabajos realizados previamente.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='pd3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									e) Desarrollo de trabajos, dibujos, proyectos o prácticas bajo la supervisión del profesor
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='pe3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									f) Visitas a empresas o a otras organizaciones o prácticas de campo.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='pf3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									g) Trabajo en equipos .
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group' >
										<select class='form-control' name='pg3' required>
											<option value=''></option>
											<option value='1'>
												Sí
											</option>
											<option value='2'>
												No
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									h) Otra, por favor anota cual...
								</span>
								<div class='form-group'>
									<span class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
										<br />
										<textarea class='form-control' id='txtarea' name='otra'>
										</textarea>
									</span>
								</div>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									<br />
									20. En promedio ¿cuantas horas a la semana le has dedicado a esta materia fuera de clase (lecturas, tareas, ejercicios, trabajos, estudio para exámenes, trabajo en equipo, etc.)?
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<br />
									<div class='form-group' >
										<select class='form-control' name='p203' required>
											<option value=''></option>
											<option value='1'>
												Cero horas
											</option>
											<option value='2'>
												Menos que las horas de clase pero mas que cero
											</option>
											<option value='3'>
												La misma cantidad que las horas de clase
											</option>
											<option value='4'>
												Mas que las horas de clase
											</option>
										</select>
									</div>
								</span>
								<span id='obs' class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
									21. Por favor escribe en el recuadro comentarios, aclaraciones o sugerencias respecto a la materia:
								</span>
								<div class='form-group'>
									<span class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
										<br />
										<textarea class='form-control' id='txtarea2' name='observ'>
										</textarea>
									</span>
								</div>
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
								<input type='hidden' name='pa' value='" . $this->pa . "' />
								<input type='hidden' name='pb' value='" . $this->pb . "' />
								<input type='hidden' name='pc' value='" . $this->pc . "' />
								<input type='hidden' name='pd' value='" . $this->pd . "' />
								<input type='hidden' name='pe' value='" . $this->pe . "' />
								<input type='hidden' name='pf' value='" . $this->pf . "' />
								<input type='hidden' name='pg' value='" . $this->pg . "' />
								<input type='hidden' name='ph' value='" . $this->ph . "' />
								<input type='hidden' name='pi' value='" . $this->pi . "' />
								<input type='hidden' name='tam' value='" . $this->tam . "' />
								<input type='hidden' name='idgrupo' value='" . $this->idgrupo . "' />
								<input type='hidden' name='coord' value='" . $this->coord . "' />
								<input type='hidden' name='nivel' value='" . $this->nivel . "' />
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
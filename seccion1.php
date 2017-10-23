<!DOCTYPE html>
<?php
	$alumno = $_POST['alumno'];
	$matricula = $_POST['matricula'];
	$profesor = $_POST['profesor'];
	$grupo = $_POST['grupo'];
	$materia = $_POST['materia'];
	$nivel = $_POST['nivel'];
	$tam = $_POST['tam'];
	$idgrupo = $_POST['idgrupo'];
	$coord = $_POST['coord'];

	$secc1 = new seccion1($alumno, $matricula, $profesor, $grupo, $materia, $nivel, $tam, $idgrupo, $coord);
	$secc1->showDatos();

	class seccion1 {
		private $alumno;
		private $matricula;
		private $profesor;
		private $grupo;
		private $materia;
		private $nivel;
		private $tam;
		private $idgrupo;
		private $coord;

		public function __construct($_alumno, $_matricula, $_profesor, $_grupo, $_materia, $_nivel, $tam, $idgrupo, $coord) {
			$this->alumno = $_alumno;
			$this->matricula = $_matricula;
			$this->profesor = $_profesor;
			$this->grupo = $_grupo;
			$this->materia = $_materia;
			$this->nivel = $_nivel;
			$this->tam = $tam;
			$this->idgrupo = $idgrupo;
			$this->coord = $coord;
			//echo "$tam";
		}

		public function showDatos() {
			echo
				"<html lang='es'>
					<head>
						<meta charset='UTF-8' />
						<meta name='viewport' content='width=device-width, initial-scale=1' />
						<link rel='stylesheet' href='css/bootstrap.css' />
						<link rel='stylesheet' href='css/estilo.css' />
						<title>
							Evaluación a cursos - Universidad Loyola del Pacífico
						</title>
					</head>
					<body>
							<div class='container' id='contenedor1secc1'>
								<div class='row'>
									<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
										<img class='img-responsive' src='img/Logo_horizontal.png' id='secc1logo'/>
									</div>
									<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
										<h3>
											Dirección General Académica
										</h3>
										<span id='eva'>
											Evaluación a Cursos
										</span>
									</div>
									<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'><!--DE AQUÍ-->
										<span id='profmat'>
											Profesor: " . $this->profesor .
											"<br />
											Materia: " . $this->materia . "
										</span>
										<br /><br />";
										if(strtolower($this->nivel) == "prepa") {
											$this->preguntasPrepa();	
										} else {
											$this->preguntasUni();
										}
									echo"<div class='form-group'>
									<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
										<button class='btn btn-primary btn-md' type='submit'>
											Siguiente
										</button>
									</div>
								</div>
							</form>
						</div>
						<script src='js/jquery.min.js'></script>
						<script src='js/bootstrap.js'></script>
					</body>
				</html>";
		}

		private function preguntasPrepa() {
			echo "
				  <span id='secc1instrucc'>
					 <b>
						Instrucciones:
						<br />
						Las evaluaciones honestas y reflexionadas nos ayudan a mejorar, las tendenciosas, vician el proceso.
						<br />
						Contesta los siguientes reactivos, seleccionando tu opinión sobre la afirmación que se realiza, de acuerdo a las opciones que se muestran.
						<br />
						El último reactivo tiene sus propias categorias.
						<br />
						Gracias por tu cooperación.
						</b>
						</span>
						<br /><br />
						<p class='bg-primary' id='secc1prof'>
							Sección 1: El Profesor...
						</p>
					</div>
								</div>
								<form class='form-horizontal' id='preguntas' name='secc1form' method='post' action='seccion2.php'>
									<input type='hidden' name='alumno' value='" . $this->alumno . "' />
									<input type='hidden' name='matricula' value='" . $this->matricula . "' />
									<input type='hidden' name='profesor' value='" . $this->profesor . "' />
									<input type='hidden' name='grupo' value='" . $this->grupo . "' />
									<input type='hidden' name='materia' value='" . $this->materia . "' />
									<input type='hidden' name='nivel' value='" . $this->nivel . "' />
									<input type='hidden' name='tam' value='" . $this->tam . "' />
									<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
										1. Explicó la Guía de aprendizaje de la materia al inicio del semestre en las primeras sesiones
									</span>
									<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
										<div class='form-group'>
											<select name='p1' class='form-control col-xs-12' required>
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
										2. Recuerda y explica la Guía de aprendizaje antes de las entregas de productos.
									</span>
									<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
										<div class='form-group'>
											<select name='p2' class='form-control' required>
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
										3. Habla con claridad en sus clases sobre los temas.
									</span>
									<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
										<div class='form-group'>
										<select name='p3' class='form-control' required>
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
									4. Permite externar opiniones y respeta los distintos puntos de vista aunque sean diferentes al suyo.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p4' class='form-control' required>
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
									5. Fomenta el respeto entre los alumnos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p5' class='form-control' required>
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
									6. Escucha mis dudas y me hace recomendaciones para mejorar mis trabajos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p6' class='form-control' required>
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
									7. Emplea videos sobre algún tema para su discusión.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p7' class='form-control' required>
											<option value=''>
											</option>
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
									8. Usa diapositivas para explicar los temas.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p8' class='form-control' required>
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
									9. Utiliza moodle para compartir información y/o o recibir tus tareas.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p9' class='form-control' required>
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
									10. Se apoya con las heramientas de google para comunicarse o trabajar en clase.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p10' class='form-control' required>
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
									11. Participa en las actividades culturales, deportivas y de esparcimiento de la Preparatoria.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p11' class='form-control' required>
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
									12. Es puntual en su llegada y salida de clase.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p12' class='form-control' required>
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
									13. Diseña actividades y productos que me ayudan a que aprenda.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p13' class='form-control' required>
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
									14. Da ejemplos recientes para explicar los temas.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p14' class='form-control' required>
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
									15. Hace ajustes e incorpora actividades según las necesidades del grupo, sin afectar el cumplimiento del programa explicado al principio de la materia.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p15' class='form-control' required>
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
									16. Promueve el desarrollo de la creatividad con sus actividades y productos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p16' class='form-control' required>
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
									17. Ejercita tanto el trabajo individual como colaborativo.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p17' class='form-control' required>
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
									18. Mantiene el orden en el salón, sin tener problemas de escándalos, agresiones y desorden.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p18' class='form-control' required>
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
									19. Es justo con sus sanciones cuando no cumplimos con tareas o reglas que pone en clase.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p19' class='form-control' required>
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
									20. Redactó con claridad la forma de calificar (rúbrica) los productos para que yo comprenda cómo me va evaluar.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p20' class='form-control' required>
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
									21. En en el trabajo en equipo promueve que cada persona aplique sus mejores cualidades.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p21' class='form-control' required>
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
									22. En el trabajo en equipo califica individualmente de acuerdo a lo que hizo cada persona.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p22' class='form-control' required>
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
									23. Entrega los trabajos con observaciones para que yo aprenda.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p23' class='form-control' required>
											<option value=''>
											</option>
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
									24. Califica los productos de acuerdo a la rúbrica de evaluación.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p24' class='form-control' required>
											<option value=''>
											</option>
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
								</span>";
		}

		private function preguntasUni() {
			echo "
				  <span id='secc1instrucc'>
				  	<b>
				  		Selecciona la opción que tú consideres refleja el nivel en que se encuentra la materia evaluada, entre los dos extremos de respuestas presentadas
				  	</b>
				  </span>
				  <br /><br /><br />
				  <form class='form-horizontal' id='preguntas' name='secc1form' method='post' action='seccion2uni.php'>
									<input type='hidden' name='alumno' value='" . $this->alumno . "' />
									<input type='hidden' name='matricula' value='" . $this->matricula . "' />
									<input type='hidden' name='profesor' value='" . $this->profesor . "' />
									<input type='hidden' name='grupo' value='" . $this->grupo . "' />
									<input type='hidden' name='materia' value='" . $this->materia . "' />
									<input type='hidden' name='nivel' value='" . $this->nivel . "' />
									<input type='hidden' name='tam' value='" . $this->tam . "' />
									<input type='hidden' name='idgrupo' value='" . $this->idgrupo . "' />
									<input type='hidden' name='coord' value='" . $this->coord . "' />
									<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
										1. El(La) profesor(a) entregó la guía de enseñanza (actividades, productos y criterios) al inicio del curso.
									</span>
									<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
										<div class='form-group'>
											<select name='p1' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
										</div>
									</span>
									<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
										2. Durante el curso recibí el apoyo del profesor cuando lo solicité.
									</span>
									<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
										<div class='form-group'>
											<select name='p2' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
										</div>
									</span>
									<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
										3. Las actividades diseñadas por el (la) profesor(a) me permiten aplicar lo aprendido.
									</span>
									<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
										<div class='form-group'>
										<select name='p3' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									4. La forma de enseñar del (la) profesor(a) me ayuda a aprender.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p4' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									5. Me quedan claras todas las instrucciones que da el(la) profesor(a) en clase, tanto para las actividades, como para los productos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p5' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									6. Durante las clases el(la) profesor(a) procuró que relacionara los contenidos con las problemáticas más graves de la profesión y de la sociedad.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p6' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									7. El(La) profesor(a) generó un clima abierto en el que se respetó la diversidad (aspecto físico, creencias, cultura, orientación sexual, etc.).
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p7' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									8. El (La) profesor(a) evaluó los productos de acuerdo a los criterios establecidos desde el inicio del curso.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p8' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									9. En la evaluación se tomaron en cuenta diferentes opiniones (la del profesor, la autoevaluación, la co-evaluación, de externos al grupo, etc.).
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p9' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									10. El (La) profesor(a) ha entregado en tiempo prudente las observaciones, resultados y calificaciones de las actividades, productos y exámenes.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p10' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									11. Los productos elaborados en la materia me permitieron darme cuenta de mis errores y aciertos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p11' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									12. Las actividades realizadas durante las clases me ayudaron a realizar los productos.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p12' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									13. Durante el transcurso del semestre las actividades de clase incrementaron en dificultad, en la medida que avanzaba el curso.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p13' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									14. Durante el semestre no sólo el profesor, sino también nosotros participamos en diferentes actividades.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p14' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									15. El(La) profesor(a) dejó claro que conoce muy bien los contenidos de la materia impartida.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p15' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									16. Cuando el(la) profesor(a) no se presentó a clases, si nos avisó.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p16' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									17. El profesor nos repuso cada una de las faltas a clases en fechas posteriores.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p17' class='form-control col-xs-12' required>
												<option value=''></option>
												<option value='1'>
													Totalmente en desacuerdo
												</option>
												<option value='2'>
													En desacuerdo
												</option>
												<option value='3'>
													En duda
												</option>
												<option value='4'>
													De acuerdo
												</option>
												<option value='5'>
													Totalmente de acuerdo
												</option>
											</select>
									</div>
								</span>
								<!--span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									18. Mantiene el orden en el salón, sin tener problemas de escándalos, agresiones y desorden.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p18' class='form-control' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									19. Es justo con sus sanciones cuando no cumplimos con tareas o reglas que pone en clase.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p19' class='form-control' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									20. Redactó con claridad la forma de calificar (rúbrica) los productos para que yo comprenda cómo me va evaluar.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p20' class='form-control' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									21. En en el trabajo en equipo promueve que cada persona aplique sus mejores cualidades.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p21' class='form-control' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									22. En el trabajo en equipo califica individualmente de acuerdo a lo que hizo cada persona.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p22' class='form-control' required>
											<option value=''></option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									23. Entrega los trabajos con observaciones para que yo aprenda.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p23' class='form-control' required>
											<option value=''>
											</option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span>
								<span class='col-xs-9 col-sm-10 col-md-10 col-lg-10'>
									24. Califica los productos de acuerdo a la rúbrica de evaluación.
								</span>
								<span class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>
									<div class='form-group'>
										<select name='p24' class='form-control' required>
											<option value=''>
											</option>
											<option value='4'>
												Totalmente de acuerdo
											</option>
											<option value='4'>
												De acuerdo
											</option>
											<option value='4'>
												Medianamente de acuerdo
											</option>
											<option value='1'>
												En desacuerdo
											</option>
										</select>
									</div>
								</span-->";
		}

		public function __destruct() {}
	}
?>

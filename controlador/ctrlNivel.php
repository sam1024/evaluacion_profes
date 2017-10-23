<?php
	$alumno = $_POST['alumno'];
	$matricula = $_POST['matricula'];
	$profesor = $_POST['profesor'];
	$grupo = $_POST['grupo'];
	$nivel = $_POST['nivel'];
	$materia = $_POST['materia'];
	
	$nivel = new nivel();
	$nivel->elegir();
	
	class nivel {
		
		private $alumno;
		private $matricula;
		private $profesor;
		private $grupo;
		private $nivel;
		private $materia;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $nivel, $materia) {
			$this->alumno = $alumno;
			$this->matricula = $matricula;
			$this->profesor = $profesor;
			$this->grupo = $grupo;
			$this->nivel = $nivel;
			$this->materia = $materia;
		}
		
		public function elegir() {
			if($this->nivel == "prepa") {
				header("location: seccion1.php?");
			}
		}
		
		public function __destruct() {
			
		}
	}
?>
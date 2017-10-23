<?php
	include '../modelo/modelCuestionarioPrepa.php';

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
	$p25 = $_POST['p25'];
	$p26 = $_POST['p26'];
	$p27 = $_POST['p27'];
	$p28 = $_POST['p28'];
	$p29 = $_POST['p29'];
	$p30 = $_POST['p30'];
	$obs = $_POST['observ'];
	
	$ctrlresp = new ctrlRespuestas($alumno, $matricula, $profesor, $grupo, $materia, $tam, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24, $p25, $p26, $p27, $p28, $p29, $p30, $obs);
	$ctrlresp->saveRespuestas();
	
	class ctrlRespuestas {
		
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
		private $p25;
		private $p26;
		private $p27;
		private $p28;
		private $p29;
		private $p30;
		private $observ;
		private $modelcuestionarioprepa;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $materia, $tam, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24, $p25, $p26, $p27, $p28, $p29, $p30, $observ) {
			$this->alumno = $alumno;
			$this->matricula = $matricula;
			$this->profesor = $profesor;
			$this->grupo = $grupo;
			$this->materia = $materia;
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
			$this->p25 = $p25;
			$this->p26 = $p26;
			$this->p27 = $p27;
			$this->p28 = $p28;
			$this->p29 = $p29;
			$this->p30 = $p30;
			$this->observ = $observ;
			$this->tam = $tam;
		}
		
		public function saveRespuestas() {
			//echo "Alumno: $this->alumno. Pregunta1: $this->p1 . Pregunta25: $this->p25 Pregunta26: $this->p26 Pregunta27: $this->p27 Pregunta28: $this->p28 Pregunta29: $this->p29 . Matricula: $this->matricula . Grupo: $this->grupo . Materia: $this->materia";
			$this->modelcuestionarioprepa = new modelCuestionarioPrepa($this->alumno, $this->matricula, $this->profesor, $this->grupo, $this->materia, $this->p1, $this->p2, $this->p3, $this->p4, $this->p5, $this->p6, $this->p7, $this->p8, $this->p9, $this->p10, $this->p11, $this->p12, $this->p13, $this->p14, $this->p15, $this->p16, $this->p17, $this->p18, $this->p19, $this->p20, $this->p21, $this->p22, $this->p23, $this->p24, $this->p25, $this->p26, $this->p27, $this->p28, $this->p29, $this->p30, $this->observ, $this->tam);
			if($this->modelcuestionarioprepa->saveRespuestas()) {
				header("location: ../elegir.php?matricula=" . $this->matricula . "&alumno=" . $this->alumno . "&tam=" . $this->tam);
			} else {
				header("location: ../error.php?err=null&s=save");
			}	
		}
		
		public function __destruct() {
			
		}		
	}
?>
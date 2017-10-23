<?php
	include '../modelo/modelCuestionarioUni.php';

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
	$pa3 = $_POST['pa3'];
	$pb3 = $_POST['pb3'];
	$pc3 = $_POST['pc3'];
	$pd3 = $_POST['pd3'];
	$pe3 = $_POST['pe3'];
	$pf3 = $_POST['pf3'];
	$pg3 = $_POST['pg3'];
	$otra = $_POST['otra'];
	$p203 = $_POST['p203'];
	$obs = $_POST['observ'];
	$tam = $_POST['tam'];
	$idgrupo = $_POST['idgrupo'];
	$coord = $_POST['coord'];
	
	$ctrlresp = new ctrlRespuestasUni($alumno, $matricula, $profesor, $grupo, $materia, $nivel, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $pa, $pb, $pc, $pd, $pe, $pf, $pg, $ph, $pi, $pa3, $pb3, $pc3, $pd3, $pe3, $pf3, $pg3, $otra, $p203, $obs, $tam, $idgrupo, $coord);
	$ctrlresp->saveRespuestas();
	
	class ctrlRespuestasUni {
		
		private $alumno;
		private $matricula;
		private $profesor;
		private $grupo;
		private $materia;
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
		private $pa3;
		private $pb3;
		private $pc3;
		private $pd3;
		private $pe3;
		private $pf3;
		private $pg3;
		private $otra;
		private $p203;
		private $observ;
		private $modelcuestionariouni;
		private $tam;
		private $idgrupo;
		private $coord;
		private $nivel;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $materia, $nivel, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $pa, $pb, $pc, $pd, $pe, $pf, $pg, $ph, $pi, $pa3, $pb3, $pc3, $pd3, $pe3, $pf3, $pg3, $otra, $p203, $obs, $tam, $idgrupo, $coord) {
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
			$this->pa3 = $pa;
			$this->pb3 = $pb;
			$this->pc3 = $pc;
			$this->pd3 = $pd;
			$this->pe3 = $pe;
			$this->pf3 = $pf;
			$this->pg3 = $pg;
			$this->otra = $otra;
			$this->p203 = $p203;
			$this->observ = $obs;
			$this->tam = $tam;
			$this->idgrupo = $idgrupo;
			$this->coord = $coord;
		}
		
		public function saveRespuestas() {
			//echo "Alumno: $this->alumno. Pregunta1: $this->p1 . Pregunta25: $this->p25 Pregunta26: $this->p26 Pregunta27: $this->p27 Pregunta28: $this->p28 Pregunta29: $this->p29 . Matricula: $this->matricula . Grupo: $this->grupo . Materia: $this->materia";
			$this->modelcuestionariouni = new modelCuestionarioUni($this->alumno, $this->matricula, $this->profesor, $this->grupo, $this->materia, $this->p1, $this->p2, $this->p3, $this->p4, $this->p5, $this->p6, $this->p7, $this->p8, $this->p9, $this->p10, $this->p11, $this->p12, $this->p13, $this->p14, $this->p15, $this->p16, $this->p17, $this->pa, $this->pb, $this->pc, $this->pd, $this->pe, $this->pf, $this->pg, $this->ph, $this->pi, $this->pa3, $this->pb3, $this->pc3, $this->pd3, $this->pe3, $this->pf3, $this->pg3, $this->otra, $this->p203, $this->observ, $this->tam, $this->idgrupo, $this->coord, $this->nivel);
			//$this->modelcuestionariouni->saveRespuestas();
			if($this->modelcuestionariouni->saveRespuestas()) {
				header("location: ../elegir.php?matricula=" . $this->matricula . "&alumno=" . $this->alumno . "&tam=" . $this->tam);
				//echo $this->matricula . $this->alumno;
			} else {
				header("location: ../error.php?err=null&s=save");
			}		
		}
		
		public function __destruct() {
			
		}		
	}
?>
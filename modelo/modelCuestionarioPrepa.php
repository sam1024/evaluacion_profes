<?php
	include '../modelo/modelDB.php';

	class modelCuestionarioPrepa {
		private $id;
		private $grupo;
		private $matricula;
		private $alumno;		
		private $materia;
		private $profesor;		
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
		private $observaciones;
		private $status;
		private $tam;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $materia, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24, $p25, $p26, $p27, $p28, $p29, $p30, $observ, $tam) {
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
			$this->observaciones = $observ;
			$this->tam = $tam;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
		
		public function getGrupo() {
			return $this->grupo;
		}
		
		public function getMatricula() {
			return $this->matricula;
		}
		
		public function getAlumno() {
			return $this->alumno;
		}
		
		public function getMateria() {
			return $this->materia;
		}
		
		public function getProfesor() {
			return $this->profesor;
		}
		
		public function getP1() {
			return $this->p1;
		}
		
		public function getP2() {
			return $this->p2;
		}
		
		public function getP3() {
			return $this->p3;
		}
		
		public function getP4() {
			return $this->p4;
		}
		
		public function getP5() {
			return $this->p5;
		}
		
		public function getP6() {
			return $this->p6;
		}
		
		public function getP7() {
			return $this->p7;
		}
		
		public function getP8() {
			return $this->p8;
		}
		
		public function getP9() {
			return $this->p9;
		}
		
		public function getP10() {
			return $this->p10;
		}
		
		public function getP11() {
			return $this->p11;
		}
		
		public function getP12() {
			return $this->p12;
		}
		
		public function getP13() {
			return $this->p13;
		}
		
		public function getP14() {
			return $this->p14;
		}
		
		public function getP15() {
			return $this->p15;
		}
		
		public function getP16() {
			return $this->p16;
		}
		
		public function getP17() {
			return $this->p17;
		}
		
		public function getP18() {
			return $this->p18;
		}
		
		public function getP19() {
			return $this->p19;
		}
		
		public function getP20() {
			return $this->p20;
		}
		
		public function getP21() {
			return $this->p21;
		}
		
		public function getP22() {
			return $this->p22;
		}
		
		public function getP23() {
			return $this->p23;
		}
		
		public function getP24() {
			return $this->p24;
		}
		
		public function getP25() {
			return $this->p25;
		}
		
		public function getP26() {
			return $this->p26;
		}
		
		public function getP27() {
			return $this->p27;
		}
		
		public function getP28() {
			return $this->p28;
		}
		
		public function getP29() {
			return $this->p29;
		}
		
		public function getP30() {
			return $this->p30;
		}
		
		public function getObervaciones() {
			return $this->observaciones;
		}
		
		public function saveRespuestas() {
			$flag = FALSE;
			$modeldb = new modelDB();
			$obv = addslashes($this->observaciones);
			$i = -0;
			if($this->tam == 1) {
				$query = "insert into cuestionario_prepa values(null,'$this->grupo',$this->matricula,'$this->alumno','$this->materia','$this->profesor',$this->p1,$this->p2,$this->p3,$this->p4,$this->p5,$this->p6,$this->p7, $this->p8,$this->p9,$this->p10,$this->p11,$this->p12,$this->p13,$this->p14,$this->p15, $this->p16,$this->p17,$this->p18,$this->p19,$this->p20,$this->p21,$this->p22,$this->p23,$this->p24,$this->p25,$this->p26,$this->p27,$this->p28,$this->p29,$this->p30,'$obv',0)";
				$upddatos = "UPDATE datos SET status=1 WHERE matricula=" . $this->matricula . " AND materia='" . $this->materia . "'";
				$updcuestionario = "UPDATE cuestionario_prepa SET status=1 WHERE matricula=" . $this->matricula;
				$i = $modeldb->saveRespuestas($query, $upddatos, $updcuestionario);
			} else {
				$query = "insert into cuestionario_prepa values(null,'$this->grupo',$this->matricula,'$this->alumno','$this->materia','$this->profesor',$this->p1,$this->p2,$this->p3,$this->p4,$this->p5,$this->p6,$this->p7, $this->p8,$this->p9,$this->p10,$this->p11,$this->p12,$this->p13,$this->p14,$this->p15, $this->p16,$this->p17,$this->p18,$this->p19,$this->p20,$this->p21,$this->p22,$this->p23,$this->p24,$this->p25,$this->p26,$this->p27,$this->p28,$this->p29,$this->p30,'$obv',0)";
				$upddatos = "UPDATE datos SET status=1 WHERE matricula=" . $this->matricula . " AND materia='" . $this->materia . "'";
				$i = $modeldb->saveRespuestas($query, $upddatos, null);
			}
			if($i != 0) {
				$flag = TRUE;
			}
			return $flag;
		}
		
		private function updStatusMateria() {
			$query = "UPDATE datos SET status=1 WHERE id=" . $this->getId();
			$modeldb = new modelDB();
			return $modeldb->updStatusMateria($query);
		}
		
		public function __destruct() {}
	}
?>
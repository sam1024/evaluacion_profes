<?php
	include '../modelo/modelDB.php';

	class modelCuestionarioUni {
		private $id;
		private $grupo;
		private $matricula;
		private $alumno;		
		private $materia;
		private $profesor;
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
		private $pa3;
		private $pb3;
		private $pc3;
		private $pd3;
		private $pe3;
		private $pf3;
		private $pg3;
		private $otra;
		private $p203;
		private $observaciones;
		private $status;
		private $tam;
		private $idgrupo;
		private $coord;
		
		public function __construct($alumno, $matricula, $profesor, $grupo, $materia, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $pa, $pb, $pc, $pd, $pe, $pf, $pg, $ph, $pi, $pa3, $pb3, $pc3, $pd3, $pe3, $pf3, $pg3, $otra, $p203, $obs, $tam, $idgrupo, $coord, $nivel) {
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
			$this->observaciones = $obs;
			$this->tam = $tam;
			$this->idgrupo = $idgrupo;
			$this->coord = $coord;
			$this->nivel = $nivel;
		}
		
		public function saveRespuestas() {
			$flag = FALSE;
			$obv = addslashes($this->observaciones);
			$other = addslashes($this->otra);
			$i = -0;
			$modeldb = new modelDB();
			$query = "INSERT INTO cuestionario_uni VALUES(null,$this->matricula,'$this->alumno',$this->idgrupo,'$this->materia','$this->nivel','$this->profesor','$this->coord',$this->p1,$this->p2,$this->p3,$this->p4,$this->p5,$this->p6,$this->p7, $this->p8,$this->p9,$this->p10,$this->p11,$this->p12,$this->p13,$this->p14,$this->p15, $this->p16,$this->p17,$this->pa, $this->pb, $this->pc, $this->pd, $this->pe, $this->pf, $this->pg, $this->ph, $this->pi, $this->pa3, $this->pb3, $this->pc3, $this->pd3, $this->pe3, $this->pf3, $this->pg3, '$other', $this->p203, '$obv',0)";
			if($this->tam == 1) {
				$upddatos = "UPDATE datos SET status=1 WHERE matricula=" . $this->matricula . " AND materia='" . $this->materia . "'";
				$updcuestionario = "UPDATE cuestionario_uni SET status=1 WHERE matricula=" . $this->matricula;
				$i = $modeldb->saveRespuestas($query, $upddatos, $updcuestionario);
				//echo "EJECUTO TAM == 1 " . $query . "<br />" . $upddatos . "<br />" . $updcuestionario . "$i = " . $i;
			} else {
				$upddatos = "UPDATE datos SET status=1 WHERE matricula=" . $this->matricula . " AND materia='" . $this->materia . "'";
				$i = $modeldb->saveRespuestas($query, $upddatos, null);
				//echo "EJECUTO TAM >= 1 " . $query . "<br />" . $upddatos . "<br />" . "$i = " . $i;
			}			
			if($i != 0) {
				$flag = TRUE;
			}
			return $flag;
		}
		
		public function __destruct() {}
	}
?>
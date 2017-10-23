<?php
	include '../modelo/modelDatos.php';

	//$mat = $_POST['mat'];
	$ctrldatos = new ctrlDatos();

	if (isset($_POST['mat'])) {
		$ctrldatos->obtAlumno($_POST['mat']);
	}


	class ctrlDatos {

		private $infalumno;
		private $matricula;
		private $infalumnoenv;
		private $nivel;
		private $idgrupo;
		private $lic;
		private $coord;

		public function __construct() { //public function __construct($mat) {
			//$this->matricula = $mat;
		}

		public function obtAlumno($matricula) {
			$this->matricula = $matricula;
			$this->modeldatos = new modelDatos();
			if($this->modeldatos->findAlumno($this->matricula)) {
				$this->infalumno = array('alumno' => $this->modeldatos->getAlumno(), 'matricula' => $this->modeldatos->getMatricula(), 'grupo' => $this->modeldatos->getGrupo(), 'nivel' => $this->modeldatos->getNivel(), 'id_grupo' => $this->modeldatos->getId_grupo(),'coord' => $this->modeldatos->getCoordinador());
				$this->infalumnoenv = serialize($this->infalumno);
				$this->infalumnoenv = urlencode($this->infalumnoenv);
				$this->obtMaterias();
			}
			else {
				header("location: ../error.php?err=" . $this->matricula . "&s=ne");
			}
		}

		public function obtMaterias() {
			$this->modeldatos = new modelDatos();
			$materias = $this->modeldatos->findMaterias($this->matricula);
			if($materias > 0) {//RECIBE UN ARRAY
				$listamaterias = serialize($materias);
				$listamaterias = urlencode($listamaterias);
				header("location: ../datos.php?infalum=" . $this->infalumnoenv . "&lstmates=" .$listamaterias);
			} else {
				header("location: ../error.php?err=obtDatos&s=mat");
			}
		}

		public function loadEvaluacionesCompletas() {
			$this->modeldatos = new modelDatos(0);
			return $this->modeldatos->loadEvaluacionesCompletas();
		}

	}
?>

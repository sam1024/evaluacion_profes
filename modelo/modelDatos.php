<?php
	include 'modelDB.php';

	class modelDatos{

		private $id;
		private $periodo;
		private $grupo;
		private $matricula;
		private $alumno;
		private $materia;
		private $profesor;
		private $nivel;
		private $coordinador;
		private $id_grupo;
		private $status;
		private $modeldb;
		private $user;
		private $pass;

		public function __construct() { }

		public function getId(){
			return $this->id;
		}

		public function getPeriodo(){
			return $this->periodo;
		}

		public function getGrupo(){
			return $this->grupo;
		}

		public function setGrupo($grupo) {
			$this->grupo = $grupo;
		}

		public function getMatricula(){
			return $this->matricula;
		}

		public function setMatricula($matri) {
			return $this->matricula = $matri;
		}

		public function getAlumno(){
			return $this->alumno;
		}

		public function setAlumno($alumno) {
			$this->alumno = $alumno;
		}

		public function getMateria(){
			return $this->materia;
		}

		public function setMateria($materia) {
			$this->materia = $materia;
		}

		public function getProfesor(){
			return $this->profesor;
		}

		public function setProfesor($profesor) {
			$this->profesor = $profesor;
		}

		public function getNivel(){
			return $this->nivel;
		}

		public function setNivel($nivel) {
			$this->nivel = $nivel;
		}

		public function getCoordinador(){
			return $this->coordinador;
		}

		public function setCoordinador($coord) {
			$this->coordinador = $coord;
		}

		public function getId_grupo(){
			return $this->id_grupo;
		}

		public function setId_grupo($id_grupo) {
			$this->id_grupo = $id_grupo;
		}

		public function getStatus(){
			return $this->status;
		}

		public function findAlumno($matricula) {
			$enc = FALSE;
			$this->matricula = $matricula;
			$query = "SELECT matricula,alumno,grupo,nivel,id_grupo,coordinador FROM datos WHERE matricula=" . $this->matricula;
			$this->modeldb = new modelDB();
			if($datos_alumno = $this->modeldb->findAlumno($query)) {
				$this->setMatricula($datos_alumno['matricula']);
				$this->setAlumno($datos_alumno['alumno']);
				$this->setGrupo($datos_alumno['grupo']);
				$this->setNivel($datos_alumno['nivel']);
				$this->setId_grupo($datos_alumno['id_grupo']);
				$this->setCoordinador($datos_alumno['coordinador']);
				$enc = TRUE;
			}
			return $enc;
		}

		public function validaUser($user, $pass) {
			$this->modeldb = new modelDB();
			return $this->modeldb->validaUser($user, $pass);
		}

		public function findMaterias($matricula){
			$this->matricula = $matricula;
			$query = "SELECT materia,profesor FROM datos WHERE matricula=" . $this->matricula . " AND status=0 ORDER BY materia";
			$this->modeldb = new modelDB();
			return $this->modeldb->findMaterias($query); //RECIBE UN ARREGLO DE DATOS
		}

		public function loadEvaluacionesCompletas() {
			$model_db = new modelDB();
			return $model_db->loadEvaluacionesCompletas();
		}

	}
?>

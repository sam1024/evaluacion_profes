<?php

	@session_start();

	class modelDB{

		private $conex;


		public function __construct(){
			try{
				//$this->conex = new PDO("mysql:host=localhost;dbname=evaluacion", "root", "WebAdmyn=1024", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));// SET NAMES utf8 ESTABLECE LA CODIFICACION PARA QUE SE VEAN LAS COMAS Y LAS Ñ
				$this->conex = new PDO("mysql:host=192.168.71.125; dbname=evaluacion", "root", "WebAdmyn=1024");//, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));// SET NAMES utf8 ESTABLECE LA CODIFICACION PARA QUE SE VEAN LAS COMAS Y LAS Ñ
				$this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conex->exec("SET CHARACTER SET utf8");
			} catch (PDOException $ex){
				header("location: ../error.php?err=".$ex->getMessage()."&s=conn");
			}
		}

		public function findAlumno($query) {
			$res = $this->conex->query($query);
			return $res->fetch();
		}

		public function findMaterias($query){
			$res = $this->conex->prepare($query);
			$res->execute();
			return $resutl = $res->fetchAll();
		}

		public function saveRespuestas($query, $upddatos, $updcuestionario) {
			$res = $this->conex->prepare($query);
			$res->execute();
			if($this->conex->lastInsertId() != 0) {
				if($updcuestionario != null) {
					$this->conex->exec($updcuestionario);
				}
				return $this->conex->exec($upddatos);
			} else {
				return 0;
			}
		}

		public function saveUsers($name, $id_area, $nick, $pass) {
      $this->conex->prepare("INSERT INTO usuarios(nombre, id_area, user, pass) VALUES(?, ?, ?, ?)");
      $query->execute(array($name, $id_area, $nick, $pass));
			return $query->fetchAll();
    }

		public function validaUser($user, $pass) {
			$query = $this->conex->prepare("SELECT nombre, id_area FROM usuarios WHERE user = ? AND pass = ?");
      $query->execute(array($user, $pass));
      return $query->fetchAll();
		}

		public function loadEvaluacionesCompletasUni() {
			$status = 1;
			$query = $this->conex->prepare("SELECT  matricula, alumno, id_grupo, materia, licenciatura, profesor, coordinador, p1, " .
			         "p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18a, p18b, p18c, p18d, p18e, p18f, " .
							 "p18g, p18h, p18i, p19a, p19b, p19c, p19d, p19e, p19f, p19g, p19coment, p20, observaciones  FROM  cuestionario_uni " .
							 "WHERE status = ? order by matricula");
			$query->execute(array($status));
			return $query->fetchAll();
		}

		public function loadEvaluacionesInCompletasUni() {
			$nivel = 'prepa';
			$status = 0;
			$query = $this->conex->prepare("SELECT alumno, matricula, id_grupo, materia, nivel FROM datos WHERE nivel <> ? AND " .
			         "status = ? ORDER BY alumno");
			$query->execute(array($nivel, $status));
			return $query->fetchAll();
		}

		public function loadEvaluacionesCompletasPrepa() {
			$status = 1;
			$query = $this->conex->prepare("SELECT  grupo, matricula, alumno, materia, profesor, p1, p2, p3, p4, p5, p6, p7, p8, " .
							 "p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, " .
							 "observaciones  FROM cuestionario_prepa  WHERE status=1 order by matricula");
			$query->execute(array($status));
			return $query->fetchAll();
		}

		public function loadEvaluacionesInCompletasPrepa() {
			$nivel = 'prepa';
			$status = 0;
			$query = $this->conex->prepare("SELECT alumno, matricula, grupo, materia FROM datos WHERE nivel = ? AND " .
			         "status = ? ORDER BY alumno");
			$query->execute(array($nivel, $status));
			return $query->fetchAll();
		}

		public function updStatus($query) {
			$res = $this->conex->prepare($query);
			return $res->exec($query);
		}

		public function __destruct() {}
	}
?>

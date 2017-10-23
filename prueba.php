<?php
	include 'insertar.php';
	$p = new prueba(null, null);
	//$p->show();
	$p->obt();
	class prueba {
		
		private $alumno;
		private $materia;
		private $pru;
		
		public function __construct($a, $mate) {
			$this->alumno = $a;
			$this->materia = $mate;
		}
		
		public function getAlumno() {
			return $this->alumno;
		}
		
		public function getMateria() {
			return $this->materia;
		}
		
		public function show() {
			//$a = ["alumno" => "sam", "grupo" => "1024", "materia" => "Progra", "alumno" => "sam", "grupo" => "1024", "materia" => "DB"];
			$a = ["alumno" => "sam", "materia" => "Progra", "alumno" => "sam", "materia" => "DB"];
			foreach ($a as $key=>$val) {
			//for($i = 0; $i < count($a); $i++) {
//				$this->pru = new prueba($key['c1'], $key['c2']);
//				$this->pru = new prueba($a['c1'], $a['c2']);
				$this->pru = new prueba($val, $val);
				echo "Alumno: " . $this->pru->getAlumno() . "<br />";
				echo "Materia: " . $this->pru->getMateria() . "<br />";
				//echo $key .": " . $val . "<br />";	
			}
		}
		
		public function obt() {
			$in = new insertar();
			$inf = $in->selecciona();
			echo "<h1>DESDE PRUEBA.PHP soy tonto</h1>
				  <br /> tamaño: " . count($inf) . "<br />";			
			//foreach ($inf as $row) {
			for($i = 0; $i < 7; $i++) {
				echo 'nombre: '.$row['nombre'].'<br/>';
				echo 'email: '.$row['correo'].'<br/>';
			}
		}
	}
?>
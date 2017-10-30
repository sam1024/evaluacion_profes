<!--link rel="stylesheet" href="../css/exportar.css"-->
<?php

  include('../controlador/ctrlDatos.php');

  /**** CABECERAS NECESARIAS PARA EXPORTAR A EXCEL ****/
  header('Content-type: application/vnd.ms-excel; charset=UTF-8');
  header('Content-Disposition: attachment; filename=reporte.xls');
  header('Pragma: no-cache');
  header('Expires: 0');
  /**** FIN CABECERAS NECESARIAS PARA EXPORTAR A EXCEL ****/

  $exportar = new Exportar($_POST['id_area'], $_POST['completas']);

  class Exportar {

    private $id_area;
    private $completas;

    function Exportar($id_area, $completas) {
        $this->id_area = $id_area;
        $this->completas = $completas;
        if (($id_area == 1) && ($completas == 1)) {
          $this->evaCompletasUni();
        } else if (($id_area == 1) && ($completas == 0)) {
          $this->evaIncompletasUni();
        } else if(($id_area == 2) && ($completas == 1)) {
          $this->evaCompletasPrepa();
        } else if (($id_area == 2) && ($completas == 0)) {
          $this->evaInCompletasPrepa();
        }
    }

    private function evaCompletasUni() {
      $this->ctrl_datos = new ctrlDatos();
      if (count($this->ctrl_datos->loadEvaluacionesCompletasUni()) == 0) {
        echo "NO ENCONTRE DATOS!!!";
      } else {
        echo "<p class='p_aviso'>ALUMNOS QUE YA REALIZARÓN LA EVALUACIÓN</p>";
        echo "<table id='tabla_datos'>
              <thead>
                <tr>
                  <th>MATRICULA</th><th>ALUMNO</th><th>ID GRUPO</th><th>MATERIA</th><th>LICENCIATURA</th><th>PROFESOR</th>
                  <th>COORDINADOR</th><th>PREGUNTA 1</th><th>PPREGUNTA 2</th><th>PREGUNTA 3</th><th>PREGUNTA 4</th><th>PREGUNTA 5</th>
                  <th>PREGUNTA 6</th><th>PREGUNTA 7</th><th>PREGUNTA 8</th><th>PREGUNTA 9</th><th>PREGUNTA 10</th><th>PREGUNTA 11</th>
                  <th>PREGUNTA 12</th><th>PREGUNTA 13</th><th>PREGUNTA 14</th><th>PREGUNTA 15</th><th>PREGUNTA 16</th><th>PREGUNTA 17</th>
                  <th>PREGUNTA 18A</th><th>PREGUNTA 18B</th><th>PREGUNTA 18C</th><th>PREGUNTA 18D</th><th>PREGUNTA 18E</th>
                  <th>PREGUNTA 18F</th><th>PREGUNTA 18G</th><th>PREGUNTA 18H</th><th>PREGUNTA 18I</th><th>PREGUNTA 19A</th>
                  <th>PREGUNTA 19B</th><th>PREGUNTA 19C</th><th>PREGUNTA 19D</th><th>PREGUNTA 19E</th><th>PREGUNTA 19F</th>
                  <th>PREGUNTA 19G</th><th>PREGUNTA 19COMENT</th><th>PREGUNTA 20</th><th>OBSERVACIONES</th>
                </tr>
              </thead>
            <tbody>";
            foreach ($this->ctrl_datos->loadEvaluacionesCompletasUni() as $key => $value) {
                echo "<tr>
                  <td>" . $value['matricula'] . "</td><td>" . $value['alumno'] . "</td><td>" . $value['id_grupo'] . "</td>" .
                  "<td>" . $value['materia'] . "</td><td>" . $value['licenciatura'] . "</td><td>" . $value['profesor'] . "</td>" .
                  "<td>" . $value['coordinador'] . "</td><td>" . $value['p1'] . "</td><td>" . $value['p2'] . "</td><td>" . $value['p3'] . "</td>" .
                  "<td>" . $value['p4'] . "</td><td>" . $value['p5'] . "</td><td>" . $value['p6'] . "</td><td>" . $value['p7'] . "</td>" .
                  "<td>" . $value['p8'] . "</td><td>" . $value['p9'] . "</td><td>" . $value['p10'] . "</td><td>". $value['p11'] . "</td>" .
                  "<td>" . $value['p12'] . "</td><td>" . $value['p13'] . "</td><td>" . $value['p14'] . "</td><td>" . $value['p15'] . "</td>" .
                  "<td>" . $value['p16'] . "</td><td>" . $value['p17'] . "</td><td>" . $value['p18a'] . "</td><td>" . $value['p18b'] . "</td>" .
                  "<td>" . $value['p18c'] . "</td><td>" . $value['p18d'] . "</td><td>" . $value['p18e'] . "</td><td>" . $value['p18f'] . "</td>" .
                  "<td>" . $value['p18g'] . "</td><td>" . $value['p18h'] . "</td><td>" . $value['p18i'] . "</td><td>" . $value['p19a'] . "</td>" .
                  "<td>" . $value['p19b'] . "</td><td>" . $value['p19c'] . "</td><td>" . $value['p19d'] . "</td><td>" . $value['p19e'] . "</td>" .
                  "<td>" . $value['p19f'] . "</td><td>" . $value['p19g'] . "</td><td>" . $value['p19coment'] . "</td>" .
                  "<td>" . $value['p20'] . "</td><td>" . $value['observaciones'] . "</td></tr>";
            }
            echo "</tbody>
              </table>";
      }
    }

    private function evaIncompletasUni() {
      $this->ctrl_datos = new ctrlDatos();
      if (count($this->ctrl_datos->loadEvaluacionesInCompletasUni()) == 0) {
        echo "NO ENCONTRE DATOS!!!";
      } else {
        echo "<p class='p_aviso'>ALUMNOS PENDIENTES DE EVALUAR</p>";
        echo "<table id='tabla_datos'>
              <thead>
                <tr>
                  <th>ALUMNO</th><th>MATRICULA</th><th>ID GRUPO</th><th>MATERIA</th><th>LICENCIATURA</th>
                </tr>
              </thead>
            <tbody>";
        foreach ($this->ctrl_datos->loadEvaluacionesInCompletasUni() as $key => $value) {
          echo "<tr>
                  <td>" . $value['alumno'] . "</td><td>" . $value['matricula'] . "</td><td>" . $value['id_grupo'] . "</td>" .
                  "<td>" . $value['materia'] . "</td><td>" . $value['nivel'] . "</td></tr>";
        }
        echo "</tbody>
            </table>";
      }
    }

    private function evaCompletasPrepa() {
      $this->ctrl_datos = new ctrlDatos();
      if (count($this->ctrl_datos->loadEvaluacionesCompletasPrepa()) == 0) {
        echo "NO ENCONTRE DATOS!!!";
      } else {
          echo "<table id='tabla_datos'>
                <thead>
                  <tr>
                    <th>GRUPO</th><th>MATRICULA</th><th>ALUMNO</th><th>MATERIA</th><th>PROFESOR</th><th>PREGUNTA 1</th>
                    <th>PPREGUNTA 2</th><th>PREGUNTA 3</th><th>PREGUNTA 4</th><th>PREGUNTA 5</th>
                    <th>PREGUNTA 6</th><th>PREGUNTA 7</th><th>PREGUNTA 8</th><th>PREGUNTA 9</th><th>PREGUNTA 10</th><th>PREGUNTA 11</th>
                    <th>PREGUNTA 12</th><th>PREGUNTA 13</th><th>PREGUNTA 14</th><th>PREGUNTA 15</th><th>PREGUNTA 16</th><th>PREGUNTA 17</th>
                    <th>PREGUNTA 18</th><th>PREGUNTA 19</th><th>PREGUNTA 20</th><th>PREGUNTA 21</th><th>PREGUNTA 22</th>
                    <th>PREGUNTA 23</th><th>PREGUNTA 24</th><th>PREGUNTA 25</th><th>PREGUNTA 26</th><th>PREGUNTA 27</th>
                    <th>PREGUNTA 28</th><th>PREGUNTA 29</th><th>PREGUNTA 30</th><th>OBSERVACIONES</th>
                  </tr>
                </thead>
                <tbody>";
                foreach ($this->ctrl_datos->loadEvaluacionesCompletasPrepa() as $key => $value) {
                  echo "<tr>
                    <td>" . $value['grupo'] . "</td><td>" . $value['matricula'] . "</td><td>" . $value['alumno'] . "</td>" .
                    "<td>" . $value['materia'] . "</td><td>" . $value['profesor'] . "</td><td>" . $value['p1'] . "</td><td>" . $value['p2'] . "</td><td>" . $value['p3'] . "</td>" .
                    "<td>" . $value['p4'] . "</td><td>" . $value['p5'] . "</td><td>" . $value['p6'] . "</td><td>" . $value['p7'] . "</td>" .
                    "<td>" . $value['p8'] . "</td><td>" . $value['p9'] . "</td><td>" . $value['p10'] . "</td><td>". $value['p11'] . "</td>" .
                    "<td>" . $value['p12'] . "</td><td>" . $value['p13'] . "</td><td>" . $value['p14'] . "</td><td>" . $value['p15'] . "</td>" .
                    "<td>" . $value['p16'] . "</td><td>" . $value['p17'] . "</td><td>" . $value['p18'] . "</td><td>" . $value['p19'] . "</td>" .
                    "<td>" . $value['p20'] . "</td><td>" . $value['p21'] . "</td><td>" . $value['p22'] . "</td><td>" . $value['p23'] . "</td>" .
                    "<td>" . $value['p24'] . "</td><td>" . $value['p25'] . "</td><td>" . $value['p26'] . "</td><td>" . $value['p27'] . "</td>" .
                    "<td>" . $value['p28'] . "</td><td>" . $value['p29'] . "</td><td>" . $value['p30'] . "</td><td>" . $value['observaciones'] . "</td></tr>";
                }
              echo "</tbody>
            </table>";
        }
    }

    private function evaInCompletasPrepa() {
      $this->ctrl_datos = new ctrlDatos();
      if (count($this->ctrl_datos->loadEvaluacionesInCompletasPrepa()) == 0) {
        echo "NO ENCONTRE DATOS!!!";
      } else {
        echo "<p class='p_aviso'>ALUMNOS PENDIENTES DE EVALUAR</p>";
        echo "<table id='tabla_datos'>
              <thead>
                <tr>
                  <th>ALUMNO</th><th>MATRICULA</th><th>GRUPO</th><th>MATERIA</th>
                </tr>
              </thead>
            <tbody>";
        foreach ($this->ctrl_datos->loadEvaluacionesInCompletasPrepa() as $key => $value) {
          echo "<tr>
                  <td>" . $value['alumno'] . "</td><td>" . $value['matricula'] . "</td><td>" . $value['grupo'] . "</td>" .
                  "<td>" . $value['materia'] . "</td></tr>";
        }
      echo "</tbody>
          </table>";
      }
    }

  }
?>

<!--style media="screen">
body { margin: 0; }

.p_aviso { display: none; }

table { border-collapse: collapse; }

table, th, td { border: 2px solid black; }

thead { background-color: #1f4f82; border-bottom-color: #1f4f82; color: #fff; }
</style>
<div class="tabla"></div-->

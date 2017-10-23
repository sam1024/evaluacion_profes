<?php

  include('../controlador/ctrlDatos.php');

  $tabla = new Tabla($_POST['id_area']);
  $tabla->pintaPagina();

  class Tabla
  {

    private $id_area;
    private $ctrl_datos;

    function __construct($id_area)
    {
      $this->id_area = $id_area;
    }

    public function pintaPagina() {
      if ($this->id_area == 1) {
        $this->ctrl_datos = new ctrlDatos();
      }
      echo "<section>
        <div class='container'>
          <table>
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
            if (count($this->ctrl_datos->loadEvaluacionesCompletas()) == 0) {
              echo "NO ENCONTRE DATOS!!!";
            } else {
              foreach ($this->ctrl_datos->loadEvaluacionesCompletas() as $key => $value) {
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
                  "<td>" . $value['p20'] . "</td><td>" . $value['observaciones'] . "</td>";
              }
            }
      echo "</tbody>
          </table>
        </div>
      </section>";
    }

  }

?>

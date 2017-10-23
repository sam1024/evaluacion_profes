<!DOCTYPE html>
<?php

  $principal = new Principal(1);
  $principal->pintaPagina();

  class Principal
  {

    private $id_area;

    function __construct($id_area)
    {
      $this->id_area = $id_area;
    }

    public function pintaPagina() {
      echo "<html lang='es'>
        <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, user-scalable=no'>
          <link rel='stylesheet' href='../css/reports-principal.css'>
          <title>Reporte evaluación a cursos</title>
        </head>
        <body>
          <section>
            <header>
              <div class='container'>
                <div class='div_img'>
                  <img src='../img/Logo_horizontal.svg' alt='logo'>
                </div>
                <p>Evaluación a cursos</p>
              </div>
              <nav>
                <div id='container'>
                  <div class='imgs' id='div_uni'>
                    <p>Completas</p>
                  </div>
                  <div class='imgs' id='div_prepa'>
                    <p>Faltantes</p>
                  </div>
                  <div class='imgs' id='div_prepa'>
                    <p>Exportar</p>
                  </div>
                </div>
              </nav>
            </header>
          </section>
          <main id='main_tabla'>
          </main>
          <input type='hidden' name='id_area' id='id_area' value='$this->id_area'>
          <script type='text/javascript' src='../js/jquery.min.2.1.3.js'></script>
          <script type='text/javascript' src='../js/reports_principal.js'></script>
        </body>
      </html>";
    }

  }

?>

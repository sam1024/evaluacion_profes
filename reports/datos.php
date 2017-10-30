<!DOCTYPE html>
<?php

  @session_start();
  if(!isset($_SESSION['id_area'])) {
    header("location: index.html");
  }

  $principal = new Principal($_SESSION['id_area']);
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
          <link rel='stylesheet' href='../css/reports-datos.css'>
          <title>Reporte evaluación a cursos</title>
        </head>
        <body>
          <section id='section_header'>
            <header>
              <div class='container'>
                <div class='div_img'>
                  <img src='../img/Logo_horizontal.svg' alt='logo'>
                </div>
                <p>Evaluación a cursos</p>
                <p class='p_cerrar_sesion'><a href='salir.php' id='link_close_session'>Cerrar sesión</a></p>
              </div>
              <nav>
                <div id='container'>
                  <div class='imgs' id='completas'>
                    <button class='btns'>Completas</button>
                  </div>
                  <div class='imgs' id='faltantes'>
                    <button class='btns'>Faltantes</button>
                  </div>
                  <div class='imgs' id='exportar'>
                    <form method='POST' action='exportar.php'>
                      <input type='hidden' name='id_area' id='id_area' value='$this->id_area'>
                      <input type='hidden' name='completas' id='h_completas' value=''>
                      <button class='btns'>Exportar</button>
                    </form>
                  </div>
                </div>
              </nav>
            </header>
          </section>
          <main id='main_tabla'>
            <section><div class='container' id='div_container'></div></section>
          </main>
          <script type='text/javascript' src='../js/jquery.min.2.1.3.js'></script>
          <script type='text/javascript' src='../js/reports_principal.js'></script>
        </body>
      </html>";
    }

  }

?>

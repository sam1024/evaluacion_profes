<?php

  include ('../modelo/modelDatos.php');

  $valida = new Valida($_POST['user'], $_POST['pass']);
  $valida->validaUser();

  class Valida
  {

    private $user;
    private $pass;
    private $pass_encriptado;

    function __construct($user, $pass) {
      $this->user = $user;
      $this->pass = $pass;
    }

    public function validaUser() {
      $model_datos = new modelDatos();
      $this->pass_encriptado = sha1($this->pass);
      if(count($model_datos->validaUser($this->user, $this->pass_encriptado)) != 0) {
        foreach ($model_datos->validaUser($this->user, $this->pass_encriptado) as $key => $value) {
          $_SESSION['id_area'] = $value['id_area'];
          $_SESSION['nombre'] = $value['nombre'];
        }
        header("location: ../reports/datos.php");
      } else {
        echo "<div style='border: 4px solid red; border-radius: 5px; width: 600px; text-align: center; padding: 20px 20px 30px 20px; margin: 150px auto;'>
                <p style='font-size: 20px; font-weight: bold; margin: 20px 0 50px 0;'>LOS DATOS DE INICIO DE SESIÓN NO SON VALÍDOS</p>
                <a style='text-decoration: none; color: #fff; border: 1px solid; padding: 15px; background-color: #1f4f82; border-color: #1f4f82;
                          font-size: 18px;' href='../reports/index.html'>INTENTAR DE NUEVO</a>
              </div>";
      }
    }
  }

?>

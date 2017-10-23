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
          echo "Nombre: " . $value['nombre'] . "<br />" . "Id Area: " . $value['id_area'];
        }
      } else {
        echo "No puedes pasar";
      }
    }
  }

?>

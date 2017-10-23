<?php

  include('../modelo/modelDB.php');

  /*$alta_users = new AltaUsers("Samuel Arizmendi Abundis", 1, "sam", sha1("AdminDB12"));
  $alta_users = new AltaUsers("Daniel Salgado", 1, "daniela", sha1("Danielas1"));
  $alta_users = new AltaUsers("Mayra Miranda Beatriz", 1, "mayra", sha1("Mayram"));
  $alta_users = new AltaUsers("Juan Jose Menera Gamboa", 1, "juan", sha1("jjmenera"));*/
  $alta_users->saveUsers();

  class AltaUsers
  {

    private $name;
    private $id_area;
    private $nick;
    private $pass;
    private $conexion;
    private $query;

    function __construct($name, $id_area, $nick, $pass)
    {
      $this->name = $name;
      $this->id_area = $id_area;
      $this->nick = $nick;
      $this->pass = $pass;
      $this->model_db = new modelDB();
    }

    public function saveUsers() {
      $this->model_db->saveUsers($this->name, $this->id_area, $this->nick, $this->pass);
      echo "$this->name, $this->id_area, $this->nick, $this->pass";
      /*$this->query = $this->conexion->prepare("INSERT INTO usuarios(nombre, id_area, user, pass) VALUES(?, ?, ?, ?)");
      if($this->query->execute(array($this->name, $this->id_area, $this->nick, $this->pass))) {
        //$this->msj = "El usuario: $nick ha sido agregado de manera exitosa";
        exit;
      } else {
        //$this->msj = "No puede agregar los datos del usuario: $nick";
        exit;
      }*/
    }

  }

?>

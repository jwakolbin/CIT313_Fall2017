<?php

class User extends Model {

  public function __construct($role,$id)  {
    parent::__construct($id);
    $this-> user_id="jwakolbi";
    $this-> role= "Admin";
  }


  public function __set($name,$value) {
    $this->$name = $value;
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __destruct() {

  }

  function getName() {
    return array (
      'user_Id' => 'jwakolbi',
      'firstname' => 'Jennifer',
      'lastname' => 'Wakolbinger',
      'email' => 'jwakolbi@iupui.edu',
      'role' => 'admin'

    );
  }





  }



 ?>

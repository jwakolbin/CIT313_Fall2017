<?php
abstract class Model {

  protected $user_id;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $role;


  public function __construct($id) {
         $this->user_id=$id;
  }

  public function __set($name, $value) {

  }

  public function __get($name){

  }

  public function __destruct() {

  }


}

 ?>

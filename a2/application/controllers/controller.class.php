<?php
class Controller {

  public $user;
  public $load;


  function __construct() {
    $this-> user = new User("Admin","jwakolbi");
    $this-> load = new Load();
    $this->home();
  }


function home() {

  $data = $this->user->getName();

  $this->load->view('view.php',$data);

}


}
 ?>

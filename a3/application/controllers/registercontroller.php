<?php

class RegisterController extends Controller{

	public $userObject;

	public function defaultTask(){

		$this->userObject = new User();
		$this->set('task', 'add');


	}

	public function add(){

			$this->userObject = new User();

			$data = array('fname'=>$_POST['post_fname'], 'lname'=>$_POST['post_lname'], 'email'=>$_POST['post_email'], 'password'=>$_POST['post_password'],);


			$result = $this->userObject->addPost($data);

			$this->set('message', $result);


	}

	public function edit($pID){

			$this->userObject = new User();

			$user = $this->userObject->getUser($pID);

			$this->set('uID', $post['uID']);
			$this->set('fname', $post['fname']);
			$this->set('lname', $post['lname']);
			$this->set('email', $post['email']);
			$this->set('password', $post['password']);
			$this->set('task', 'update');


	}


}

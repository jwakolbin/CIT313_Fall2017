<?php
class User extends Model{

	function getUser($email){

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users WHERE email = ?';

		// perform query
		$results = $this->db->getrow($sql, array($email));

		$user = $results;

		return $user;

	}

	public function getAllUsers($limit = 0){

		if($limit > 0){

			$numusers = ' LIMIT '.$limit;
		}

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users'.$numusers;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;

	}

	public function addUser($data){

		$uID = $_POST["post_uID"];
		$email = $_POST["post_email"];
		$password = $_POST['post_password'];
		$fname = $_POST['post_fname'];
		$lname = $_POST['post_lname'];

		$sql="INSERT INTO users (email, password, first_name, last_name) VALUES (?,?)";
		/* $sql="INSERT INTO users (email, password, first_name, last_name) VALUES ('".$email."','".$password."','".$fname."','".$lname."')"; */
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;

	}

	/* public function updatePost($data) {

		$sql='UPDATE posts (title,content,date) VALUES (?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;

	} */


}

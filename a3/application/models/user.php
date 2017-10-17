<?php
class User extends Model{

	function getUser($uID){

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($p=uID));

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

		$sql='INSERT INTO users (uID, email, password, first_name, last_name) VALUES (?,?)';
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

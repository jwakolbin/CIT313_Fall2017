<?php
class User extends Model{

	function getPost($uID){

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));

		$user = $results;

		return $user;

	}

	public function getAllUser($limit = 0){

		if($limit > 0){

			$numusers = ' LIMIT '.$limit;
		}

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users'.$numusers;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$user[] = $row;
		}

		return $user;

	}

	public function addPost($data){

		$sql='INSERT INTO posts (first_name, last_name, email, password) VALUES (?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;

	}




}

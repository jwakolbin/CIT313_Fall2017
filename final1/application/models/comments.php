<?php
class Comments extends Model{

	function getComments($commentID){
			$sql = 'SELECT commentID, uID, commentText, date, postID FROM comments WHERE $pID = ?';
			$results = $this->db->getrow($sql, array($commentID));

			$comment = $results;

			return $comment;
	}


	public function getAllComments($limit = 0){

			if($limit > 0){

					$numcomments = ' LIMIT '.$limit;
			}

			$sql =  'SELECT commentID, uID, commentText, date, postID FROM comments'.$numcomments;

			// perform query
			$results = $this->db->execute($sql);

			while ($row=$results->fetchrow()) {
					$comments[] = $row;
			}

			return $comments;
	}


	public function addComment($data){

			$sql='INSERT INTO comments (date, commentText, postID, uID) VALUES (?,?,?,?)';
			$this->db->execute($sql,$data);
			$message = 'Comment added.';
			return $message;

	}

}

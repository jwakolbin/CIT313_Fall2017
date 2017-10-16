<?php

//$title = $_POST['post_title'];
//$content = $_POST['post_content'];



class AddPostController extends Controller{

	public $postObject;



	public function defaultTask(){

		$this->postObject = new Post();
		$this->set('task', 'add');


	}

	public function add(){

			$this->postObject = new Post();

			$data = array('date'=>date("Y-m-d H:i:s"),  'title'=>$_POST['post_title'], 'content'=>$_POST['post_content']);

			//'date'=>$_POST[STR_TO_DATE('$date', '%m/%d/%Y');

			$result = $this->postObject->addPost($data);

			$this->set('message', $result);


	}

	public function edit($pID){

			$this->postObject = new Post();

			$post = $this->postObject->getPost($pID);

			$this->set('date', date("Y-m-d H:i:s"));
			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('task', 'update');


	}

	/* function update_post($pID, $title, $contents, $date) {
	     {
	        // Bind named parameters
	        $update = $this->db->prepare("UPDATE posts SET title = :title, contents = :contents WHERE id = :id");
	        // Pass the values in an array to execute()
	        $update->execute(array(':title' => $title, ':contents' => $contents, ':pID' => $px, ':date'=> $date));
	    }
} */
}

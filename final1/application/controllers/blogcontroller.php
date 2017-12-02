<?php

class BlogController extends Controller{

	public $postObject;

   	public function post($pID){
        $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);
   	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

	public function comment(){
			$this->postObject = new Comments();
			$comment = $this->postObject->getComments();
		$this->set('comment',$comment);
	}

	public function addComment(){
	$this->postObject = new Comments();
	$this->set('task', 'save');
	}

	public function saveComment(){

		$this->postObject = new Comments();

		$data = array('commentText'=>$_POST['commentText'], 'uID'=>$_POST['uID'],'postID'=>$_POST['postID'],'date'=>date("Y-m-d H:i:s"));

		//'date'=>$_POST[STR_TO_DATE('$date', '%m/%d/%Y');

		$result = $this->postObject->addComment($data);

		$this->set('message', $result);
		}


}

?>

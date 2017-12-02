<?php

class BlogController extends Controller{

	public $postObject;
	public $commentObject;


   	public function post($pID){
    $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  $this->set('post',$post);

		$this->commentObject = new Comments();
		$comments = $this->commentObject->getAllComments();
		$this->set('comments',$comments);

		$this->set('task', 'save');
   	}

		public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
		}

/*
		public function comment($commentID){
    $this->postObject = new Comments();
		$post = $this->postObject->getComment($commentID);
	  $this->set('comment',$comment);
   	}

		public function comments(){
		$this->commentObject = new Comments();
		$comments = $this->commentObject->getAllComments();
		$this->set('comments',$comments);
		}
		*/

	public function add(){
	$this->commentObject = new Comments();
	$this->set('task', 'save');

	$this->commentObject = new Comments();
	$comments = $this->commentObject->getAllComments();
	$this->set('comments',$comments);

	$this->set('task', 'save');
	}


	public function save(){

	$this->commentObject = new Comments();
	$data = array('commentText'=>$_POST['commentText'], 'uID'=>$_POST['uID'],'postID'=>$_POST['postID'],'date'=>$_POST['date']);

		//'date'=>$_POST[STR_TO_DATE('$date', '%m/%d/%Y');

		$result = $this->commentObject->addComment($data);

		$this->set('message', $result);
		}

		public function delete($commentID){
			$this->commentObject = new Comment();
			$post = $this->commentObject->getComment($commentID);

			$this->set('commentID', $post['commentID']);
			$this->set('commentText', $post['commentText']);
			$this->set('uID', $post['uID']);
			$this->set('postID', $post['postID']);
			$this->set('date', $post['date']);
			$this->set('task', 'update');
			}

			public function update(){
				$data = array('commentText'=>$_POST['commentText'], 'uID'=>$_POST['uID'],'postID'=>$_POST['postID'],'date'=>$_POST['date'], 'commentId'=>$_POST['commentID']);

				$this->postObject = new Post();

				$result = $this->commentObject->updatePost($data);
				$outcome = $this->commentObject->getAllComments();
				$this->set('comments',$outcome);
				$this->set('message', $result);
				$this->set('task', 'update');
			}


}

?>

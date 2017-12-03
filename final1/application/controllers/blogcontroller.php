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
   	}

		public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
		}

	public function add(){
	$this->commentObject = new Comments();
	$comments = $this->commentObject->getAllComments();
	$this->set('comments',$comments);

	$this->set('task', 'save');
	}


	public function save(){

	$this->commentObject = new Comments();
	$data = array('commentText'=>$_POST['commentText'], 'uID'=>$_POST['uID'],'date'=>$_POST['date'],'postID'=>$_POST['postID']);

		//'date'=>$_POST[STR_TO_DATE('$date', '%m/%d/%Y');

		$result = $this->commentObject->addComment($data);

		$this->set('message', $result);
	}

		public function delete($commentID){
			$this->commentObject = new Comments();
			$post = $this->commentObject->getComment($commentID);

			$this->set('commentID', $post['commentID']);
			$this->set('uID', $post['uID']);
			$this->set('commentText', $post['commentText']);
			$this->set('date', $post['date']);
			$this->set('postID', $post['postID']);
			$this->set('task', 'update');
			}

			public function update(){
				$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'],'postID'=>$_POST['postID'],'commentId'=>$_POST['commentID']);

				$this->postObject = new Comments();

				$result = $this->commentObject->updateComment($data);
				$outcome = $this->commentObject->getAllComments();
				$this->set('comments',$outcome);
				$this->set('message', $result);
				$this->set('task', 'update');
			}


}

?>

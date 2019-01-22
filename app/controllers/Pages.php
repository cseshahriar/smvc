<?php 

/**
 * default controller 
 */
class Pages extends Controller
{
	
	function __construct() 
	{
		// the constructore 
		$this->postModel = $this->model('Post'); // load model 
	}

	// default method must have 
	public function index() 
	{
		$posts = $this->postModel->getPosts();   
		$data = [
			'title' => 'Welcome', 
			'posts' => $posts  
		]; 
		$this->view('pages/index', $data);         
	}

	public function about()
	{
		$data = [
			'title' => 'About'
		];
		$this->view('pages/about', $data);    
	}
}
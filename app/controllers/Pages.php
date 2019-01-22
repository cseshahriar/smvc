<?php 

/**
 * default controller 
 */
class Pages extends Controller
{
	
	function __construct() 
	{
		// the constructore 
	}

	// default method must have 
	public function index() 
	{
		$data = [
			'title' => 'Index'
		];
		$this->view('pages/index', $data);       
	}

	public function about()
	{
		$this->view('pages/about');   
	}
}
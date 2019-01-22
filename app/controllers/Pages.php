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
		$this->view('welcome');   
	}

	public function about($id)
	{
		echo "About method "; 
	}
}
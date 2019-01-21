<?php 
/**
 * App core Class
 * Creates Urls & loads core controller
 * URL FROMAT - /controller/method/params
 */
class Core
{
	protected $currentController = 'Pages'; 
	protected $currentMethod = 'index';
	protected $params = [];

	function __construct()
	{
		//print_r($this->getUrl()); 
		$url = $this->getUrl(); 

		// Loking in controller for first value 
		if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
		 	// if exists
		 	$this->currentController = ucwords($url[0]); 
		 	// unsert zero index
		 	unset($url[0]); 
		 } 

		 // Require the controller
		 require_once '../app/controllers/'.$this->currentController.'.php';  

		 // instantiate controller class 
		 $this->currentController = new $this->currentController; 

	}

	public function getUrl()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url =filter_var($url, FILTER_SANITIZE_URL);    
			$url = explode('/', $url);
			return $url; 
		}
	}
}
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
		$this->getUrl(); 
	}

	public function getUrl()
	{
		echo $_GET['url'];
	}
}
<?php
/**
* 
*/
class Request { 
	public $url; // requested url
	public $service; // desired service 'data', 'prayertimes', 'qiblah' ... 
	public $params; // additional params

	function __construct() {
		$this->url = $_SERVER['PATH_INFO'];
	}
}
?>
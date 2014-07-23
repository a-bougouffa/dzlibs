<?php
/**
* 
*/
class Dispatcher {
	var $request;

	function __construct() {
		$this->request = new Request();
		Parser::parse($this->request->url, $this->request);
	}

	function error($msg) {
		header('Content-type: application/json');
		echo json_encode($msg);
	}
}
?>
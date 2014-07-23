<?php
/**
* 
*/
class Parser { 

	// static method to parse the given url and store it in $request
	static function parse($url, $request) {
		$url = trim($url, '/');
		$params = explode('/', $url);
		$request->service = $params[0];
		if (strtolower($request->service) == 'data') {
			if (isset($params[1])) {
				$request->table = $params[1];
			} else {
				//print all available resource names
			}
			

		}
		return true;
	}
}
?>
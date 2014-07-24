<?php
/**
* 
*/
class Parser { 
	define($APILVL, 0);

	// static method to parse the given url and store it in $request
	static function parse($url, $request) {
		$url = trim($url, '/');
		$params = explode('/', $url);
		$request->service = $params[$APILVL+0];
		if (strtolower($request->service) == 'data') {
			if (isset($params[$APILVL+1])) {
				$request->table = $params[$APILVL+1];
			} else {
				//print all available resource names
			}
			

		}
		return true;
	}
}
?>
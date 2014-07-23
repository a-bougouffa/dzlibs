<?php
$DZLIBS_API = array(
	'api'				=>	'dzlibs.io',
	'version'			=>	'0.1',
	'api-design'		=>	'Abdelhak BOUGOUFFA (@abougouffa) <abdelhak@cryptolab.net>',
	'idea'				=>	'Walid ZIOUCH (@01walid) <01walid@gmail.com>',
	'developpers'		=>	array(
								'Abdelhak BOUGOUFFA (@bougouffa)',
								'Collaborate! add your name here!'),
	'add-some-keys'		=>		'and some info');

header('Content-type: application/json');
echo json_encode($DZLIBS_API);
 ?>
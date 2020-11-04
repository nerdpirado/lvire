<?php 

/**
 * Name: API Codes CPanel
 * Version: 1.1, Last updated: 10/01/2017
 * Website: https://apicodes.com
 * Contact: Support@apicodes.com
 */ 

error_reporting(0);
include_once 'library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (isset($_POST['link'])) {
		
		$link = (!empty($_POST['link'])) ? $_POST['link'] : '';
		$poster = (!empty($_POST['poster'])) ? $_POST['poster'] : '';
		$label = (!empty($_POST['label'])) ? $_POST['label'] : '';
		
		$var = array();
		$var['link'] = trim($link);
		$var['poster'] = trim($poster);

		$varSub = array();
	
		$sub = $_POST['sub'];
		foreach ($sub as $key => $value) {
			if ($value != '') {
				$varSub[$label[$key]] = trim($value);
			}
			else $varSub['English'] = "";
		}
		$var['sub'] = $varSub;
		
		echo encode(json_encode($var));

	} else echo 'Error Isset!';
} else echo 'Error Request!';

?>
<?php
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
/**
* 
*/
class Wsc 
{
	
	public function __construct()
	{
		# code...
	}

	public function list_directories($dir = '.')
	{
		return scandir($dir,0);
	}
	public function response_json($array)
	{
		echo json_encode($array);
	}
}







$Action = $_GET['action'];
$Application = new Wsc(); 


if ($Action === 'scandir') {
	$directory = (isset($_GET['dir'])) ? $_GET['dir'] : '.';
	$Application->response_json($Application->list_directories($directory));
} else {
	echo "Nothing to do...!";
}



?>
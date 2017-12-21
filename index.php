<?php
public function list_directories($dir = '.')
{
	$dirs = [];
	if ($handle = opendir($dir)) {

	    while (false !== ($entry = readdir($handle))) {

	        if ($entry != "." && $entry != "..") {

	            $dirs[]  = $entry;
	        }
	    }

	    closedir($handle);
	}
	return scandir($dir,0);
}
public function response_json($array)
{
	echo json_encode($array);
}





$action = $_GET['action'];



if ($action === 'scandir') {
	$directory = (isset($_GET['dir'])) ? $_GET['dir'] : '.';
	response_json(list_directories($directory));
} else {
	echo "Nothing to do...!";
}



?>
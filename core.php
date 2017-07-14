<?php 

class File_Wizz {
 
function FFileRead($file)

{   
	error_reporting(0);
	$fp = fopen ($file, "r");
	$buffer = fread($fp, filesize($file));
	fclose ($fp);
	return $buffer;
}

function FFileWrite($file,$what)

{
	$fh=fopen($file,"a+"); 
	fwrite($fh,$what); 
	fclose($fh);
}

function ReadURL($url) {
error_reporting(0);
$base_url_m = "../wp-content/plugins/banner-wizz/";

if (fopen($url, "r")) {
$content_url = file_get_contents($url); 
} else  $content_url = $this -> FFileRead($base_url_m .'/templates/toolbar.html');
return $content_url;
}

}

function max_key($array) {
foreach ($array as $key => $val) {
    if ($val == max($array)) return $key;
    }
}



?>
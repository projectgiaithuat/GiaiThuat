<?php
function check_special(string $string_query){
	return preg_match("/[#$%^&*()+\-=\[\]{};':\\\|,<>\/?]/", $string_query);
}

function die_custom($string){
	die($string);
}
function alter($string){
	echo '<script language="javascript">';
	echo 'alert("'.$string.'")';
	echo '</script>';
}
function index(){
	echo'<a href="index.php"></a>';
	echo'<META http-equiv="refresh" content="0;URL=index.php">';
}
?>
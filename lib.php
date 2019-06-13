<?php
function checkSpeclia(string $string_query){
	return preg_match("/[#$%^&*()+\-=\[\]{};':\\\|,<>\/?]/", $string_query);
}

?>
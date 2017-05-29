<?php
function getConnexion()
{
	$mysqli = new Mysqli('localhost','root','','los_de_age');
	$mysqli->set_charset('utf8');
	return $mysqli;
}

?>
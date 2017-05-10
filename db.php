<?php
$host = "mysql.hostinger.co.uk";
$user = "u382819724_root";
$password = "1bib1996";
$db_name = "u382819724_root";

$db = new mysqli($host, $user, $password, $db_name);

function formatData($data)
{
	return date('g:i a', strtotime($data));
}
?>
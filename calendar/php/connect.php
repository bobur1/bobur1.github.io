<?php

// Make a MySQL Connection
$host="mysql.hostinger.co.uk";
$user="u382819724_root";
$password="1bib1996";
$db = "u382819724_root";

$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link, $db) or die(mysql_error());

?>

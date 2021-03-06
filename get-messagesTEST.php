<?php
include 'connect-mysql.php';

connectDB();

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}

$username = stripslashes(htmlspecialchars($_GET['username']));

$result = $db->prepare("SELECT * FROM Messages");
$result->bind_param("s", $username);
$result->execute();

$result = $result->get_result();
while ($r = $result->fetch_row()) {
	echo $r[1];
	echo "\\";
	echo $r[2];
	echo "\n";
}
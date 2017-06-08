<?php


$page = $_REQUEST['page'];

$servername = 'localhost';
$username 	= 'root';
$password 	= '';

// Create connection.
$conn = new mysqli($servername, $username, $password);

// Check if connection is valid.
if($conn->connect_error) {
	echo 'Connection Failed: ' . $conn->connect_error;
	exit;
}

echo 'Connected Successfuly!';

// Connect to the 'fitl' database.
$conn->select_db('fitl');

// Determine what page to show.

if ($page == 'show') {
	$id = $_REQUEST['id'];
	show($id);
} elseif ($page == 'create') {
	create();
}

// Load the show page.

function show ($id) {

	global $conn;

	$object = array();
	// Query to select the object.
	$sql = 'SELECT * FROM request WHERE id =' . $id;

	if(!$r = $conn->prepare($sql)){
		echo 'Prepare statement failed';
		die();
	}

	if(!$r->execute()) {
		echo 'Execute failed.';
		die();
	}

	$r = $r->get_result();

	if(!$r->num_rows) {
		echo 'No data found.';
		die();
	}

	$object = $r->fetch_assoc();

	// while ($d = $r->fetch_assoc()) {
	// 	$object[] = $d;
	// }

	$r->free();
	// echo '<pre>';
	// print_r($object);
	// echo '</pre>';

	// Load the view file.

	include 'request-show-view.php';
}

// Load the create function.

function create () {
	include 'request-create-view.php';
}



?>
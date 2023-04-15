<?php 
session_start();
include ('dumper.php');

try {
	$spec_dumper = Shuttle_Dumper::create(array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db_name' => 'spec',
	));

	$spec_dumper->dump('world.sql');

	$spec_dumper = Shuttle_Dumper::create(array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db_name' => 'spec',
	));

	$spec_dumper->dump('world.sql');
	$_SESSION['backup'] = true;
	header('location: ../views/admin.php?backup=true');
	exit;

} catch(Shuttle_Exception $e) {
	echo "Couldn't dump database: " . $e->getMessage();
}
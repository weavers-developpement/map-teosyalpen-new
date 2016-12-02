<?php

$results = file_get_contents("locations_backup.json");
$results = json_decode($results);
$data = json_decode(json_encode($results), True);

/*
foreach ($data as $i => $value) {
	echo $data[$i]['name'].'<br>';
	echo $data[$i]['address'].'<br>';
	echo $data[$i]['address2'].'2<br>';
	echo $data[$i]['city'].'<br>';
	echo $data[$i]['state'].'<br>';
	echo $data[$i]['postal'].'<br>';
	echo $data[$i]['phone'].'<br>';
	echo $data[$i]['email'].'<br>';
	echo $data[$i]['country'].'<br>';
	echo '<hr>';
}*/

if (function_exists('acf_add_local_field_group')) {

	foreach ($data as $i => $value) {
		echo 'insert:'.$data[$i]['ID'];
		acf_add_local_field_group(array(
			'title' => $data[$i]['name'],
			'fields' => array (
				'name' => $data[$i]['name'],
				'address' => $data[$i]['address'],
				'address2' => $data[$i]['address2'],
				'city' => $data[$i]['city'],
				'state' => '',
				'postal' => $data[$i]['postal'],
				'phone' => $data[$i]['phone'],
				'email' => $data[$i]['email'],
				'country' => $data[$i]['country'],
			)
		));
	}
} else {
	echo 'insert failure';
}
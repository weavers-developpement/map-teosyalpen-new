<?php

/*** Génération du fichier json des Docteurs ***/
try {
	$db_options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Force l'encodage en utf8
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Force le resultat des requetes en tableau associatif (clés textes)
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // Force l'affichage des erreurs (par defaut ERRMODE_SILENT)
    );
	$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, $db_options);
}
catch(Exception $e) {
	die('MySQL Error >> '.$e->getMessage());
}

/* Requête pour lister les posts 'docteurs' */
$post_status = 'publish';
$post_type = 'docteurs';
$query = $db->prepare ('SELECT ID, guid FROM wpmap_posts WHERE post_status = :post_status AND post_type = :post_type');
$query->bindValue(':post_status', $post_status, PDO::PARAM_STR);
$query->bindValue(':post_type', $post_type, PDO::PARAM_STR);
$query->execute();

$docteurs_posts_query = $query->fetchAll();
$docteurs_posts = array();

foreach ($docteurs_posts_query as $value) {
	array_push($docteurs_posts, $value['ID']);
}

//echo 'debug:';
/*echo '<pre>';
print_r($docteurs_posts_query);
echo '</pre>';*/

//$post = get_page(43);

/* On recréé le json avec tous les docteurs, indépendament de leur post (pays) */
$docteurs = array();
/*foreach ($docteurs_posts_query as $key => $value) {
	
	if ($_GET['post'] == $value['ID']) {*/

		foreach ($docteurs_posts_query as $key => $value) {
			//echo $value['ID']." | ";
			$post = get_page($value['ID']);	
			//$langdoc = substr ($chaine, strlen ($value['guid']) - 1); 
			$langdoc =  substr($value['guid'], -1);
			//if ($langdoc == '/') {
			
				$country_term = wp_get_post_terms($value['ID'], 'pays', array("fields" => "slugs"));
				$country = '';
				if (isset($country_term[0])) { 
					$country = strtoupper($country_term[0]);
					if(substr ($country,0,2) == 'EN') { $country = 'UK'; }
					else if(substr ($country,0,2) == 'DE') { $country = 'GR'; }
					else if(substr ($country,0,2) == 'FR') { $country = 'FR'; }
					else if(substr ($country,0,2) == 'IT') { $country = 'IT'; }
					else { $country = 'undefined'; }
				}
				
				$fields = array (
					'name' => get_field('name'),
					'address' => get_field('address'),
					'address2' => get_field('address2'),
					'city' => get_field('city'),
					'state' => get_field('state'),
					'postal' => get_field('postal'),
					'phone' => get_field('phone'),
					'web' => get_field('web'),
					'email' => get_field('email'),
					'country' => $country,
					'lat' => get_field('lat'),
					'lng' => get_field('lng'),
				);		

				/*if (empty($fields)) {
					echo $value['ID']." empty | ";
				}*/
				//print_r($fields);

				array_push($docteurs, $fields);
			//}
		}

	//}

	/* On rajoute les lat/longitude en fonction de l'adresse */
	foreach ((array)$docteurs as $i => $value) {
		//if ($i == 0) {
		if ($docteurs[$i]['lat'] == '' || $docteurs[$i]['lng'] == '') {
			
		$address = $docteurs[$i]['address'].' '.$docteurs[$i]['address2'].' '.$docteurs[$i]['city'].' '.$docteurs[$i]['postal'];	 
		$geocoder = "http://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false";
		$url_address = utf8_encode($address);
		$url_address = urlencode($url_address);
		$query = sprintf($geocoder,$url_address);
		$results = file_get_contents($query);
		$results = json_decode($results);
		$data = json_decode(json_encode($results), True);
			
		$docteurs[$i]['lat'] = $data['results'][0]['geometry']['location']['lat'];
		$docteurs[$i]['lng'] = $data['results'][0]['geometry']['location']['lng'];
		//	}		
		/*echo '<pre>';
		print_r($data);
		echo '</pre>';	*/
		}
	}

	
//}

$docteurs_json = json_encode($docteurs);

/*
echo '<pre>';
print_r($docteurs);
echo '</pre>';*/


foreach ($docteurs_posts_query as $key => $value) {

	if($value['ID']==$_GET['post']) {
		$fp=fopen('../data/locations.json','w');
		fwrite($fp, $docteurs_json);
		fclose($fp);
	}

}

/***/

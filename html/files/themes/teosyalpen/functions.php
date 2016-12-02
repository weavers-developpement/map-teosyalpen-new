<?php


require_once(get_template_directory() . '/includes/inc.func.common.php');
require_once(get_template_directory() . '/includes/inc.func.back-end.php');
require_once(get_template_directory() . '/includes/inc.func.front-end.php');
require_once(get_template_directory() . '/includes/inc.func.tools.php');



/**
 * Insertion dans la base de données
 **

function __update_post_meta( $post_id, $field_name, $value = '' ) {
    if ( empty( $value ) OR ! $value )
    {
        delete_post_meta( $post_id, $field_name );
    }
    elseif ( ! get_post_meta( $post_id, $field_name ) )
    {
        add_post_meta( $post_id, $field_name, $value );
    }
    else
    {
        update_post_meta( $post_id, $field_name, $value );
    }
}

/* Dé-commenter pour importer la data du json dans la base
$jsonresults = file_get_contents("data/locations_backup.json");
$jsonresults = json_decode($jsonresults);
$data = json_decode(json_encode($jsonresults), True);

foreach ($data as $i => $value) {
	$my_post = array(
	     'post_title' => $data[$i]['name'],
	     'post_date' => '',
	     'post_content' => '',
	     'post_status' => 'publish',
	     'post_type' => 'docteurs',
	  );

	$post_id = wp_insert_post($my_post);

	__update_post_meta($post_id, 'name', $data[$i]['name']);
	__update_post_meta($post_id, 'address', $data[$i]['address']);
	__update_post_meta($post_id, 'address2', $data[$i]['address2']);
	__update_post_meta($post_id, 'city', $data[$i]['city']);
	__update_post_meta($post_id, 'state', $data[$i]['state']);
	__update_post_meta($post_id, 'postal', $data[$i]['postal']);
	__update_post_meta($post_id, 'lat', $data[$i]['lat']);
	__update_post_meta($post_id, 'lng', $data[$i]['lng']);
	__update_post_meta($post_id, 'phone', $data[$i]['phone']);
	__update_post_meta($post_id, 'email', $data[$i]['email']);
	wp_set_object_terms( $post_id, $data[$i]['country'], 'pays' );
}


/**
 * TEST : Insertion avec taxo 
**/

/*
$my_post = array(
	     'post_title' =>  'test',
	     'post_date' => '',
	     'post_content' => '',
	     'post_status' => 'publish',
	     'post_type' => 'docteurs',
	  );

	$post_id = wp_insert_post($my_post);

	__update_post_meta($post_id, 'name', 'blabla');
	__update_post_meta($post_id, 'address', '');
	__update_post_meta($post_id, 'address2', '');
	__update_post_meta($post_id, 'city', '');
	__update_post_meta($post_id, 'state', '');
	__update_post_meta($post_id, 'postal', '');
	__update_post_meta($post_id, 'lat', '90');
	__update_post_meta($post_id, 'lng', '90');
	__update_post_meta($post_id, 'phone', '0123456789');
	__update_post_meta($post_id, 'email', '');
	//wp_set_object_terms( $post_id, 6, 'pays' );


	$cat_ids = array( 6 );
	$term_taxonomy_ids = wp_set_object_terms( $post_id, $cat_ids, 'pays', false );

	if ( is_wp_error( $term_taxonomy_ids ) ) {
	 echo "There was an error somewhere and the terms couldn't be set.";
	} else {
	 echo "Success! The post's categories were set.";
	}

/* END TESTS */

/*

function country_list() {
	$langurl = $_GET['lang'];
	if($langurl == '') {
		$langurl = $default_language;
	}
	$args = array(
	'post_type' => 'pays'
	);

	$country_list = get_posts('post_type=pays&suppress_filters=0');
	

	if( $country_list ) : ?>
		<select id="bh-sl-region" name="bh-sl-region">
		<?php foreach ($country_list as $key => $value) {
				if (get_field( "selected", $value->ID ) == 1) {
					$country_selected = 'country_selected';
				}
		?>
	        	<option value="<?=  get_field( "code_pays", $value->ID ); ?>" class="<?= $country_selected ?>"><?= strtoupper($value->post_title); ?></option>
	    <?php //}
		} ?>	   
	    </select>
	<?php endif; 
} 
*/
/*
function default_lang() {
	if ($_GET['lang'] !== 'en') {
		if(!isset($_GET['lang']) || empty($_GET['lang'])) {
		 $sNavLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		 $sRedirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '?lang=' . $sNavLang;
		 wp_safe_redirect( $sRedirect , 302 );
		 exit;
		}
	}
}*/

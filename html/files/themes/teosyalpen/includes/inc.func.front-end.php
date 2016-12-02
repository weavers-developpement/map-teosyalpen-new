<?php

if( is_admin() )
	return;

/* Ajout des JS et CSS minifiés */
function typ_styles() {
	wp_enqueue_style( 'stz-style', get_template_directory_uri() . '/css/pkgd.min.css', array(), '1.0' );
	//wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css', array(), '1.0' );
}
add_action('wp_enqueue_scripts', 'typ_styles');

/* Ajout des JS minifiés */
function typ_scripts() {
	// on retire jQuery car déjà inclus dans le js minifié
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri() . '/js/libs/pkgd-libs-init.min.js', false, '1.0', true);
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'stz-script-libs', get_template_directory_uri() . '/js/libs/pkgd-libs.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'stz-script', get_template_directory_uri() . '/js/pkgd.min.js', array('jquery'), '1.0', true );
}
add_action( 'wp_print_scripts', 'typ_scripts', 100 );


function getHeaderData() {
	$aData = array();
	global $post;

	$aData['bodyAdditionClass'] = '';
	$aData['ajaxUrl'] = admin_url('admin-ajax.php');

	
	return $aData;
}

function getFooterData() {
	$aData = array();

    
	return $aData;
}

function typ_add_img_class($sContent) {
	if(preg_match_all('#<img .*>#Ui', $sContent, $aMatches)) {
		foreach($aMatches as $aMatch) {
			if(!empty($aMatch)) {
				foreach($aMatch as $sImg) {
					if(strpos($sImg, 'img-responsive') === FALSE) {
						if(strpos($sImg, 'class=') === FALSE) {
							 $sContent = str_replace($sImg, str_replace('<img', '<img class="img-responsive" ', $sImg), $sContent);
						} elseif(strpos($sImg, 'class="') !== FALSE) {
							$sContent = str_replace($sImg, str_replace('class="', 'class="img-responsive ', $sImg), $sContent);
						} elseif(strpos($sImg, "class='") !== FALSE) {
							$sContent = str_replace($sImg, str_replace("class='", "class='img-responsive ", $$sImg), $sContent);
						}
					}
				}
			}
		}
	}

	return $sContent;
}
add_filter('the_content', 'typ_add_img_class');


/**
 * Génération de la liste des pays 
 **/

function country_list() {

	$default_language = 'fr';
	$lang = ICL_LANGUAGE_CODE;

	if(!isset($_GET['lang'])) {
		$langurl = $default_language;		
	} else {
		$langurl = $lang;
	}


	$country_list = get_terms( 'pays', array('hide_empty' => false,) );
	//db($country_list);
	$taxonomy = 'pays';
	    
    if ( $country_list ) {
		printf( '<select id="bh-sl-region" name="bh-sl-region %s">', esc_attr( $taxonomy ) );
		foreach ( $country_list as $country ) {
			$country_selected = $langurl == esc_attr( $country->slug ) ? 'country_selected' : '';
			$value = strtoupper(substr( $country->slug ,0,2));			
			if($value == 'EN') { $value = 'UK'; }
			if($value == 'DE') { $value = 'GR'; }
			printf( '<option value="%s" class='.$country_selected.'>%s</option>', $value, strtoupper(esc_html( __($country->name, 'teosyalpen-en') )) );
		}
		print( '</select>' );
	}

} 

function default_lang() {
	if (isset($_GET['lang']) && $_GET['lang'] !== 'en') {
		if(!isset($_GET['lang']) || empty($_GET['lang'])) {
		 $sNavLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		 $sRedirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '?lang=' . $sNavLang;
		 wp_safe_redirect( $sRedirect , 302 );
		 exit;
		}
	}
}

/**
 * Insertion dans la base de données
 **/

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


function import_json_teosyalpen() {
    // Dé-commenter pour importer la data du json dans la base /
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
     
        switch ($data[$i]['country']) {
            case 'FR':
                $term_id = 2;
                break;
            case 'UK':
                $term_id = 4;
                break;
            case 'IT':
                $term_id = 5;
                break;
            case 'GR':
                $term_id = 3;
                break;
            default:
                $term_id = 2;
        }
        
        $term_taxonomy = wp_set_object_terms( $post_id, $term_id, 'pays' );

        if ( is_wp_error( $term_taxonomy ) ) {
            db($term_taxonomy);
            exit();
        }
        
    }
    
}

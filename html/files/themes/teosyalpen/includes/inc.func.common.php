<?php

if(!session_id()) {
	session_start();
}

/* Chargement des traductions */
function typ_load_translation() {
	load_theme_textdomain ( 'teosyalpen', get_template_directory () . '/languages' );
}
add_action ( 'after_setup_theme', 'typ_load_translation' );

/* Enregistrement des menus */
function typ_register_menus() {
	register_nav_menus ( array (
		'header' 	=> __ ( 'Header', 'teosyalpen' ),
		'footer'	=> __ ( 'Footer', 'teosyalpen' ),
	) );
}
add_action ( 'after_setup_theme', 'typ_register_menus' );

/* Ajout des tailles d'image */
function typ_set_image_sizes() {

}
add_action ( 'after_setup_theme', 'typ_set_image_sizes' );

/* Ajout des éléments supportés par le thème */
function typ_theme_support_settings() {
	add_theme_support ( 'post-thumbnails' );
	add_post_type_support ( 'page', 'excerpt' );
}
add_action ( 'after_setup_theme', 'typ_theme_support_settings' );

/* Autorisation de l'upload des fichiers SVG */
function allow_svg_mime_types($mimes) {
	$mimes ['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter ( 'upload_mimes', 'allow_svg_mime_types' );

/* Désactive certains éléments de la barre d'administration WP */
function edit_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu ( 'wp-logo' );
	$wp_admin_bar->remove_menu ( 'about' );
	$wp_admin_bar->remove_menu ( 'wporg' );
	$wp_admin_bar->remove_menu ( 'documentation' );
	$wp_admin_bar->remove_menu ( 'support-forums' );
	$wp_admin_bar->remove_menu ( 'feedback' );
	$wp_admin_bar->remove_menu ( 'view-site' );
	$wp_admin_bar->remove_menu ( 'comments' );
}
add_action ( 'wp_before_admin_bar_render', 'edit_admin_bar' );

/* Supprimer la génération de certains éléments dans le header via la fonction wp_head() */
function typ_remove_header_elems() {
	remove_action ( 'wp_head', 'rsd_link' );
	remove_action ( 'wp_head', 'wlwmanifest_link' );
	remove_action ( 'wp_head', 'wp_generator' );
	remove_action ( 'wp_head', 'start_post_rel_link' );
	remove_action ( 'wp_head', 'index_rel_link' );
	remove_action ( 'wp_head', 'adjacent_posts_rel_link' );
}
add_action ( 'init', 'typ_remove_header_elems' );

/* Suppression de meta box inutiles */
function typ_remove_custom_field_meta_boxes() {
	remove_post_type_support ( 'post', 'custom-fields' );
	remove_post_type_support ( 'page', 'custom-fields' );
}
add_action ( 'init', 'typ_remove_custom_field_meta_boxes' );

/* Restreindre l'affichage de la barre d'administration aux admins */
function typ_administrator_admin_bar($content) {
	return (current_user_can ( "administrator" )) ? $content : false;
}
add_filter ( 'show_admin_bar', 'typ_administrator_admin_bar' );

/* Restreindre l'accès au back pour les utilisateurs non administrateurs */
function typ_restrict_access_administration() {
	if (!defined('DOING_AJAX')) {
		if (is_user_logged_in () && ! current_user_can ( 'administrator' ) && ! current_user_can ( 'editor' ) && ! current_user_can( 'manage_woocommerce' )) {
			wp_redirect ( home_url () );
			exit ();
		}
	}
}
add_action ( 'admin_init', 'typ_restrict_access_administration' );

/* Personnalisation de la page d'accès au back office */
function custom_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo ( 'template_directory' ) . '/css/style-login.css" />';
}
add_action ( 'login_head', 'custom_login_css' );
function custom_url_login() {
	return get_bloginfo ( 'url' );
}
add_filter ( 'login_headerurl', 'custom_url_login' );
function custom_title_login($message) {
	return get_bloginfo ( 'description' );
}
add_filter ( 'login_headertitle', 'custom_title_login' );



/** Custom Post Type Docteurs **/
function custom_post_type_doctors() {

	$labels = array(
		'name'                  => _x( 'Docteurs', 'Post Type General Name', 'teosyalpen' ),
		'singular_name'         => _x( 'Docteur', 'Post Type Singular Name', 'teosyalpen' ),
		'menu_name'             => __( 'Docteurs', 'teosyalpen' ),
		'name_admin_bar'        => __( 'Docteurs', 'teosyalpen' ),
		'archives'              => __( 'Archives', 'teosyalpen' ),
		'parent_item_colon'     => __( 'Parent:', 'teosyalpen' ),
		'all_items'             => __( 'Tous les Docteurs', 'teosyalpen' ),
		'add_new_item'          => __( 'Ajouter', 'teosyalpen' ),
		'add_new'               => __( 'Ajouter', 'teosyalpen' ),
		'new_item'              => __( 'Nouveau', 'teosyalpen' ),
		'edit_item'             => __( 'Editer', 'teosyalpen' ),
		'update_item'           => __( 'Modifier', 'teosyalpen' ),
		'view_item'             => __( 'Voir', 'teosyalpen' ),
		'search_items'          => __( 'Rechercher', 'teosyalpen' ),
		'not_found'             => __( 'Non trouvé', 'teosyalpen' ),
		'not_found_in_trash'    => __( 'Non trouvé dans la corbeille', 'teosyalpen' ),
		'featured_image'        => __( 'Featured Image', 'teosyalpen' ),
		'set_featured_image'    => __( 'Set featured image', 'teosyalpen' ),
		'remove_featured_image' => __( 'Remove featured image', 'teosyalpen' ),
		'use_featured_image'    => __( 'Use as featured image', 'teosyalpen' ),
		'insert_into_item'      => __( 'Insert into item', 'teosyalpen' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'teosyalpen' ),
		'items_list'            => __( 'Items list', 'teosyalpen' ),
		'items_list_navigation' => __( 'Items list navigation', 'teosyalpen' ),
		'filter_items_list'     => __( 'Filter items list', 'teosyalpen' ),
	);
	$args = array(
		'label'                 => __( 'Docteur', 'teosyalpen' ),
		'description'           => __( 'Liste des docteurs', 'teosyalpen' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', ),
		'taxonomies'            => array( 'pays' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'docteurs', $args );

}
add_action( 'init', 'custom_post_type_doctors', 0 );

/** Custom Taxonomy country **/
function custom_taxonomy_country() {

	$labels = array(
		'name'                       => _x( 'Pays', 'Taxonomy General Name', 'teosyalpen' ),
		'singular_name'              => _x( 'Pays', 'Taxonomy Singular Name', 'teosyalpen' ),
		'menu_name'                  => __( 'Pays', 'teosyalpen' ),
		'all_items'                  => __( 'Tous les Pays', 'teosyalpen' ),
		'parent_item'                => __( 'Parent', 'teosyalpen' ),
		'parent_item_colon'          => __( 'Parent:', 'teosyalpen' ),
		'new_item_name'              => __( 'Nouveau Pays', 'teosyalpen' ),
		'add_new_item'               => __( 'Ajouter', 'teosyalpen' ),
		'edit_item'                  => __( 'Editer', 'teosyalpen' ),
		'update_item'                => __( 'Modifier', 'teosyalpen' ),
		'view_item'                  => __( 'Voir', 'teosyalpen' ),
		'separate_items_with_commas' => __( 'Séparer les Pays avec une virgule', 'teosyalpen' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer', 'teosyalpen' ),
		'choose_from_most_used'      => __( 'Sélectionner', 'teosyalpen' ),
		'popular_items'              => __( 'Pays populaires', 'teosyalpen' ),
		'search_items'               => __( 'Rechercher un Pays', 'teosyalpen' ),
		'not_found'                  => __( 'Rien trouvé', 'teosyalpen' ),
		'no_terms'                   => __( 'Pas de Pays', 'teosyalpen' ),
		'items_list'                 => __( 'Liste des Pays', 'teosyalpen' ),
		'items_list_navigation'      => __( 'Navigation dans la liste des Pays', 'teosyalpen' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'pays', array( 'docteurs' ), $args );

}
add_action( 'init', 'custom_taxonomy_country', 0 );


/**
 * Display a custom taxonomy dropdown in admin
 */
add_action('restrict_manage_posts', 'weavers_filter_post_type_by_taxonomy');
function weavers_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'docteurs'; // change to your post type
	$taxonomy  = 'pays'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => __("Show All {$info_taxonomy->label}"),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/**
 * Filter posts by taxonomy in admin
 */
add_filter('parse_query', 'weavers_convert_id_to_term_in_query');
function weavers_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'docteurs'; // change to your post type
	$taxonomy  = 'pays'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}


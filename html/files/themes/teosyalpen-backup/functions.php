<?php
/**
 * teosyalpen functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package teosyalpen
 */

if ( ! function_exists( 'teosyalpen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function teosyalpen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on teosyalpen, use a find and replace
	 * to change 'teosyalpen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'teosyalpen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'teosyalpen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'teosyalpen_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'teosyalpen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function teosyalpen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'teosyalpen_content_width', 640 );
}
add_action( 'after_setup_theme', 'teosyalpen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function teosyalpen_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'teosyalpen' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'teosyalpen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'teosyalpen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function teosyalpen_scripts() {
	wp_enqueue_style( 'teosyalpen-style', get_stylesheet_uri() );

	wp_enqueue_script( 'teosyalpen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'teosyalpen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'teosyalpen_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * @package ACF
 */

function my_acf_options_page_settings( $settings ) {    
    $settings['title'] = 'Options';
    return $settings;    
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');


/**
 * Insertion dans la base de données
 **/

function __update_post_meta( $post_id, $field_name, $value = '' )
{
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
/*
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
	__update_post_meta($post_id, 'country', $data[$i]['country']);
}*/

/**
 * Génération de la liste des pays 
 **/

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

function default_lang() {
	if ($_GET['lang'] !== 'en') {
		if(!isset($_GET['lang']) || empty($_GET['lang'])) {
		 $sNavLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		 $sRedirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '?lang=' . $sNavLang;
		 wp_safe_redirect( $sRedirect , 302 );
		 exit;
		}
	}
}
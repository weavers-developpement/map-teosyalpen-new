<?php

@ini_set('display_errors', 'on');

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function r2_scripts() {
    /*
      // Add Lato font, used in the main stylesheet.
      wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );

      // Add Genericons font, used in the main stylesheet.
      wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );

      // Load our main stylesheet.
      wp_enqueue_style( 'twentyfourteen-style', get_stylesheet_uri(), array( 'genericons' ) );

      // Load the Internet Explorer specific stylesheet.
      wp_enqueue_style( 'twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfourteen-style', 'genericons' ), '20131205' );
      wp_style_add_data( 'twentyfourteen-ie', 'conditional', 'lt IE 9' );

      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
      }

      if ( is_singular() && wp_attachment_is_image() ) {
      wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
      }

      if ( is_active_sidebar( 'sidebar-3' ) ) {
      wp_enqueue_script( 'jquery-masonry' );
      }

      if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
      wp_enqueue_script( 'twentyfourteen-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
      wp_localize_script( 'twentyfourteen-slider', 'featuredSliderDefaults', array(
      'prevText' => __( 'Previous', 'twentyfourteen' ),
      'nextText' => __( 'Next', 'twentyfourteen' )
      ) );
      }

      wp_enqueue_script( 'twentyfourteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20131209', true ); */

    //wp_enqueue_script( 'r2-easing', '/wp-content/themes/teosyalpen/js/jquery.easing.1.3.js', array(  'jquery' ), '20131204' );
    wp_enqueue_script('r2-jui', '/wp-content/themes/teosyalpen/js/jquery-ui-1.10.4.js', array('jquery'), '20131204');

    wp_enqueue_script('r2-modernizr', '/wp-content/themes/teosyalpen/js/vendor/modernizr-2.7.1.min.js', array('jquery'), '20131205');

    //wp_enqueue_script( 'r2-imagesloaded', '/wp-content/themes/teosyalpen/js/imagesloaded.js', array(  'jquery' ), '20131207' );



    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;

    if (!$detect->isMobile()) {

        wp_enqueue_script('r2-mousewheel', '/wp-content/themes/teosyalpen/js/jquery.mousewheel.js', array('jquery'), '20131208');
        wp_enqueue_style('r2-fancybox-css', '/wp-content/themes/teosyalpen/js/fancybox/jquery.fancybox.css?v=2.1.5', array(), '20131209');
        wp_enqueue_script('r2-fancybox', '/wp-content/themes/teosyalpen/js/fancybox/jquery.fancybox.js?v=2.1.5', array('jquery'), '20131210');
    }

    wp_enqueue_script('r2-froogaloop', '/wp-content/themes/teosyalpen/js/froogaloop.js', array('jquery'), '20131211');

    wp_enqueue_script('r2-main', '/wp-content/themes/teosyalpen/js/main.js', array('jquery'), '20131221');
    wp_enqueue_script('r2-fullPage', '/wp-content/themes/teosyalpen/js/jquery.fullPage.js', array('jquery'), '20131222');
    wp_enqueue_script('r2-mobile', '/wp-content/themes/teosyalpen/js/mobile.js', array('jquery'), '20131223');
    wp_enqueue_script('r2-anim', '/wp-content/themes/teosyalpen/js/anim.js', array('jquery'), '20131224');







    // style apres cause retina

    wp_enqueue_style('r2-font-avenir-css', '/wp-content/themes/teosyalpen/css/font-avenir.css', array(), '20131300');
	
    wp_enqueue_style('r2-normalize-css', '/wp-content/themes/teosyalpen/css/normalize.css', array(), '20131301');
    wp_enqueue_style('r2-fullPage-css', '/wp-content/themes/teosyalpen/css/jquery.fullPage.css', array(), '20131302');
    wp_enqueue_style('r2-style-css', '/wp-content/themes/teosyalpen/css/style.css', array(), '20131303');
    wp_enqueue_style('r2-bg-css', '/wp-content/themes/teosyalpen/css/bg.css', array(), '20131304');


    wp_enqueue_style('r2-responsiveh-css', '/wp-content/themes/teosyalpen/css/responsivew.css', array(), '20131305');
    wp_enqueue_style('r2-responsivew-css', '/wp-content/themes/teosyalpen/css/responsiveh.css', array(), '20131306');


//if ($detect->isMobile()  ) {

    wp_enqueue_style('r2-mobile-css', '/wp-content/themes/teosyalpen/css/mobile.css', array(), '20131307');
//}

    wp_enqueue_style('r2-retina-css', '/wp-content/themes/teosyalpen/css/retina.css', array(), '20131308');
}

add_action('wp_enqueue_scripts', 'r2_scripts');


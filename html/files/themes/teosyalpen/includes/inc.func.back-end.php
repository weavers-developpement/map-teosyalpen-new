<?php

if(!is_admin() )
	return;

/* Supprimer la version de WordPress du footer d'administration */
function change_footer_version($footer) {
	$current_theme_info = wp_get_theme();
	return $current_theme_info->name . ' - Version ' . $current_theme_info->version;
}
add_filter( 'update_footer', 'change_footer_version', 999, 1);


/** Masque les menus dans l'admin 
function remove_menus(){
  
  //remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );**/


function remove_menus () {
    if(is_user_logged_in())
    {
        global $menu;
        $restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Contact'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }
    }
}
add_action('admin_menu', 'remove_menus');


/** WPML EDITOR 
$role_object = get_role( 'editor' );
$role_object->add_cap( 'wpml_manage_translation_management' );

$role_object->add_cap( 'wpml_manage_languages' );
$role_object->add_cap( 'wpml_manage_translation_options' );
$role_object->add_cap( 'wpml_manage_troubleshooting' );
$role_object->add_cap( 'wpml_manage_taxonomy_translation' );
$role_object->add_cap( 'wpml_manage_wp_menus_sync' );
$role_object->add_cap( 'wpml_manage_translation_analytics' );
$role_object->add_cap( 'wpml_manage_string_translation' );
$role_object->add_cap( 'wpml_manage_sticky_links' );
$role_object->add_cap( 'wpml_manage_navigation' );
$role_object->add_cap( 'wpml_manage_theme_and_plugin_localization' );
$role_object->add_cap( 'wpml_manage_media_translation' );
$role_object->add_cap( 'wpml_manage_support' );
$role_object->add_cap( 'wpml_manage_woocommerce_multilingual' );
$role_object->add_cap( 'wpml_operate_woocommerce_multilingual' );
**/

add_action('admin_head', 'disable_icl_metabox',99);
function disable_icl_metabox() {
    global $post;
    remove_meta_box('icl_div_config',$post->posttype,'normal');
}
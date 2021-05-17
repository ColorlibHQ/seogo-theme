<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'SEOGO_DIR_URI' ) ) {
	define( 'SEOGO_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'SEOGO_DIR_ASSETS_URI' ) ) {
	define( 'SEOGO_DIR_ASSETS_URI', SEOGO_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'SEOGO_DIR_CSS_URI' ) ) {
	define( 'SEOGO_DIR_CSS_URI', SEOGO_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'SEOGO_DIR_JS_URI' ) ) {
	define( 'SEOGO_DIR_JS_URI', SEOGO_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'SEOGO_DIR_IMGS_URI' ) ) {
	define( 'SEOGO_DIR_IMGS_URI', SEOGO_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'SEOGO_DIR_ICON_IMG_URI' ) ) {
	define( 'SEOGO_DIR_ICON_IMG_URI', SEOGO_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'SEOGO_DIR_PATH' ) ) {
	define( 'SEOGO_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'SEOGO_DIR_PATH_INC' ) ) {
	define( 'SEOGO_DIR_PATH_INC', SEOGO_DIR_PATH . 'inc/' );
}

//Seogo Libraries Folder Directory
if ( ! defined( 'SEOGO_DIR_PATH_LIBS' ) ) {
	define( 'SEOGO_DIR_PATH_LIBS', SEOGO_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'SEOGO_DIR_PATH_CLASSES' ) ) {
	define( 'SEOGO_DIR_PATH_CLASSES', SEOGO_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'SEOGO_DIR_PATH_HOOKS' ) ) {
	define( 'SEOGO_DIR_PATH_HOOKS', SEOGO_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function seogo_admin_script(){
    wp_enqueue_style( 'seogo-admin', get_template_directory_uri().'/assets/css/seogo-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'seogo_admin', get_template_directory_uri().'/assets/js/seogo-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'seogo_admin_script' );



/**
 * Include File
 *
 */
require_once( SEOGO_DIR_PATH_INC . 'seogo-breadcrumbs.php' );
require_once( SEOGO_DIR_PATH_INC . 'seogo-widgets-reg.php' );
require_once( SEOGO_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( SEOGO_DIR_PATH_INC . 'post-like.php' );
require_once( SEOGO_DIR_PATH_INC . 'seogo-functions.php' );
require_once( SEOGO_DIR_PATH_INC . 'seogo-commoncss.php' );
require_once( SEOGO_DIR_PATH_INC . 'support-functions.php' );
require_once( SEOGO_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( SEOGO_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( SEOGO_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( SEOGO_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( SEOGO_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( SEOGO_DIR_PATH_HOOKS . 'hooks.php' );
require_once( SEOGO_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( SEOGO_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( SEOGO_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Seogo object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Seogo = new Seogo();
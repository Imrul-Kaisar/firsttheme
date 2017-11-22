 <?php 

 /*
//** First theme functions and definitions 
//**
 */

 /*
//** First theme only works in WordPress 4.9 or later. 
 */


 if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
 	require get_template_directory().'/inc/back-compat.php';
 	return;
 }

add_action( 'after_setup_theme', 'firsttheme_setup_functins' );
function firsttheme_setup_functins(){
	
	// Load theme text domain

	load_theme_textdomain( 'firththeme', get_template_directory(). '/languages/' );


	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_theme_support( 'custom-logo', array(
		'width'		=> 250,
		'height'	=> 250,
		'flex-width'  => true,
		'flex-height'=> true,
		'header-text'=> array( 'Site Title', 'Site Description'),
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'firsttheme-featured-image', '2000', '1200', true );
	add_image_size( 'firsttheme-thumbnail-avatar', '100', '100', true );

	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
	) );

	





}


 ?>
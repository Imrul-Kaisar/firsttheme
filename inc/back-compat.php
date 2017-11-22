<?php
/**
 * First theme back compat functionality
 *
 * Prevents First theme from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 */

/**
 * Prevent switching to First theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since First theme 1.0
 */
function firsttheme_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'firsttheme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'firsttheme_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Seventeen on WordPress versions prior to 4.9.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $wp_version WordPress version.
 */
function firsttheme_upgrade_notice() {
	$message = sprintf( __( 'First theme requires at least WordPress version 4.9. You are running version %s. Please upgrade and try again.', 'firsttheme' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p><p>Learn More go to our <a href="https://facebook.com/">Facebook page</a></p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.9.
 *
 * @since First theme 1.0
 *
 * @global string $wp_version WordPress version.
 */
function firsttheme_customize() {
	wp_die( sprintf( __( 'First theme requires at least WordPress version 4.9. You are running version %s. Please upgrade and try again.', 'firsttheme' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'firsttheme_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.9.
 *
 * @since First Theme 1.0
 *
 * @global string $wp_version WordPress version.
 */
function firsttheme_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'First Theme requires at least WordPress version 4.9. You are running version %s. Please upgrade and try again.', 'firsttheme' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'firsttheme_preview' );

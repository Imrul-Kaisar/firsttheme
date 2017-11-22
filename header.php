<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head <?php body_class(); ?>>
<body>


	<!-- Header Area Start From Here -->

	<div div="page" class="site"><!-- Start Class .site -->
		<a href="#content" class="skip-link screen-reader-text"><?php _e( 'Skip to content', 'firsttheme' ) ?></a>
		<header id="masthead" class="site-header" role="banner">
			<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

			<?php if( has_nav_menu( 'top' ) ) :  ?>
				<div class="navigation-top"><!-- Start Class .navigation-top -->
					<div class="wrap"><!-- Start Class .wrap -->
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					<div><!-- End Class .wrap -->
				<div><!-- End Class .navigation-top -->
			<?php endif; ?>

		</header>
		
		<?php

		/*
		 * If a regular post or page, and not the front page, show the featured image.
		 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
		 */
		if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
			echo '<div class="single-featured-image-header">';
			echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		endif;
		?>

		<div class="site-content-contain">
			<div id="content" class="site-content">


	<!-- End Header Area --> 
<div class="site-branding"><!-- Start Class .site-branding -->

	<div class="wrap"><!-- Start Class .wrap -->

		<?php the_custom_logo(); ?>

		<div class="site-branding-text"><!-- Start Class .site-branding-text -->
			
			<?php if( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'home' ); ?></a></h1>
			<?php else; ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'home' ); ?></a></p>
			<?php endif; ?>

			<?php 
			$description = get_bloginfo( 'description', 'display' ); 

			if( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>

			<?php endif; ?>

		<div><!-- End Class .site-branding-text -->

		<?php if( firsttheme_is_frontpage() || ( is_home() && is_front_page() ) && ! has_nav_menu( 'top' ) : ) ?>

		<a href="#content" class="menu-scroll-down"><?php echo firsttheme_get_svg( array( 'icon' => 'right-arrow' ) ); ?> <span class="screen-reader-text"><?php _e( 'Scroll down to text', 'firsttheme' ) ?></span></a>

		<?php endif; ?>

	<div><!-- End Class .wrap -->

<div><!-- End Class .site-branding -->
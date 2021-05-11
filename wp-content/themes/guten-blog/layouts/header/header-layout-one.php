<div class="header-layout-1">
	<div class="top-header header-wrapper">
		<div class="container">
			<?php get_template_part('template-parts/header-social', 'icon'); ?> 
			<?php get_template_part('template-parts/search', 'form'); ?> 
		</div>
	</div>
	<div class="middle-header header-wrapper">
		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				$name = get_bloginfo('name');
				if ( $name ){
					echo '<div class="site-title"><a href="'.esc_url(home_url()).'" rel="home">' .esc_html( $name ) . '</a></div>';
				}
				?>
				<?php 
				
				$guten_blog_description = get_bloginfo( 'description', 'display' );
				if ( $guten_blog_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $guten_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!-- <?php esc_html_e( 'Primary Menu', 'guten-blog' ); ?> -->
					<div id="nav-icon">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</div>
</div>
<?php
/**
 * Added WpGutenblog Page.
*/

/**
 * Add a new page under Appearance
 */

function guten_blog_menu() {
	add_theme_page( __( 'Get Started', 'guten-blog' ), __( 'Get Started', 'guten-blog' ), 'edit_theme_options', 'guten-blog-get-started', 'guten_blog_page' );
}
add_action( 'admin_menu', 'guten_blog_menu' );

/**
 * Enqueue styles for the help page.
 */
function guten_blog_admin_scripts( $hook ) {
	if ( 'appearance_page_guten-blog-get-started' !== $hook ) {
		return;
	}
	wp_enqueue_style( 'guten-blog-admin-style', get_template_directory_uri() . '/inc/about/about.css', array(), '' );
}
add_action( 'admin_enqueue_scripts', 'guten_blog_admin_scripts' );

/**
 * Add the theme page
 */
function guten_blog_page() {
	?>
	<div class="das-wrap">
		<div class="guten-blog-panel">
			
				<a href="https://wpgutenblog.com/guten-blog-pro/" target="_blank" class="btn btn-success pull-right"><?php esc_html_e( 'Upgrade to Pro $59.99', 'guten-blog' ); ?></a>
			
			<p>
			<?php esc_html_e( 'WP Gutenblog is a free WordPress theme.', 'guten-blog' ); ?></p>
			<a class="btn btn-primary" href="<?php echo esc_url (admin_url( '/customize.php' ));
				?>"><?php esc_html_e( 'Theme Options - Click Here', 'guten-blog' ); ?></a>
		</div>

		<div class="guten-blog-panel">
			<div class="guten-blog-panel-content">
				<div class="theme-title">
					<h3><?php esc_html_e( 'Once you install all recommended plugins, you can import demo template.', 'guten-blog' ); ?></h3>
				</div>
				<a class="btn btn-secondary" href="<?php echo esc_url (admin_url( '/themes.php?page=advanced-import' ));?>"><?php esc_html_e( 'View Demo Templates', 'guten-blog' ); ?></a>
			</div>
		</div>
		<div class="guten-blog-panel">
			<div class="guten-blog-panel-content">
				<div class="theme-title">
					<h4><?php esc_html_e( 'If you like the theme, please leave a review or Contact us for technical support.', 'guten-blog' ); ?></h4>
				</div>
				<a href="https://wordpress.org/support/theme/guten-blog/reviews/#new-post" target="_blank" class="btn btn-secondary"><?php esc_html_e( 'Rate this theme', 'guten-blog' ); ?></a> <a href="https://wpgutenblog.com/support/" target="_blank" class="btn btn-secondary"><?php esc_html_e( 'Contact Us', 'guten-blog' ); ?></a>
			</div>
		</div>
	</div>
	<?php
}

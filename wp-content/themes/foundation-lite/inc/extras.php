<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package foundation-lite
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function foundation_lite_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds new front page template class
	if ( is_page_template( 'template-parts/front-page.php' ) ) {
		$classes[] = 'frontpage';
	}

	// Adds new full width class
	if ( !is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'full-width';
	}

	return $classes;
}
add_filter( 'body_class', 'foundation_lite_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function foundation_lite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'foundation_lite_pingback_header' );

/*	Custom Excerpt  */

if( ! function_exists( 'foundation_lite_excerpt_length' ) ) {
	function foundation_lite_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		return 25;
	}
	add_filter( 'excerpt_length', 'foundation_lite_excerpt_length' );
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and foundation_lite_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function foundation_lite_auto_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}

	return '...' ;
}
add_filter( 'excerpt_more', 'foundation_lite_auto_excerpt_more' );

/**
 * Add Excerpts to pages
 */
function foundation_lite_page_excerpts() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'foundation_lite_page_excerpts' );

/**
 * Get random posts; a simple, more efficient approach.
 * MySQL queries that use ORDER BY RAND() can be pretty challenging and slow on large datasets.
 * Also it works better with heavy caching.
 */
function foundation_lite_get_random_posts( $number = 1, $post_type = 'post' ) {
	$query = new WP_Query( array(
		'posts_per_page' => 100,
		'fields'         => 'ids',
		'post_type'      => $post_type
	) );

	$post_ids = $query->posts;
	shuffle( $post_ids );
	$post_ids = array_splice( $post_ids, 0, $number );

	$random_posts = get_posts( array(
		'post__in'    => $post_ids,
		'numberposts' => count( $post_ids ),
		'post_type'   => $post_type
	) );

	return $random_posts;
}

/**
 * Display info pages on Homepage.
 */
function foundation_lite_info_pages() {
	$featured_page_1 = esc_attr( get_theme_mod( 'foundation_lite_featured_page_one_front_page', '0' ) );
	$featured_page_2 = esc_attr( get_theme_mod( 'foundation_lite_featured_page_two_front_page', '0' ) );
	$featured_page_3 = esc_attr( get_theme_mod( 'foundation_lite_featured_page_three_front_page', '0' ) );
	$featured_page_4 = esc_attr( get_theme_mod( 'foundation_lite_featured_page_four_front_page', '0' ) );

	if ( 0 == $featured_page_1 && 0 == $featured_page_4 ) {
		return;
	}
?>

	<div class="featured-page-area">
		<?php for ( $page_number = 1; $page_number <= 4; $page_number++ ) : ?>
			<?php if ( 0 != ${'featured_page_' . $page_number} ) : // Check if a featured page has been set in the customizer ?>
				<?php
					// Create new argument using the page ID of the page set in the customizer
					$featured_page_args = array(
						'page_id' => ${'featured_page_' . $page_number},
					);
					// Create a new WP_Query using the argument previously created
					$featured_page_query = new WP_Query( $featured_page_args );
				?>

				<?php while ( $featured_page_query->have_posts() ) : $featured_page_query->the_post(); ?>

					<div class="featured-page">
					<?php if ( '' != get_the_post_thumbnail() ) : ?>
						<div class="front-featured">
							<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
								<?php the_post_thumbnail( 'foundation-lite-front-pages' ); ?>
							</a>
						</div>
					<?php endif; ?>
						<?php get_template_part( '/template-parts/content', 'info-pages' ); ?>
					</div>

				<?php
					endwhile;
				?>
			<?php
				wp_reset_postdata();
				endif;
			?>
		<?php endfor; ?>
	</div>

<?php
}

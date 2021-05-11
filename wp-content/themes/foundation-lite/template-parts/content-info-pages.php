<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package foundation-lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-info' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>

		<a href="<?php echo esc_url( get_permalink() ); ?>" class="info-more-link"><?php esc_html_e( 'More Information', 'foundation-lite' ); ?></a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

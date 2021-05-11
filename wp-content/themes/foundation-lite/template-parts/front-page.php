<?php
/**
 * Template Name: Front Page Template
 *
 * @package foundation-lite
 */

get_header();
?>

<div class="wrap">

	<div id="primary" class="content-area frontpage-content">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>

					<div class="front-content">
						<?php the_content(); ?>
					</div>
				</article>

			<?php
				endwhile; // end of the loop.
				wp_reset_postdata();
			?>

			<?php foundation_lite_info_pages(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php
get_footer();
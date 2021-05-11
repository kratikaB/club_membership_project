<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<?php
		    $fitness_gymhouse_layout_settings = get_theme_mod( 'fitness_gymhouse_layout_settings','Right Sidebar');
			if($fitness_gymhouse_layout_settings == 'Left Sidebar'){ ?>
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.

					?>
				</div>
			<?php }else if($fitness_gymhouse_layout_settings == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.
						
					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else if($fitness_gymhouse_layout_settings == 'One Column'){ ?>
				<div class="col-lg-12 col-md-12">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.

					?>
				</div>
			<?php }else if($fitness_gymhouse_layout_settings == 'Three Columns'){ ?>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-6 col-md-6">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			<?php }else if($fitness_gymhouse_layout_settings == 'Four Columns'){ ?>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-3'); ?>
				</div>
			<?php }else if($fitness_gymhouse_layout_settings == 'Grid Layout'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else {?>
				<div class="col-lg-8 col-md-8">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitness-gymhouse' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitness-gymhouse' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'fitness-gymhouse' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'fitness-gymhouse' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'fitness-gymhouse' ) . '</span>',
							) );

						endwhile; // End of the loop.


					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }?>
		</div>
	</div>
</main>

<?php get_footer();

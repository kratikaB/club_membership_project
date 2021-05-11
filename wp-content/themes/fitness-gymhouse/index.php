<?php
/**
 * The main template file
 */
get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header role="banner" class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php else : ?>
		<header role="banner" class="page-header">
			<h2 class="page-title"><?php esc_html_e( 'Posts', 'fitness-gymhouse' ); ?></h2>
		</header>
		<?php endif; ?>		
		<?php
	    $fitness_gymhouse_layout_setting = get_theme_mod( 'fitness_gymhouse_layout_settings','Right Sidebar');
	    if($fitness_gymhouse_layout_setting == 'Left Sidebar'){ ?>
		    <div class="row">
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php fitness_gymhouse_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
			</div>
		<?php }else if($fitness_gymhouse_layout_setting == 'Right Sidebar'){ ?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php fitness_gymhouse_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			</div>
		<?php }else if($fitness_gymhouse_layout_setting == 'One Column'){ ?>
			<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif;
			?>
			<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
				<div class="navigation">
	                <?php fitness_gymhouse_pagination_type(); ?>
       	 		</div>
       	 	<?php } ?>
		<?php }else if($fitness_gymhouse_layout_setting == 'Three Columns'){ ?>
			<div class="row">
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-6 col-md-6">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php fitness_gymhouse_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php }else if($fitness_gymhouse_layout_setting == 'Four Columns'){ ?>
			<div class="row">
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php fitness_gymhouse_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-3'); ?>
				</div>
			</div>
		<?php }else if($fitness_gymhouse_layout_setting == 'Grid Layout'){ ?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div class="row">
						<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/gridlayout' );

								endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
							<div class="navigation">
				                <?php fitness_gymhouse_pagination_type(); ?>
			       	 		</div>
			       	 	<?php } ?>
	       	 		</div>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php }else {?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'fitness_gymhouse_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php fitness_gymhouse_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</main>

<?php get_footer();
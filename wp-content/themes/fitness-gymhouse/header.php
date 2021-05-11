<?php
/**
 * The header for our theme 
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>
	<?php if(get_theme_mod('fitness_gymhouse_loader_setting',true)){ ?>
	    <div id="pre-loader">
	        <div class='demo'>
		        <?php $fitness_gymhouse_theme_lay = get_theme_mod( 'fitness_gymhouse_preloader_types','Default');
		        if($fitness_gymhouse_theme_lay == 'Default'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($fitness_gymhouse_theme_lay == 'Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($fitness_gymhouse_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php } ?>
	        </div>
	  	</div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'fitness-gymhouse' ); ?></a>
	<div id="page" class="site">
		<?php if( get_theme_mod( 'fitness_gymhouse_contact','' ) != '' || get_theme_mod( 'fitness_gymhouse_email','' ) != '' || get_theme_mod( 'fitness_gymhouse_timming','' ) != '') { ?>
			<?php if( get_theme_mod('fitness_gymhouse_show_hide_topbar',false) != '' || get_theme_mod('fitness_gymhouse_enable_disable_topbar',false) != ''){ ?>
				<div class="top-header py-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 call text-md-left text-center">
								<?php if( get_theme_mod( 'fitness_gymhouse_contact','' ) != '') { ?>
						            <a href="tel:<?php echo esc_attr( get_theme_mod('fitness_gymhouse_contact','' )); ?>"><i class="fa fa-phone mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('fitness_gymhouse_contact','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('fitness_gymhouse_contact','' )); ?></span></a>
					            <?php } ?>
							</div>
							<div class="col-lg-4 col-md-4 email text-center">
								<?php if( get_theme_mod( 'fitness_gymhouse_email','' ) != '') { ?>
						            <a href="mailto:<?php echo esc_attr( get_theme_mod('fitness_gymhouse_email','') ); ?>"><i class="fa fa-envelope mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('fitness_gymhouse_email','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('fitness_gymhouse_email','' )); ?></span></a>
					            <?php } ?>
							</div>
							<div class="col-lg-4 col-md-4 time text-md-right text-center">
								<?php if( get_theme_mod( 'fitness_gymhouse_timming','' ) != '') { ?>
						            <span><i class="fa fa-clock mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('fitness_gymhouse_timming','' )); ?></span>
					            <?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		<?php }?>
		<div class="<?php if( get_theme_mod( 'fitness_gymhouse_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
			<header id="masthead" class="site-header" role="banner">			
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="logo py-2 text-md-left text-center">
						      	<?php if ( has_custom_logo() ) : ?>
				              		<div class="site-logo"><?php the_custom_logo(); ?></div>
				            	<?php endif; ?>    
				              	<?php $blog_info = get_bloginfo( 'name' ); ?>
			              		<?php if ( ! empty( $blog_info ) ) : ?>
			              			<?php if( get_theme_mod('fitness_gymhouse_show_site_title',true) != ''){ ?>
				                		<?php if ( is_front_page() && is_home() ) : ?>
				                  			<h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
					                	<?php else : ?>
				                  		<p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></p>
					                <?php endif; ?>
					            <?php }?>
			              	<?php endif; ?>
		              		<?php
		              		$description = get_bloginfo( 'description', 'display' );
		              		if ( $description || is_customize_preview() ) :
			                ?>
				                <?php if( get_theme_mod('fitness_gymhouse_show_tagline',true) != ''){ ?>
				              		<p class="site-description m-0">
					                	<?php echo esc_html($description); ?>
				              		</p>
				                <?php }?>
				            <?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-9 col-md-9">
							<?php if ( has_nav_menu( 'top' ) ) : ?>
								<div class="navigation-top">
									<div class="wrap">
										<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'fitness-gymhouse' ); ?>">
											<button role="tab" class="menu-toggle p-3 my-3 mx-auto" aria-controls="top-menu" aria-expanded="false">
												<?php
													esc_html_e( 'Menu', 'fitness-gymhouse' );
												?>
											</button>
											<?php wp_nav_menu( array(
												'theme_location' => 'top',
												'menu_id'        => 'top-menu',
											) ); ?>
										</nav>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</header>
		</div>

	<div class="site-content-contain">
		<div id="content" class="site-content">

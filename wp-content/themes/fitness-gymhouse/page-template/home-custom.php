<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'fitness_gymhouse_before_slider' ); ?>

  <?php if( get_theme_mod('fitness_gymhouse_slider_hide', false) != '' || get_theme_mod('fitness_gymhouse_enable_disable_slider', false) != ''){ ?>
    <section id="slider-section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('fitness_gymhouse_slider_speed', 3000)); ?>"> 
        <?php $fitness_gymhouse_slider_pages = array();
          for ( $count = 1; $count <=4; $count++ ) {
            $mod = intval( get_theme_mod( 'fitness_gymhouse_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $fitness_gymhouse_slider_pages[] = $mod;
            }
          }
          if( !empty($fitness_gymhouse_slider_pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $fitness_gymhouse_slider_pages,
              'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('fitness_gymhouse_slider_title',true) != ''){ ?>
                    <h1><a href="<?php echo esc_url( get_permalink() );?>" class="text-uppercase"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('fitness_gymhouse_slider_content',true) != ''){ ?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( fitness_gymhouse_string_limit_words( $excerpt, esc_attr(get_theme_mod('fitness_gymhouse_slider_excerpt_number','25')))); ?></p> 
                  <?php } ?>
                  <?php if (get_theme_mod( 'fitness_gymhouse_slider_button',true) != '' || get_theme_mod( 'fitness_gymhouse_show_hide_slider_button',true) != ''){ ?>
                    <?php if( get_theme_mod('fitness_gymhouse_slider_button_text','READ MORE') != ''){ ?>
                      <div class="slide-button mt-md-4">
                        <a href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_theme_mod('fitness_gymhouse_slider_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fitness_gymhouse_slider_button_text','READ MORE'));?></span></a>
                      </div> 
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-circle-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','fitness-gymhouse' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-circle-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','fitness-gymhouse' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'fitness_gymhouse_after_slider' ); ?>

  <?php if( get_theme_mod('fitness_gymhouse_about') != ''){ ?>
    <?php /*--About Us--*/?>
    <section class="about py-5 text-md-left text-center">
      <div class="container">
        <?php
          $fitness_gymhouse_postData1=  get_theme_mod('fitness_gymhouse_about');
         if($fitness_gymhouse_postData1){
         $args = array( 'name' => esc_html($fitness_gymhouse_postData1 ,'fitness-gymhouse'));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="row">
                <div class="col-lg-7 col-md-7 about-text">
                  <h2 class="text-uppercase"><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                  <div class ="about-btn">
                    <a href="<?php the_permalink(); ?>"><span><?php echo esc_html('KNOW MORE ABOUT US','fitness-gymhouse'); ?></span><span class="screen-reader-text"><?php esc_html_e( 'KNOW MORE ABOUT US','fitness-gymhouse' );?></span></a>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5">
                  <?php the_post_thumbnail(); ?>
                </div>
              </div>
            <?php endwhile; 
            wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
        endif; }?>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'fitness_gymhouse_after_about' ); ?>
</main>

<?php get_footer(); ?>
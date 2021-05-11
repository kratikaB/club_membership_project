<?php
/**
 * Template part for displaying posts
 */

?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;
  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <div class="category">
      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php esc_html_e( 'Category','fitness-gymhouse' );?></span></a>
    </div>
    <h3><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
    <?php if( get_theme_mod( 'fitness_gymhouse_date_hide',true) != '' || get_theme_mod( 'fitness_gymhouse_comment_hide',true) != '' || get_theme_mod( 'fitness_gymhouse_author_hide',true) != '') { ?>
      <div class="post-info">
        <?php if( get_theme_mod( 'fitness_gymhouse_date_hide',true) != '') { ?>
          <i class="fa fa-calendar"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('fitness_gymhouse_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'fitness_gymhouse_author_hide',true) != '') { ?>
          <i class="fa fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('fitness_gymhouse_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'fitness_gymhouse_comment_hide',true) != '') { ?>
          <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','fitness-gymhouse'), __('0 Comments','fitness-gymhouse'), __('% Comments','fitness-gymhouse') ); ?></span>
        <?php } ?>
      </div>
    <?php } ?>
    <?php if(get_theme_mod('fitness_gymhouse_blog_description') != 'Post Content'){ ?>
      <div class="post-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the audio file.
            if ( ! empty( $audio ) ) {
              foreach ( $audio as $audio_html ) {
                echo '<div class="entry-audio">';
                  echo $audio_html;
                echo '</div><!-- .entry-audio -->';
              }
            };
          };
        ?>
      </div>
    <?php } ?>
    <?php if(get_theme_mod('fitness_gymhouse_blog_description') == 'Post Content'){ ?>
      <?php the_content(); ?>
    <?php }
    if(get_theme_mod('fitness_gymhouse_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="text"><?php $excerpt = get_the_excerpt(); echo esc_html( fitness_gymhouse_string_limit_words( $excerpt, esc_attr(get_theme_mod('fitness_gymhouse_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('fitness_gymhouse_post_excerpt_suffix','{...}') ); ?></div>
      <?php } ?>
    <?php }?>
    <?php if( get_theme_mod('fitness_gymhouse_button_text','Continue Reading....') != ''){ ?>
      <a class="post-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('fitness_gymhouse_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fitness_gymhouse_button_text','Continue Reading....'));?></span></a>
    <?php }?>
  </div>
</article>
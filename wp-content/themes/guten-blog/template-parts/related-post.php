<?php
$page_template = get_page_template_slug( get_queried_object_id() );
if($page_template == 'single-sidebar.php' || $page_template == 'single-thumbnail.php' ){
    $post_count = '2';
} else {
    $post_count = '3';
}
?>

<div class="related-posts">
    <?php
    $args = array (
        'posts_per_page' => $post_count,
        'post_type' => 'post',
        'category__in' => wp_get_post_categories($post->ID),
        'post__not_in' => array($post->ID)
    );
    // run the query
    $query = new WP_Query( $args ); 
    if( $query->have_posts() ) {
        ?>          
        <h2 class="main-title"><?php esc_html_e( "Related Posts", 'guten-blog' ); ?></h2>          
        <div class="post-holder">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="news-snippet">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </a>                                
                    <?php endif; ?>                            
                    <div class="summary">
                        <h4 class="news-title">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </h4>                                
                        <?php echo esc_html(guten_blog_excerpt( 20 )); ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="" class="readmore">
                            <?php esc_html_e('Read More','guten-blog'); ?> 
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php } ?>
</div>
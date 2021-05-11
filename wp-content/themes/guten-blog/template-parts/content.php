<?php
/**
 * Template part for displaying posts.
 *
 * @package guten_blog
 */
?>

<?php $post_details = get_theme_mod( 'blog_post_show_hide_details', array( 'date', 'categories', 'tags', 'author' ) ); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="news-snippet">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
                <?php the_post_thumbnail( 'medium' ); ?>
            </a>
        <?php endif; ?>
        <div class="summary">
            <span class="category">
                <?php if( in_array( 'categories', $post_details ) ) { ?>
                    <?php $categories = get_the_category();
                    if( ! empty( $categories ) ) :
                        foreach ( $categories as $category ) { ?>
                            <a
                            href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                        <?php }
                    endif; ?>
                <?php } ?>
            </span>
            <h3 class="news-title"><a href="<?php echo esc_url( get_permalink() ); ?>"
                rel="bookmark"><?php the_title(); ?></a></h3>
                <?php if( is_array( $post_details ) && ! empty( $post_details ) ) : ?>
                <div class="info">
                    <ul class="list-inline">

                        <?php 
                        if(get_theme_mod( 'hide_show_author', 'true' )){
                            if( in_array( 'author', $post_details ) ) { ?>
                                <li class="post-author"><i class="icon-user"></i>
                                    <a class="url fn n"
                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                    <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 60 ); ?>
                                    <?php if( $avatar ) : ?>
                                        <div class="author-image">
                                            <?php echo esc_url($avatar); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo esc_html( get_the_author() ); ?>
                                </a>
                            </li>
                        <?php } } ?>

                        <?php 
                        if(get_theme_mod( 'hide_show_date', 'true' )){ ?>
                            <?php if( in_array( 'date', $post_details ) ) { ?>
                                <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                                <li><i class="icon-calendar"></i> <a
                                    href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a>
                                </li>
                            <?php } } ?>

                            <?php if( in_array( 'tags', $post_details ) ) { ?>
                                <?php $tags = get_the_tags();
                                if( ! empty( $tags ) ) :
                                    foreach ( $tags as $post_tag ) { ?>
                                        <li><i class="icon-tags"></i> <a
                                            href="<?php echo esc_url( get_category_link( $post_tag->term_id ) ); ?>"><?php echo esc_html( $post_tag->name ); ?></a>
                                        </li>
                                    <?php }
                                endif; ?>
                            <?php } ?>


                            <?php if( in_array( 'number_of_comments', $post_details ) ) { ?>
                                <li><i class="icon-comment-empty"></i>
                                    <?php comments_popup_link( __( 'zero comment', 'guten-blog' ), __( 'one comment', 'guten-blog' ), __( '% comments', 'guten-blog' ) ); ?>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                <?php endif; ?>

                <?php echo esc_html(guten_blog_excerpt( 20 )); ?>

                <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title=""
                    class="readmore"><?php esc_html_e('Read More','guten-blog'); ?> </a>

                </div>
            </div>
        </div>
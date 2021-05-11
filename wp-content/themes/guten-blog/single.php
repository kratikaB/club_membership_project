<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package guten_blog
 */

get_header();
?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-holder">
            <?php guten_blog_breadcrumb_trail(); ?>
        </div>
    </div>
</div>

<div class="inside-page content-area">
    <div class="container">
        <div class="row">

            <div class="col-sm-12" id="main-content">
                <section class="page-section full-width-view">
                    <div class="detail-content">

                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', 'single' ); ?>
                        <?php endwhile; // End of the loop. ?>
                        <?php comments_template(); ?>

                    </div><!-- /.end of deatil-content -->

                    <?php get_template_part('template-parts/related', 'post'); ?>
                    </section> <!-- /.end of section -->
                </div>

            </div>
        </div>
    </div>

    <?php
    get_footer();
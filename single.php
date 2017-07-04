<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tangyjon
 */

get_header(); ?>

    <div id="container">
    <section id="blog" class="container-fluid">
        <div class="col-lg-8">
            <div class="post">
            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', get_post_format());

                the_post_navigation();

            endwhile; // End of the loop.
            ?>
            </div>
            <?php
            while (have_posts()) : the_post();
                //If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            endwhile; // End of the loop.
            ?>

        </div>

        <div id="sidebar" class="col-md-4">
            <?php get_sidebar('page-templates/page-sidebar-right.php'); ?>
        </div>

    </section><!-- #main -->

<?php
get_footer();

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tangyjon
 */

get_header(); ?>

	<div id="container">
        <section id="blog" class="container-fluid">
            <div id="posts" class="col-lg-8">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
            <div id="sidebar" class ="col-md-4">
                <?php get_sidebar('page-templates/page-sidebar-right.php'); ?>
            </div>
        </section>

<?php
get_sidebar();
get_footer();

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
        <section class="container-fluid">
            <div class="col-lg-8">
                <div class="page-content">
                    
                        <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', get_post_format());

                        // the_post_navigation();

                    endwhile; // End of the loop.
                    ?>
                </div>   
                <div class="comment-content">
                
                    <?php
                    while (have_posts()) : the_post();
                        //If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <div class ="col-md-4">
                <div class="sidebar">
                    <?php get_sidebar('page-templates/page-sidebar-right.php'); ?>
                </div>
            </div>
        </section>

<?php
get_footer();

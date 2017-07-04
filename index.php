<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

get_header(); ?>

<div id="container">
        <section id="blog" class="container-fluid">
            <div id="posts" class="col-lg-8">
                <?php if (have_posts()) : ?>


                    <?php if (is_home() && !is_front_page()) : ?>
                        <!--                <div class="col-lg-12 text-center">-->
                        <!--                    <h1 class="blog-header">--><?php //single_post_title(); ?><!--</h1>-->
                        <!--                </div>-->
                    <?php endif; ?>

                    <!--   Generate the Posts    -->
                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php
                        // Is this the first post of the front page?
                        $first_post = $wp_query->current_post == 0 && !is_paged() && is_front_page();
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        if ($first_post == true) {
                            get_template_part('template-parts/content', 'single');
                        }
                        else {
                            get_template_part('template-parts/content', get_post_format());
                        }

                        ?>

                    <?php endwhile; ?>


                <?php else : ?>
                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>
            </div>

            <div id="sidebar" class ="col-md-4">
                <?php get_sidebar('page-templates/page-sidebar-right.php'); ?>
            </div>
        </section>





<?php get_footer(); ?>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tangyjon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if (is_front_page()) ?>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" id="sct-navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <?php
            wp_nav_menu(array(
                    'menu' => 'primary',
                    'menu_id' => 'primary-menu',
                    'theme_location' => 'primary',
                    'depth' => 1,
                    'container_class'=>'mx-auto',
                    'menu_class' => 'navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'link_class'   => 'nav-link',
                    'walker' => new WP_Bootstrap_Navwalker())
            );
            ?>
        </div>
    </div>
</nav>




</body>


</body>

</html>


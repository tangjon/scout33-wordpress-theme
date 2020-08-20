<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tangyjon
 */

?>

<!-- #content -->

<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Location</h3>
                    <p>680 W 49th Ave
                        <br>Vancouver, BC V5Z 2S4
                        <br>St. Matthias & St. Luke Anglican Church</p>
                </div>
                <div class="col-sm-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/33ScoutGroup/" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i
                                        class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="mailto:info@scout33.org" class="btn-social btn-outline"><span class="sr-only">Mail</span><i
                                        class="fa fa-fw fa-envelope"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCTf6hCQd9nqsAor0aLU0ATA" class="btn-social btn-outline"><span class="sr-only">Youtube</span><i
                                        class="fa fa-fw fa-youtube"></i></a>
                        </li
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo esc_url(__('https://wordpress.org/', 'tangyjon')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'tangyjon'), 'WordPress'); ?></a>
<!--                    <span class="sep"> | </span>-->
<!--                    --><?php //printf(esc_html__('Theme: %1$s built from %2$s.', 'tangyjon'), 'tangyjon', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>

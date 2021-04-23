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

<footer id="sct-footer"  class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Location</h2>
                    <div>
                        <?php echo(get_theme_mod('location-settings')); ?>
                    </div>
<!--                    <p>680 W 49th Ave-->
<!--                        <br>Vancouver, BC V5Z 2S4-->
<!--                        <br>St. Matthias & St. Luke Anglican Church</p>-->
                </div>
                <div class="col-sm-4">
                    <h2>Around the Web</h2>

                    <!-- Facebook -->
                    <a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/33ScoutGroup/" role="button"
                    ><i class="fab fa-facebook-f"></i
                        ></a>


                    <a class="btn btn-primary" style="background-color: #ed302f;" href="https://www.youtube.com/channel/UCTf6hCQd9nqsAor0aLU0ATA" role="button"
                    ><i class="fab fa-youtube"></i
                        ></a>

                    <!-- Youtube -->
                    <a class="btn btn-primary" style="background-color: #333333;" href="mailto:info@scout33.org" role="button"
                    ><i class="fas fa-envelope"></i
                        ></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>

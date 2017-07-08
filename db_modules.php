/**
 * Created by PhpStorm.
 * User: tangj
 * Date: 7/8/2017
 * Time: 10:31 AM
 */

<!--Images from DB-->
<?php
$cat_args = array(
    'category_name'    => 'carousel',
    'orderby'          => 'date',
    'order'            => 'ASC'

);
$count = 1;
$cat_posts = get_posts($cat_args);
?>

<section id="carousel">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!--Images from Cache-->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <?php
            if ( $cat_posts ) {
            foreach ( $cat_posts as $post ) :
            setup_postdata( $post ); ?>

            <?php if($count++ == 1) { ?>
            <div class="item active"> <?php } else { ?> <div class="item"> <?php }?>
                    <?php the_post_thumbnail( 'full', ['class' => 'img-responsive']) ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?php the_title()?></h3>
                        <?php the_content()?>
                    </div>
                </div>

                <?php
                endforeach;
                wp_reset_postdata();
                }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <div class="myarrow">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </div>

            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <div class="myarrow">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </div>
            </a>
        </div>
</section>

<!--    END-->
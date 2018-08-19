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

    <!--Images from CACHE-->
    <section id="carousel">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php bloginfo('template_url'); ?>/images/carousel/group-photo2017.png" alt="Los Angeles"
                         class="img-responsive">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>GROUP PHOTO!</h3>
                        <p>...</p>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/images/carousel/group-photo-camp.png" alt="Chicago"
                         class="img-responsive">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>CAMP!</h3>
                        <p>...</p>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/images/carousel/venturering.png" alt="New York"
                         class="img-responsive">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>TREK ON!</h3>
                        <p>...</p>
                    </div>
                </div>
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

    <?php  
    $notice = get_theme_mod( 'scout33_notice_msg_setting', '' );
    if(!empty($notice)) : 
    ?>
    <section id="notice-strip">
        <div class="container">
            <div id="notice-message" class="row text-left">
                <h1 style="">Notice :</h1>
                <!-- <p>1. Some sections are still accepting members</p>     -->
                <p><?php echo $notice ?></p>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <section id="quick-strip">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a id="ghost" class="hvr-grow" href="http://www.scout33.org/calendar/">
                        <div class="card">
                            <div id="calendar" class="thumbnail">
                                <div class="cardicon">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </div>
                                <div class="caption">
                                    <h3>Calendar</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a id="ghost" class="hvr-grow" href="http://www.scout33.org/calendar/">
                        <div class="card">
                            <div id="form" class="thumbnail">
                                <div class="cardicon">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                </div>
                                <div class="caption">
                                    <h3>Forms</h3>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div id="connect" class="thumbnail">
                            <div class="caption">
                                <h3>Connect</h3>
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
                <div class="col-sm-6 col-md-4">
                    <a id="ghost" class="hvr-grow" href="http://www.scout33.org/resources/">
                    <div class="card">
                        <div id="plus" class="thumbnail">
                            <div class="cardicon">
                                <span class="glyphicon glyphicon-plus aria-hidden=true"></span>
                            </div>
                            <div class="caption">
                                <h3>Resources</h3>

                            </div>
                        </div>
                    </div>
                    </a>

                </div>
                
            </div>
        </div>
    </section>
    <header id="abouts">
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/profile.png">
                    <div class="intro-text">
                        <h1 class="name">We are the 33rd Kerrisdale Scout Group</h1>
                        <hr class="star-light">
                        <span class="skills">Develop Your Path to Greatness</span>
                    </div>
                </div>
            </div>
            <section>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <div id="aboutus" class="caption">
                                <h1>About Us</h1>
                                <p>We are a sized Scouting group proud to be a part of the country’s largest youth
                                    driven organization, Scouts Canada. We strive to lead youth in discovering new
                                    experiences where they would not else where, such as camping, water-sports, hiking,
                                    and much more!
                                    <br><br>Scouts have a lot of fun discovering new things and experiences they
                                    wouldn’t have elsewhere. Along the way they develop into capable, confident and
                                    well-rounded individuals, better prepared for success in the world.
                                    <br><br>Scouting offers a world where you can discover the best in yourself and the
                                    best in others. Dollar for dollar, our programs provide significant value. They run
                                    all year round and offer adventures that youth will remember for a lifetime!</p>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <div id="" class="caption">
                                <h1>Our Volunteers</h1>
                                <p>Volunteers make activites and oppurtunity possible for our group. Without them, we would not be able to create wonderful experiences</p>
                                <a href="<?php site_url(); ?>/volunteers">
                                <button type="button" class="btn btn-primary">See Our Volunteers</button></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div  class="thumbnail">
                            <div id="mission-statement" class="caption">
                                <h3>Our Mission Statement</h3>
                                <hr>
                                <p>The 33rd Group emphasizes the importance of life outside the classroom. Our mission
                                    is leadership development.

                                    We want to graduate motivated learners, problem solvers, effective communicators and
                                    responsible young adults who are ready to make a real difference to the
                                    community.</p>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <div id="schedule" class="caption">
                                <h3>Meeting Schedule</h3>
                                <hr>
                                <h4>BEAVERS</h4>
                                <p>12:30PM to 1:30PM</p>
                                <hr>
                                <h4>CUBS, SCOUTS, VENTURERS</h4>
                                <p>2:00PM to 4:30PM</p>
                                <hr>
                                <h4>Badge Testing</h4>
                                <p>1:30PM</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </header>
    <section id="sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Sections</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img id="section-logo"
                                 src="<?php bloginfo('template_url'); ?>/images/section-logo/beaver-logo.png"
                                 alt="leader-logo">
                            <h3>Beavers</h3>
                            <p>Beaver Scouts opens the door for your child to discover the world. It is filled with a
                                little bit of everything – outdoor activities, games, music and sports. Along the way,
                                Beaver Scouts meet new friends, learn cooperation and teamwork and develop
                                self-confidence</p>
                            <p><a href="<?php site_url(); ?>/section-beavers" class="btn btn-primary" role="button">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img id="section-logo"
                                 src="<?php bloginfo('template_url'); ?>/images/section-logo/cub-logo.png"
                                 alt="leader-logo">
                            <h3>Cubs</h3>
                            <p>With the Cub motto of “Do Your Best” front and centre, Cub Scouts are encouraged to try
                                new and more challenging activities. Learning important first aid skills, paddling a
                                canoe for the first time, or leading a game at camp will open the door for Cubs to try
                                other adventures they never thought possible</p>
                            <p><a href="<?php site_url(); ?>/section-cubs" class="btn btn-primary" role="button">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img id="section-logo"
                                 src="<?php bloginfo('template_url'); ?>/images/section-logo/scout-logo.png"
                                 alt="leader-logo">
                            <h3>Scouts</h3>
                            <p>Scouts enjoy outdoor adventures like mountain biking, rock climbing and lots of camping
                                while working together with other young people to accomplish thrilling challenges</p>
                            <p><a href="<?php site_url(); ?>/section-scouts" class="btn btn-primary" role="button">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img id="section-logo"
                                 src="<?php bloginfo('template_url'); ?>/images/section-logo/venturer-logo.png"
                                 alt="leader-logo">
                            <h3>Venturers</h3>
                            <p>Venturer Scouts learn to nurture an active, healthy lifestyle, acquire the knowledge and
                                skills for career development and participate in thrilling outdoor adventures</p>
                            <p><a href="<?php site_url(); ?>/section-venturers" class="btn btn-primary" role="button">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img id="section-logo"
                                 src="<?php bloginfo('template_url'); ?>/images/section-logo/rover-logo.png"
                                 alt="leader-logo">
                            <h3>Rovers</h3>
                            <p>Rover Scouts participate in adventurous activities like mountain climbing or white water
                                rafting. Helping in their local communities Rover Scouts run service activities such as
                                food drives, park clean-ups and tree plantings. They act in leadership roles with
                                younger Scouting Sections</p>
                            <p><a href="<?php site_url(); ?>/section-rovers" class="btn btn-primary" role="button">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img id="section-logo"
                                 src="<?php bloginfo('template_url'); ?>/images/section-logo/leader-logo.png"
                                 alt="leader-logo">
                            <h3>Leaders</h3>
                            <p>Scouting volunteers have provided generations of Canadian youth with a first opportunity
                                to sleep in a tent, to experience leadership and to build self-reliance and
                                self-confidence. Volunteer dedication, resourcefulness and enthusiasm are vital to
                                Scouting</p>
                            <p><a href="<?php site_url(); ?>/section-leader" class="btn btn-primary" role="button">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row text-center">
     
                        <p>Please contact <b>info@scout33.org</p>
        
            </div>
        </div>
    </section>




<?php

get_footer();




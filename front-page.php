<div id="main-container" class="container-fluid">
    <?php get_header(); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $i = 0;
            $ids = the_featured_image_gallery();
            foreach ($ids as $image_id) {
                $image = get_post($image_id);
                $image_title = $image->post_title;
                $image_caption = $image->post_excerpt;
                if ($i == 0) {
                    echo '<div class="carousel-item active">';
                } else {
                    echo '<div class="carousel-item">';
                }
                echo wp_get_attachment_image($image_id, $size = 'medium ', "", array('class' => "d-block mx-auto img-fluid")) .
                    '<div class="carousel-caption">' .
                    '<h3>' .
                    $image_title .
                    '</h3>' .
                    '<p>' .
                    $image_caption .
                    '</p>' .
                    '</div>' .
                    '</div>';
                $i++;

            }
            ?>
        </div>
        <div class="carousel-indicators">
            <?php for ($j = 0; $j < $i; ++$j) {
                if ($j == 0) {
                    echo '<button data-bs-target="#sct-carousel-indicator" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>';
                } else {
                    echo '<button data-bs-target="#sct-carousel-indicator" data-bs-slide-to="' . $j . '" aria-label="Slide ' . $j . '"></button>';
                }
            } ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <?php
    $notice = get_theme_mod('notice_msg_setting', '');
    if (!empty($notice)) :
        ?>
        <section id="notice-strip">
            <div class="container">
                <div id="notice-message" class="row text-left">
                    <h1 style="">Notice :</h1>
                    <p><?php echo $notice ?></p>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <section id="quick-strip">
        <div class="container">
            <div class="row">
                <!-- Calendar -->
                <div class="col-sm-6 col-md-4">
                    <a id="ghost" class="hvr-grow" href="http://www.scout33.org/calendar/">
                        <div class="card">
                            <div id="calendar" class="thumbnail">
                                <div class="cardicon">
                                    <span class="fas fa-calendar-alt" aria-hidden="true"></span>
                                </div>
                                <div class="caption">
                                    <h3>Calendar</h3>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Form -->
                <div class="col-sm-6 col-md-4">
                    <a id="ghost" class="hvr-grow" href="http://www.scout33.org/form/">
                        <div class="card">
                            <div id="form" class="thumbnail">
                                <div class="cardicon">
                                    <span class="fas fa-list-alt" aria-hidden="true"></span>
                                </div>
                                <div class="caption">
                                    <h3>Forms</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Social Media -->
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div id="connect" class="thumbnail">
                            <div class="caption">
                                <h3>Connect</h3>
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
                </div> <!-- Resources -->
                <div class="col-sm-6 col-md-4">
                    <a id="ghost" class="hvr-grow" href="http://www.scout33.org/resources/">
                        <div class="card">
                            <div id="plus" class="thumbnail">
                                <div class="cardicon">
                                    <span class="fas fa-plus"></span>
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

    <section id="about">
        <img id="about-img" src="<?php bloginfo('template_url'); ?>/images/about-background">
        <div id="about-content">
            <div id="about-title" class="section-title">About Us</div>
            <div class="section-body">We are the <u>33rd Kerrisdale Scout Group</u>, a sized Scouting group proud to be
                a part of the country’s largest youth
                driven organization, Scouts Canada. We strive to lead youth in discovering new
                experiences where they would not else where, such as camping, water-sports, hiking,
                and much more!
                <br><br>Scouts have a lot of fun discovering new things and experiences they
                wouldn’t have elsewhere. Along the way they develop into capable, confident and
                well-rounded individuals, better prepared for success in the world.
                <br><br>Scouting offers a world where you can discover the best in yourself and the
                best in others. Dollar for dollar, our programs provide significant value. They run
                all year round and offer adventures that youth will remember for a lifetime!
            </div>

            <div id="mission-statement">
                <div id="about-title" class="section-title mt-4">Our Mission Statement</div>
                <div class="section-body">
                    The 33rd Group emphasizes the importance of life outside the classroom. Our mission is leadership
                    development. We want to graduate motivated learners, problem solvers, effective communicators and
                    responsible young adults who are ready to make a real difference to the community.
                </div>
            </div>
        </div>
    </section>

    <section id="meeting-schedule">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm text-center">
                    <i class="far fa-calendar-alt" style="font-size: 16em"></i>
                </div>
                <div id="schedule" class="col-sm">
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
    </section>

    <section id="annual-report">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm d-flex justify-content-center">
                    <a id="annual-report-btn" href="<?php echo esc_url(get_theme_mod('annual_report_setting')); ?>">SEE
                        OUR ANNUAL
                        REPORT</a>
                    <span class="glyphicon glyphicon-file"></span>
                </div>
                <div id="schedule" class="col-sm text-center">
                    <i class="fas fa-award" style="font-size: 16em"></i>

                </div>
            </div>
        </div>
    </section>

    <section id="volunteers">
        <div class="section-title">Our Volunteers</div>
        <div class="section-body">
            <p>Volunteers make activites and oppurtunity possible for our group. Without them, we
                would not be able to create wonderful experiences</p>
            <a href="<?php site_url(); ?>/volunteers">
                <button type="button" class="btn btn-primary">See Our Volunteers</button>
            </a>
        </div>
    </section>

    <section id="scouting-sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">Our Sections</div>
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
                            <p><a href="<?php site_url(); ?>/section-beavers" class="btn btn-primary" role="button">More
                                    Info</a>
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
                            <p><a href="<?php site_url(); ?>/section-cubs" class="btn btn-primary" role="button">More
                                    Info</a>
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
                            <p><a href="<?php site_url(); ?>/section-scouts" class="btn btn-primary" role="button">More
                                    Info</a>
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
                            <p><a href="<?php site_url(); ?>/section-venturers" class="btn btn-primary" role="button">More
                                    Info</a>
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
                            <p><a href="<?php site_url(); ?>/section-rovers" class="btn btn-primary" role="button">More
                                    Info</a>
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
                            <p><a href="<?php site_url(); ?>/section-leader" class="btn btn-primary" role="button">More
                                    Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sponsors">
        <div class="container text-center">
            <div class="section-title"><?php echo(get_theme_mod('sponsor_image_title_setting')); ?></div>
            <hr class="star-primary">
            <img id="sponsor-img" src="<?php echo esc_url(get_theme_mod('sponsor_image_setting')); ?>" alt="sponsors"
                 class="img-responsive">
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">Contact Us</div>
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

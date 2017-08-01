<?php

get_header();
?>
<?php
if (have_posts()) :
    /* Start the Loop */
    while (have_posts()) :
        the_post(); ?>

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(<?php the_field('background_image_about')?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <h1><?php the_title()?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start breadcrumb bottom area-->
        <section class="breadcrumb-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left pull-left">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                        <div class="right pull-right">
                            <a href="about.html#">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb bottom area-->

        <!--Start about area-->
        <section class="about-area sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="img-holder">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="Awesome Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="text-holder">
                            <div class="top-text">
                                <?php the_content() ?>
                            </div>

                            <div class="bottom">
                                <!--                                <a class="readmore thm-btn bgclr-1" href="">Read More</a>-->
                                <div class="signature">
                                    <img src="<?php the_field('signature') ?>" alt="Signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bottom-content">
                    <?php if (have_rows('company_statements')):
                        while (have_rows('company_statements')) : the_row(); ?>
                            <!--Start single item-->
                            <div class="col-md-4">
                                <div class="single-item wow fadeInUp animated" data-wow-delay="0s"
                                     data-wow-duration="1s"
                                     data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
                                    <div class="img-holder">
                                        <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('title') ?>">
                                    </div>
                                    <div class="text-holder">
                                        <h3><?php the_sub_field('title') ?></h3>
                                        <p><?php the_sub_field('content') ?></p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        <?php endwhile; endif; ?>

                </div>
            </div>
        </section>
        <!--End about area-->

        <!--Start Smart Approach area-->
        <section class="smart-approach-area">
            <div class="container">
                <div class="sec-title pdb-50 text-center">
                    <h1>Our Smart Approach</h1>
                    <span class="border-center"></span>
                </div>
                <div class="row">
                    <?php if (have_rows('our_smart_approach')):
                    while (have_rows('our_smart_approach')) : the_row(); ?>
                    <!--Start single item-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="inner-content">
                                <div class="iocn-holder">
                                    <span class="flaticon-money"></span>
                                </div>
                                <span class="border"></span>
                                <div class="title-holder">
                                    <h3><?php the_sub_field('title') ?></h3>
                                    <p><?php the_sub_field('sub_title') ?></p>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="box">
                                    <div class="content">
                                        <h3><?php the_sub_field('title') ?></h3>
                                        <b><?php the_sub_field('sub_title') ?></b>
                                        <span class="border"></span>
                                        <p<?php the_sub_field('content') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <?php endwhile; endif; ?>

                </div>
            </div>
        </section>
        <!--End Smart Approach area-->

        <!--Start opportunities area-->
        <section class="opportunities-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content text-center wow zoomIn animated" data-wow-delay="0.5s"
                             data-wow-duration="1s" data-wow-offset="0"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: zoomIn;">
                            <h1><?php the_field('services_snapshot_title')?></h1>
                            <p><?php the_field('services_snapshot_content')?>.</p>
                            <a href="<?php echo site_url().'/services'; ?>">View Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End opportunities area-->
    <?php endwhile; endif; ?>

<?php

get_footer();
?>

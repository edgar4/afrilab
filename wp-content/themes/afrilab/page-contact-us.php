<?php

get_header();
?>
<?php
if (have_posts()) :
    /* Start the Loop */
    while (have_posts()) :
        the_post(); ?>
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area"
                 style="background-image: url(<?php the_field('contact_usbackground_image') ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <h1><?php the_title() ?></h1>
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
                                <li><a href="/">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                        <div class="right pull-right">
                            <a href="<?php echo site_url() . '/contact-us'; ?>">
                        <span><i class=" fa fa-share-alt" aria-hidden="true"></i>Share</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb bottom area-->

        <!--Start contact area-->
        <section class="get-touch-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Get Touch With Us</h1>
                    <span class="border-center"></span>
                    <p><?php the_content() ?></p>
                </div>
                <div class="row">
                    <?php if (have_rows('location_contact_and_opening_days')):

                        // loop through the rows of data
                        while (have_rows('location_contact_and_opening_days')) : the_row(); ?>
                            <!--Start single item-->
                            <div class="col-md-4">
                                <div class="single-item hvr-grow-shadow text-center">
                                    <div class="icon-holder">
                                        <span class="flaticon-magnifying-glass"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3><?php the_sub_field('title') ?></h3>
                                        <span class="border"></span>
                                        <p><?php the_sub_field('description') ?></p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        <?php endwhile; endif; ?>

                </div>
            </div>
        </section>
        <!--End contact area-->

        <!--Start contact form area-->
        <section class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                            <div class="sec-title pdb-50">
                                <h1>Send Your Mesage Us</h1>
                                <span class="border"></span>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="124" title="Contact us form"]') ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-author-info">
                            <div class="sec-title pdb-50">
                                <h1>Your Contact</h1>
                                <span class="border"></span>
                            </div>
                            <ul>
                                <?php if (have_rows('departmental_contacts')):

                                    // loop through the rows of data
                                    while (have_rows('departmental_contacts')) : the_row(); ?>
                                        <li>
                                            <div class="title">
                                                <h3><?php the_sub_field('department') ?></h3>
                                            </div>
                                            <div class="img-holder">
                                                <img src="<?php the_sub_field('image') ?>" alt="">
                                            </div>
                                            <div class="text-holder">
                                                <h5><?php the_sub_field('name') ?></h5>
                                                <p><span class="flaticon-telephone"></span><?php the_sub_field('phone') ?></p>
                                                <p><span class="flaticon-back"></span><?php the_sub_field('email') ?></p>
                                            </div>
                                        </li>
                                    <?php endwhile; endif; ?>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!--End contact form area-->

        <!--Start contact map area-->
        <section class="contact-map-area">
            <div class="container-fluid">
                <div class="google-map-inner">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8061782851523!2d36.774602314952425!3d-1.2905979990586773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a08d58b1c01%3A0x72c5d471abcfe805!2sMethodist+Resort+and+Conference+Centre!5e0!3m2!1sen!2ske!4v1500382488442"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!--End contact map area-->
    <?php endwhile; endif; ?>

<?php

get_footer();
?>

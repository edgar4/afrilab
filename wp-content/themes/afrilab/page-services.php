<?php

get_header();
?>
<?php
if (have_posts()) :
    /* Start the Loop */
    while (have_posts()) :
        the_post();
        $contact_id = 18; ?>
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(img/breadcrumb-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <h1>Sustainability</h1>
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
                                <li><a href="services.html">Services</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">Sustainability</li>
                            </ul>
                        </div>
                        <div class="right pull-right">
                            <a href="##">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb bottom area-->

        <!--Start Business planning area-->
        <section id="single-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 pull-right">
                        <div class="content-box">
                            <!--Start top content-->
                            <div class="row top-content">
                                <!--Start single item-->
                                <div class="col-md-12">
                                    <div class="single-item">
                                        <div class="img-holder">
                                            <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                                        </div>
                                        <div class="text-holder">
                                            <p class="mar-btm15"><?php the_content()?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <!--End top content-->
                            <!--Start Specific Services-->
                            <div class="specific-services">
                                <div class="sec-title pdb-50">
                                    <h1>Specific Services</h1>
                                    <span class="border"></span>
                                </div>
                                <div class="row">
                                    <?php if (have_rows('tippers')):

                                    // loop through the rows of data
                                    while (have_rows('tippers')) : the_row(); ?>
                                    <!--Start single item-->
                                    <div class="col-lg-4 col-md-12">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <span class="flaticon-business-1"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h3><?php the_sub_field('title') ?></h3>
                                                <p><?php the_sub_field('content') ?></p>
<!--                                                <a href="##">Know More</a>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single item-->
                                    <?php endwhile; endif; ?>

                                </div>
                            </div>
                            <!--End Specific Services-->
                            <!--Start Benefits Service content-->
                            <div class="benefits-service-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sec-title pdb-50">
                                            <h1> Why Choose us</h1>
                                            <span class="border"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="text-holder">
                                                    <p><?php the_field('benefits_content')?></p>
                                                    <ul>
                                                        <?php if (have_rows('benefits_of_the_services')):

                                                        // loop through the rows of data
                                                        while (have_rows('benefits_of_the_services')) : the_row(); ?>
                                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i><?php the_sub_field('benefits') ?>
                                                        <?php endwhile; endif; ?>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="video-holder">
                                                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/video-gallery.jpg" alt=" Video Gallery">
                                                    <div class="overlay-gallery">
                                                        <div class="icon-holder">
                                                            <div class="icon">
                                                                <a class="html5lightbox"
                                                                   title="Consultive Video Gallery"
                                                                   href="<?php the_field('video')?>"><img
                                                                        src="<?php echo get_stylesheet_directory_uri()?>/img/play-btn.png" alt="Play Button"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Benefits Service content-->
                            <!--Start accordion box-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="accordion-box">

                                        <?php if (have_rows('quizes')):

                                        // loop through the rows of data
                                        while (have_rows('quizes')) : the_row(); ?>
                                        <!--Start single accordion box-->
                                        <div class="accordion accordion-block">
                                            <div class="accord-btn">
                                                <h4><?php the_sub_field('question') ?></h4>
                                            </div>
                                            <div class="accord-content">
                                                <p><?php the_sub_field('answer') ?> </p>
                                            </div>
                                        </div>
                                        <!--End single accordion box-->
                                        <?php endwhile; endif; ?>

                                    </div>
                                </div>
                            </div>
                            <!--End accordion box-->
                            <!--Start Consultation form-->
                            <div class="consultation-form">
                                <div class="sec-title pdb-50">
                                    <h1>Request Free Consultation</h1>
                                    <span class="border"></span>
                                </div>
                                <?php echo do_shortcode('[contact-form-7 id="124" title="Contact us form"]') ?>
                            </div>
                            <!--End Consultation form-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7 col-xs-12 pull-left">
                        <div class="left-sidebar">
                            <!--Start single sidebar-->
                            <!--                    <div class="single-sidebar">-->
                            <!--                        <ul class="page-link">-->
                            <!--                            <li><a href="#">Business Growth</a></li>-->
                            <!--                            <li><a class="active" href="#">Sustainability</a></li>-->
                            <!--                            <li><a href="#">Performance</a></li>-->
                            <!--                            <li><a href="#">Advanced Analytics</a></li>-->
                            <!--                            <li><a href="#">Organization</a></li>-->
                            <!--                            <li><a href="#">Customer Insights</a></li>-->
                            <!--                        </ul>-->
                            <!--                    </div>-->
                            <!--End single sidebar-->
                            <!--Start single sidebar-->
                            <?php if (get_field('pdf_file') || get_field('doc_file')) : ?>
                                <div class="single-sidebar">
                                    <h3>Our Brochures</h3>
                                    <ul class="brochures-dwn-link">
                                        <?php if (get_field('pdf_file')): ?>
                                            <li>
                                                <a href="<?php the_field('pdf_file') ?>" download>
                                                    <div class="icon-holder">
                                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="title-holder">
                                                        <h5>Download PDF</h5>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (get_field('doc_file')): ?>
                                            <li>
                                                <a href=""<?php the_field('pdf_file') ?>" download>
                                                <div class="icon-holder">
                                                    <i class="fa fa-file-word-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Download DOC</h5>
                                                </div>
                                                </a>
                                            </li>
                                        <?php endif ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                            <!--End single sidebar-->
                            <!--Start single sidebar-->
                            <div class="single-sidebar">
                                <div class="contact-author-info">
                                    <ul>
                                        <?php if (have_rows('departmental_contacts', $contact_id)):

                                            // loop through the rows of data
                                            while (have_rows('departmental_contacts', $contact_id)) : the_row(); ?>
                                                <li>
                                                    <div class="title">
                                                        <h3><?php the_sub_field('department') ?></h3>
                                                    </div>
                                                    <div class="img-holder">
                                                        <img src="<?php the_sub_field('image') ?>" alt="">
                                                    </div>
                                                    <div class="text-holder">
                                                        <h5><?php the_sub_field('name') ?></h5>
                                                        <p><span
                                                                class="flaticon-telephone"></span><?php the_sub_field('phone') ?>
                                                        </p>
                                                        <p><span
                                                                class="flaticon-back"></span><?php the_sub_field('email') ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            <?php endwhile; endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <!--End single sidebar-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Business planning area-->
    <?php endwhile; endif; ?>

<?php

get_footer();
?>

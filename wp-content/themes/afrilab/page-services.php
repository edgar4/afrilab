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
                                    <!--Start single item-->
                                    <div class="col-lg-4 col-md-12">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <span class="flaticon-business-1"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h3>Talent &amp; HR Analytics</h3>
                                                <p>Which of ever undertke laborious physical exercised excepts.</p>
                                                <a href="##">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single item-->
                                    <!--Start single item-->
                                    <div class="col-lg-4 col-md-12">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <span class="flaticon-graphic"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h3>Fraud &amp; Risk Analytics</h3>
                                                <p>Great explorer the master builder working human happiness.</p>
                                                <a href="##">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single item-->
                                    <!--Start single item-->
                                    <div class="col-lg-4 col-md-12">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <span class="flaticon-technology-1"></span>
                                            </div>
                                            <div class="text-holder">
                                                <h3>Marketing Analytics.</h3>
                                                <p>Chooses to enjoy a pleasure that has no anoing consequences.</p>
                                                <a href="##">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single item-->
                                </div>
                            </div>
                            <!--End Specific Services-->
                            <!--Start Benefits Service content-->
                            <div class="benefits-service-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sec-title pdb-50">
                                            <h1>Key Benefits of the Service</h1>
                                            <span class="border"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="text-holder">
                                                    <p>Beguiled and demoralized by the charms of pleasure of the moment,
                                                        so blinded by desire, that they cannot foresee the pain and
                                                        trouble that are bound to ensue beguiled and demoralized.</p>
                                                    <ul>
                                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>Develop
                                                            new ideas and market them
                                                        </li>
                                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>Build
                                                            leadership and management skills
                                                        </li>
                                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>Improve
                                                            manufacturing processes
                                                        </li>
                                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>Build a
                                                            business strategy and plan
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="video-holder">
                                                    <img src="img/video-gallery.jpg" alt="Awesome Video Gallery">
                                                    <div class="overlay-gallery">
                                                        <div class="icon-holder">
                                                            <div class="icon">
                                                                <a class="html5lightbox"
                                                                   title="Consultive Video Gallery"
                                                                   href="https://www.youtube.com/watch?v=-VW_tLcGgwA"><img
                                                                        src="img/play-btn.png" alt="Play Button"></a>
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
                                        <!--Start single accordion box-->
                                        <div class="accordion accordion-block">
                                            <div class="accord-btn">
                                                <h4>What is the procedure to join with your company?</h4>
                                            </div>
                                            <div class="accord-content">
                                                <p>The master-builder of human happiness. No one rejects, dislikes, or
                                                    avoids pleasure itself, because it is pleasure, but because those
                                                    who do not know how to pursue pleasure. </p>
                                            </div>
                                        </div>
                                        <!--End single accordion box-->
                                        <!--Start single accordion box-->
                                        <div class="accordion accordion-block">
                                            <div class="accord-btn active">
                                                <h4>Do you give any offer for premium customer?</h4>
                                            </div>
                                            <div class="accord-content collapsed">
                                                <p>The master-builder of human happiness. No one rejects, dislikes, or
                                                    avoids pleasure itself, because it is pleasure, but because those
                                                    who do not know how to pursue pleasure. </p>
                                            </div>
                                        </div>
                                        <!--End single accordion box-->
                                        <!--Start single accordion box-->
                                        <div class="accordion accordion-block last">
                                            <div class="accord-btn last">
                                                <h4>What makes you special from others?</h4>
                                            </div>
                                            <div class="accord-content last">
                                                <p>The master-builder of human happiness. No one rejects, dislikes, or
                                                    avoids pleasure itself, because it is pleasure, but because those
                                                    who do not know how to pursue pleasure. </p>
                                            </div>
                                        </div>
                                        <!--End single accordion box-->
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
                                <form id="consultation-form" action="##" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="form_name" value="" placeholder="Your Name*"
                                                   required="" aria-required="true">
                                            <input type="email" name="form_email" value="" placeholder="Your Mail*"
                                                   required="" aria-required="true">
                                            <select class="selectmenu" id="ui-id-1" style="display: none;">
                                                <option selected="selected">Select Service</option>
                                                <option>Business Growth</option>
                                                <option>Sustainability</option>
                                                <option>Performance</option>
                                                <option>Advanced Analytics</option>
                                                <option>Organization</option>
                                                <option>Customer Insights</option>
                                            </select><span
                                                class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all"
                                                tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false"
                                                aria-autocomplete="list" aria-owns="ui-id-1-menu"
                                                aria-haspopup="true" style="width: 159px;"><span
                                                    class="ui-icon ui-icon-triangle-1-s"></span><span
                                                    class="ui-selectmenu-text">Select Service</span></span>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="form_message" placeholder="Your Message.." required=""
                                                      aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="thm-btn bgclr-1" type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
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

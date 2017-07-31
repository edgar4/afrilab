<?php
get_header(); ?>
<?php
if (have_posts()) :

    if (is_home() && !is_front_page()) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>

        <?php
    endif;

    /* Start the Loop */
    while (have_posts()) : the_post(); ?>
        <!--Start rev slider wrapper-->
        <section class="rev_slider_wrapper" style="overflow: visible; height: 800px;">
            <div id="slider1" class="rev_slider revslider-initialised tp-simpleresponsive" data-version="5.0"
                 style="margin-top: 0px; margin-bottom: 0px; height: 800px;">
                <ul class="tp-revslider-mainul"
                    style="visibility: visible; display: block; overflow: hidden; width: 100%; height: 100%; max-height: none; left: 0px;">

                    <li data-transition="rs-20" class="tp-revslider-slidesli active-revslide"
                        style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1; background-color: rgba(255, 255, 255, 0);">
                        <div class="slotholder"
                             style="width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="img/slides/1.jpg" alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="defaultimg">-->
                            <div class="tp-dottedoverlay yes"></div>
                            <div class="tp-bgimg defaultimg"
                                 style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;img/slides/1.jpg&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;"
                                 src="img/slides/1.jpg"></div>
                        </div>

                        <div class="tp-parallax-wrap"
                             style="position: absolute; visibility: visible; left: 128px; top: 310px; z-index: 1;">
                            <div class="tp-loop-wrap" style="position:absolute;">
                                <div class="tp-mask-wrap"
                                     style="position: absolute; overflow: hidden; transform: matrix(1, 0, 0, 1, 0, 0); height: auto; width: auto;">
                                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                                         data-voffset="310" data-transform_idle="o:1;"
                                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none"
                                         data-splitout="none" data-responsive_offset="on" data-start="700"
                                         style="visibility: inherit; transition: none; line-height: 26px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 300; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                        <div class="slide-content-box mar-lft">
                                            <h1>
                                               <?php  the_field('banner_text')?></h1>
                                            <p>
                                                <?php  the_field('banner_text_intro')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-parallax-wrap"
                             style="position: absolute; visibility: visible; left: 128px; top: 558px; z-index: 1;">
                            <div class="tp-loop-wrap" style="position:absolute;">
                                <div class="tp-mask-wrap"
                                     style="position: absolute; overflow: visible; height: auto; width: auto;">
                                    <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                                         data-voffset="558" data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                         data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                         data-start="2300"
                                         style="visibility: inherit; transition: none; line-height: 26px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 300; font-size: 16px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                        <div class="slide-content-box mar-lft"
                                             style="transition: none; line-height: 26px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 300; font-size: 16px;">
                                            <div class="button"
                                                 style="transition: none; line-height: 26px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 300; font-size: 16px;">
                                                <a class="" href="<?php echo site_url().'/about-us'?>"
                                                   style="transition: none; line-height: 26px; border-width: 2px; margin: 0px 16px 0px 0px; padding: 12px 28px 11px; letter-spacing: 0px; font-weight: 600; font-size: 14px;">Our
                                                    Company</a>
                                                <a class="btn-style-two" href="<?php echo site_url().'/contact-us'?>"
                                                   style="transition: none; line-height: 26px; border-width: 2px; margin: 0px 16px 0px 0px; padding: 12px 28px 11px; letter-spacing: 0px; font-weight: 600; font-size: 14px;">Contact
                                                    Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="tp-loader spinner0" style="display: none;">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
                <div class="tp-bannertimer"
                     style="visibility: visible; width: 80.88%; transform: translate3d(0px, 0px, 0px);"></div>
                <div class="tp-leftarrow tparrows"
                     style="top: 50%; transform: matrix(1, 0, 0, 1, 20, -25); left: 0px; visibility: hidden; opacity: 0;"></div>
                <div class="tp-rightarrow tparrows"
                     style="top: 50%; transform: matrix(1, 0, 0, 1, -70, -25); left: 100%; visibility: hidden; opacity: 0;"></div>
            </div>
        </section>
        <!--End rev slider wrapper-->

        <!--Start welcome area-->
        <section class="welcome-area sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Welcome to the Consultive</h1>
                    <span class="border-center"></span>
                    <p>We are experts in this industry with over 100 years experience. What that means is you are going
                        to get
                        right solution. please find our services.</p>
                </div>
                <div class="row">
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-service-item text-center">
                            <div class="img-holder">
                                <img src="img/1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <a href="#">
                                        <h3 class="title">About Business</h3>
                                    </a>
                                    <p>We have built enviable reputation in all the consumer goods, heavy industry,
                                        hightech
                                        &amp; manufacturing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-service-item text-center">
                            <div class="img-holder">
                                <img src="img/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <a href="#">
                                        <h3 class="title">Advanced Analytics</h3>
                                    </a>
                                    <p>Business analytics (BA) is the practice ofiterative, methodical exploration of
                                        our
                                        organization's data emphasis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-service-item text-center">
                            <div class="img-holder">
                                <img src="img/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <a href="#">
                                        <h3 class="title">Customer Insignts</h3>
                                    </a>
                                    <p>Customer Insight Analytics solutions delivertargeted and actionable customer
                                        analysis
                                        thathelp financial.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->

                </div>
            </div>
        </section>
        <!--End welcome area-->


        <!--Start about area-->
        <section class="about-area sec-padding">
            <div class="container">
                <div class="sec-title pdb-50 text-center">
                    <h1>About Our Company</h1>
                    <span class="border-center"></span>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="img-holder">
                            <img src="img/about-company.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="text-holder">
                            <div class="top-text">
                                <h3>We are always looking for specific approach to each cases &amp; Provide full
                                    solutions.</h3>
                                <p>We have built an enviable reputation in the consumer goods, heavy industry,
                                    high-tech,
                                    manufacturing, medical, recreational vehicle, and transportation sectors.
                                    multidisciplinary
                                    team of engineering experts, who loves or
                                    pursues or desires to obtain pain of itself, because it is pain occasionally.</p>
                            </div>
                            <div class="bottom-text">
                                <span>Reliable &amp; Trustworthy</span>
                                <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but
                                    because
                                    occasionally circumstances occur in which toil and pain desires to obtain pain of
                                    itself,
                                    because it is pain, but because occur in
                                    which toil and pain.</p>
                            </div>
                            <div class="bottom">
                                <a class="readmore thm-btn bgclr-1" href="#">Read More</a>
                                <div class="signature">
                                    <img src="img/signature.png" alt="Signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promotion-box">
                    <div class="row">
                        <!--Start single box-->
                        <div class="col-md-4">
                            <div class="singel-box hvr-float">
                                <div class="top">
                                    <div class="icon-holder">
                                        <span class="flaticon-innovation"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>Innovative Works</h3>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <p>How all this mistaken idea of denouncing pleasures and praising pain was born and
                                        we will
                                        give you a complete account of the system.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-4">
                            <div class="singel-box hvr-float">
                                <div class="top">
                                    <div class="icon-holder">
                                        <span class="flaticon-shapes"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>Certified Company</h3>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <p>Ever undertakes laborious physical exercise, except to obtain some advantage from
                                        it. To
                                        find fault with a consequences.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-4">
                            <div class="singel-box hvr-float">
                                <div class="top">
                                    <div class="icon-holder">
                                        <span class="flaticon-suitcase"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>Very Experinced</h3>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <p>Again is there anyone who loves or pursues desires to obtain pain of itself,
                                        because it
                                        pain, but because circumstances great pleasure.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                    </div>
                </div>
            </div>
        </section>
        <!--End about area-->

        <!--Start Testimonial area-->
        <section class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-carousel owl-carousel owl-theme owl-loaded">
                            <!--Start single item-->

                            <!--End single item-->
                            <!--Start single item-->

                            <!--End single item-->
                            <!--Start single item-->

                            <!--End single item-->
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-3600px, 0px, 0px); transition: 0.7s; width: 8400px;">
                                    <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                        <div class="single-item">
                                            <div class="text-box">
                                                <p>For any types of Business task, Solutions wordPress theme is the best
                                                    choice
                                                    of embraced innovation to provide a superior level of
                                                    excellence.</p>
                                                <span class="border"></span>
                                            </div>
                                            <div class="client-info">
                                                <h3>Stephanie Gaskel</h3>
                                                <span>Newyork</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls">
                                <div class="owl-nav">
                                    <div class="owl-prev" style="display: none;"><span class="fa fa-angle-left"></span>
                                    </div>
                                    <div class="owl-next" style="display: none;"><span class="fa fa-angle-right"></span>
                                    </div>
                                </div>
                                <div class="owl-dots" style="">
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial area-->

        <!--Start consultations area-->
        <section class="consultations-area sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-info">
                            <div class="sec-title">
                                <h2>Contact Details</h2>
                                <span class="border"></span>
                            </div>
                            <div class="text">
                                <p>Please find below contact details <br>and contact us today!</p>
                            </div>
                            <ul>
                                <li><span class="fa fa-phone"></span>Phone: +321 456 78 901</li>
                                <li><span class="fa fa-envelope"></span>Mailus@Consultive.com</li>
                                <li><span class="fa fa-clock-o"></span>Apple Street, New York, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="request-form">
                            <div class="sec-title pdb-50">
                                <h1>Request For Call Back</h1>
                                <span class="border"></span>
                            </div>
                            <form id="request-form" name="request-form" action="inc/sendmail.php" method="post"
                                  novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="form_name" value="" placeholder="Name *" required=""
                                               aria-required="true">
                                        <input type="text" name="form_phone" value="" placeholder="Ph Num">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="form_email" value="" placeholder="Email *" required=""
                                               aria-required="true">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="thm-btn bgclr-1" type="submit">Submit Now</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        </div>
        </section>

    <?php endwhile;

    the_posts_navigation();

else :

    get_template_part('template-parts/content', 'none');

endif; ?>
<!--End project faq area-->
<?php get_footer(); ?>

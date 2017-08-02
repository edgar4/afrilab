<?php

get_header();
?>
<?php
if (have_posts()) :
    /* Start the Loop */
    while (have_posts()) : the_post(); ?>
        <!--Start breadcrumb are
        <!--Start breadcrumb bottom area-->
        <section class="breadcrumb-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left pull-left">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">Our Projects</li>
                            </ul>
                        </div>
                        <div class="right pull-right">
                            <a href="project.html#">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb bottom area-->

        <!--Start project with text area-->
        <section class="project-area sec-padding">
            <div class="container">
                <div class="row">

                    <?php
                    $images = get_field('gallery');
                    if ($images): ?>
                        <?php foreach ($images as $image): ?>

                            <!--Start single project item-->

                            <div class="single-project-item col-md-4 col-sm-4 col-xs-12">
                                <a href="<?php echo $image['url']; ?>" class="html5lightbox">
                                    <div class="img-holder">
                                        <img src="<?php echo $image['sizes']['thumbnail']; ?>"
                                             alt="<?php echo $image['alt']; ?>">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">

                                                    <h3><?php echo $image['caption']; ?></h3>

                                                    <span><?php echo $image['title']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--End single project item-->
                        <?php endforeach; endif; ?>


                </div>
                <!--                <div class="row">-->
                <!--                    <div class="col-md-12">-->
                <!--                        <ul class="post-pagination text-center">-->
                <!--                            <li><a href="project.html#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>-->
                <!--                            <li class="active"><a href="project.html#">1</a></li>-->
                <!--                            <li><a href="project.html#">2</a></li>-->
                <!--                            <li><a href="project.html#">3</a></li>-->
                <!--                            <li><a href="project.html#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </section>
        <!--End project with text area-->
    <?php endwhile; endif; ?>

<?php

get_footer();
?>
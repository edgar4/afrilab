<!DOCTYPE html>
<!-- saved from url=(0044) -->
<html lang="en" class="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style type="text/css">
        .fancybox-margin {
            margin-right: 15px;
        }
    </style>

    <?php wp_head() ?>
</head>

<body>
<div class="boxed_wrapper">


    <!--Start mainmenu area-->
    <section class="mainmenu-area stricky stricky-fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainmenu-bg clearfix">
                        <!--Start logo-->
                        <div class="logo pull-left">
                            <a href="">
                               <?php the_custom_logo();?>
                            </a>
                        </div>
                        <!--End logo-->
                        <!--Start mainmenu-->
                        <nav class="main-menu pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class'     => 'navigation clearfix',
                                ) );
                                ?>
                            </div>
                        </nav>
                        <!--End mainmenu-->
                        <!--Start mainmenu right box-->
                        <div class="mainmenu-right-box pull-right clearfix">
                            <div class="outer-search-box">
                                <div class="seach-toggle"><i class="fa fa-search"></i></div>
                                <ul class="search-box">
                                    <li>
                                        <form method="post" action="index.html">
                                            <div class="form-group">
                                                <input type="search" name="search" placeholder="Search Here"
                                                       required="">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="quote-button">
                                <a href="#">Get a Quote</a>
                            </div>
                        </div>
                        <!--End mainmenu right box-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End mainmenu area-->
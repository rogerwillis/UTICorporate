<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Universal Technical Institute</title>

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Customizable CSS -->
        <link href="assets/css/main.css" rel="stylesheet" data-skrollr-stylesheet>
        <link href="assets/css/custom.css" rel="stylesheet">
        <link class="rs-file" href="assets/royalslider/royalslider.css" rel="stylesheet">
        <link href="assets/css/blue.css" rel="stylesheet" title="Color">



        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.transitions.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="http://cloud.typography.com/7416432/788802/css/fonts.css" />
        <link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">

        <!-- Icons/Glyphs -->
        <link href="assets/fonts/fontello.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
                    <!--[if lt IE 9]>
                                                                                            <script src="assets/js/html5shiv.js"></script>
                                                                                            <script src="assets/js/respond.min.js"></script>
                                                                                        <![endif]-->
        <style>
            /*===================================================================================*/
            /*	SKROLLR ANIMATIONS
            /*===================================================================================*/
            .header-left.skrollable-after:before {
                height: 70px;
            
            }
            
            body > div > div.header-middle.skrollable-after:after {
                /*background-position: center top;
                top: -54px;
                height: 65px;*/
             display: none;
            }
           
            .navbar .header-left {
                -skrollr-animation-name: shrink-headerleft;
            }
            
            .navbar .header-middle {
                -skrollr-animation-name: shrink-headermiddle;
            }
            
            .header-middle .navbar-nav > li > a {
                -skrollr-animation-name: shrink-headermiddle-links;
            }
            
            .header-middle .search {
                -skrollr-animation-name: shrink-headermiddle-search;
            }
            
            .header-middle::after {
                -skrollr-animation-name: shrink-headermiddleafter;
            }
            
            .navbar .header-right {
                -skrollr-animation-name: shrink-headerright;
            }
            
            .navbar .header-right img {
                -skrollr-animation-name: shrink-headerright-image;
            }
            
            .navbar .requestMoreInfo {
                -skrollr-animation-name: shrink-rmi;
            }
            
            .navbar .navbar-collapse {
                -skrollr-animation-name: shrink-header;
            }
            
            .navbar .navbar-brand img {
                -skrollr-animation-name: shrink-logo;
            }
            
            
            
            @-skrollr-keyframes shrink-headerleft {
                0 {
                    height: 105px;
            
                }
                1 {
                    height: 70px;
                }
            }
            
            @-skrollr-keyframes shrink-headermiddle {
                0 {
                    height: 84px;
                }
                1 {
                    height: 60px;
                }
            }
            
            @-skrollr-keyframes shrink-headermiddle-links {
                0 {
                      padding-top: 25px;
                      padding-bottom: 25px;
                }
                1 {
                      padding-top: 13px;
                      padding-bottom: 13px;
                }
            }
            
            @-skrollr-keyframes shrink-headermiddle-search {
                0 {
                      margin-top: 26px;
                      position:relative;
                }
                1 {
                        margin-top: 3px;
                        right: 7px;
                        position: absolute;
                }
            }
            
            @-skrollr-keyframes shrink-headermiddleafter {
                0 {
                    height: 84px;
                }
                1 {
                    height: 64px;
                }
            }
            
            
            @-skrollr-keyframes shrink-headerright {
                0 {
                   / height: 84px;
                    background-image: url(http://beta.uti.edu/uti/img/hdrleft_bg.png);
                }
                1 {
                    height: 60px;
                    background-image: url(http://beta.uti.edu/uti/img/hdrMiddle_bg.png);
                }
            }
            
            
            
            @-skrollr-keyframes shrink-rmi {
                0 {
                    height: 60px;
                display:inline-block;
                }
                1 {
                    height: 49px;
                display:none;
                }
            }
            
            @-skrollr-keyframes shrink-header {
                0 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    -webkit-box-shadow: 0 10px 10px rgba(0,0,0,0);
                       -moz-box-shadow: 0 10px 10px rgba(0,0,0,0.0);
                            box-shadow: 0 10px 10px rgba(0,0,0,0);
                }
                1 {
                    padding-top: 0;
                    padding-bottom: 0;
                    -webkit-box-shadow: 0 10px 10px rgba(0,0,0,0.1);
                       -moz-box-shadow: 0 10px 10px rgba(0,0,0,0.1);
                            box-shadow: 0 10px 10px rgba(0,0,0,0.1);
                }
            }
            
            @-skrollr-keyframes shrink-logo {
                0 {
                    max-height: 70px;
                }
                1 {
                    max-height: 50px;
                }
            }
            
            
            
        </style>

    </head>
    <body>
        <?php include("navbar.php") ?>


        <!-- ============================================================= MAIN ============================================================= -->
        <main>

            <!-- ============================================================= SECTION – HERO ============================================================= -->
            <section id="hero" >
                <div id="full-width-slider" class="royalSlider heroSlider rsMinW">

                    <div class="rsContent" data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#full-width-slider">
                        <img class="rsImg one" src="http://beta.uti.edu/~/media/images/uti/sliders/home/space-background.ashx" alt="UTI">

                    </div>

                </div>

                <a href="#programs" class="scrollTo circle"> <i class="fa fa-chevron-down"></i></a>
            </section>

            <!-- ============================================================= SECTION – HERO : END ============================================================= -->
            <!-- ============================================================= SECTION – WHO WE ARE ============================================================= -->
            <section class="light-bg">

                <div class="container-fluid inner-left-md inner-right-md">
                    <div class="row">
                        <div class="col-md-12 col-sm-9 center-block text-center">
                            <div class="divider-1"></div>
                            <h1 class="no-bottom-margin">UNIVERSAL TECHNICAL INSTITUTE (UTI)</h1>
                            <h3 class="no-top-margin weight-300 line-height-sm small">TECHNICIAN TRAINING SCHOOL FOR THE TRANSPORTATION INDUSTRY</h3>
                            <div class="divider-1"></div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>


            </section>


            <section id="programs" >

                <div class="container-fluid inner-top-sm inner-bottom-sm inner-left-md inner-right-md" >

                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center" >
                            <header>
                                <h1 >PROGRAMS @ UTI</h1>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row imgboxes_style1">

                        <div class="col-lg-2 col-md-3 col-sm-3 outer-bottom-sm">
                            <img src="http://beta.uti.edu/~/media/images/uti/image%20list/home-auto.ashx" />
                            <h3>AUTO +</h3>
                        </div><!-- /.col -->
                        <div class="col-lg-2 col-md-3 col-sm-3 outer-bottom-sm">
                            <img src="http://beta.uti.edu/~/media/images/uti/image%20list/home-diesel.ashx" />
                            <h3>DIESEL +</h3>
                        </div><!-- /.col -->
                        <div class="col-lg-2 col-md-3 col-sm-3 outer-bottom-sm">
                            <img src="http://beta.uti.edu/~/media/Images/UTI/Image%20List/home-crrt.ashx" />
                            <h3>COLLISION +</h3>
                        </div><!-- /.col -->
                        <div class="col-lg-2 col-md-3 col-sm-3 outer-bottom-sm">
                            <img src="http://beta.uti.edu/~/media/Images/UTI/Image%20List/home-nascar.ashx" />
                            <h3>NASCAR +</h3>
                        </div><!-- /.col -->
                        <div class="col-lg-2 col-md-3 col-sm-3 outer-bottom-sm">
                            <img src="http://beta.uti.edu/~/media/Images/UTI/Image%20List/home-honda.ashx" />
                            <h3>MOTORCYCLE +</h3>
                        </div><!-- /.col -->
                        <div class="col-lg-2 col-md-3 col-sm-3 outer-bottom-sm">
                            <img src="http://beta.uti.edu/~/media/Images/UTI/Image%20List/home-marine.ashx" />
                            <h3>MARINE +</h3>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <!-- ============================================================= SECTION – WHO WE ARE : END ============================================================= -->
            <!-- ============================================================= SECTION – PARTNERS ============================================================= -->
            <section id="partners" class="light-bg">
                <div class="container container inner-top-sm inner-bottom-xs">

                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">
                            <header>
                                <h1 class="no-bottom-margin">WHY CHOOSE UTI?</h1>
                                <p>BECAUSE THE INDUSTRY DOES</p>
                                <p>More relationships with the world's top manufacturers means a better education and more career opportunities for you.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row inner-top-sm">
                        <div id="owl-latest-works" class="owl-carousel owl-item-gap">

                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>VOLVO</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/volvo-auto.ashx" alt="">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>VOLVO PENTA</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/volvo-penta.ashx" alt="">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>MINI</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/mini.ashx">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>MERCEDES</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/mercedes.ashx">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>VOLVO</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/volvo-auto.ashx" alt="">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>VOLVO PENTA</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/volvo-penta.ashx" alt="">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>MINI</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/mini.ashx">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                            <div class="item">
                                <a href="#partners-link">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>MERCEDES</h4>
                                                <p>Learn More</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        <img src="http://beta.uti.edu/~/media/Images/UTI/Grouped%20Content%20Thumbs/Partners/mercedes.ashx">
                                    </figure>
                                </a>
                            </div><!-- /.item -->
                        </div><!-- /.owl-carousel -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <!-- ============================================================= SECTION – PARTNERS : END ============================================================= -->
            <section id="industrys-choice-1">

                <div class="container-fluid inner-top-sm inner-bottom-sm inner-left-md inner-right-md">
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">

                            <header>
                                <h2>INDUSTRY’S CHOICE FOR TRAINED TECHNICIANS</h2>
                                <div class="divider-1"></div>
                                <p class="text-left">When the transportation industry needs technicians, it comes to Universal Technical Institute (UTI). The advanced technologies of today’s
                                    vehicles put skilled technicians in high demand, and a technical education from UTI can provide you with the experience and expertise
                                    desperately needed by manufacturers, dealerships and repair shops nationwide. Technician training at UTI will put you on track to a great
                                    job doing work you love.* In just about one year,** you’ll get the hands-on technical training you need to start a rewarding career as a technician.</p>


                                <p class="text-left"> UTI offers a choice of outstanding technical schools that allow you to pick the program that’s right for you, including auto technician training,
                                    diesel technician training,
                                    auto body training, motorcycle technician training and marine technician training. You can even train for a career on a pit crew at NASCAR Tech.</p>


                                <p class="text-left">  The career of your dreams is within reach with training from UTI, the transportation technology institute that is industry’s choice for professional
                                    technicians. <a href="">Contact UTI today to get started</a>.</p>


                            </header>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>


            </section>


            <section id="industrys-choice-2" class="light-bg">

                <div class="container inner-top-sm inner-bottom-sm inner-left-md inner-right-md">
                    <div class="row">
                        <div class="col-md-10 col-sm-9 center-block text-center">


                            <h4>You’ll be on the path to an exciting future when you enroll in a training program at one of these highly respected tech schools:</h4>
                            <div class="row" style="padding-top:10px;">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12">
                                    <a href="/programs"><img src="http://stage.uti.edu/sitecore/shell/~/media/Images/UTI/Logos/Content/logo-content-uti.ashx"></a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <ul class="fa-ul inner-left-sm">
                                        <li class="bold text-left"><em class="fa-li fa fa-angle-double-right blueText"></em>Universal Technical Institute <br>
                                            <span style="font-weight:300;">Automotive Technology, Diesel Technology, Collision Repair Technology</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12">
                                    <a href="/programs/nascar"><img src="http://stage.uti.edu/sitecore/shell/~/media/Images/UTI/Logos/Content/logo-content-nti.ashx"></a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <ul class="fa-ul inner-left-sm">
                                        <li class="bold text-left"><em class="fa-li fa fa-angle-double-right blueText"></em>NASCAR Technical Institute <br>
                                            <span style="font-weight:300;">Motorsports Technology</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="row" style="padding-top:10px;">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12">
                                    <a href="/programs/motorcycle"><img src="http://stage.uti.edu/sitecore/shell/~/media/Images/UTI/Logos/Content/logo-content-moto.ashx"></a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <ul class="fa-ul inner-left-sm">
                                        <li class="bold text-left"><em class="fa-li fa fa-angle-double-right blueText"></em>Motorcycle Mechanics Institute <br>
                                            <span style="font-weight:300;">Motorcycle Technology</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="row" style="padding-top:10px;">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12">
                                    <a href="/programs/marine"><img src="http://stage.uti.edu/sitecore/shell/~/media/Images/UTI/Logos/Content/logo-content-marine.ashx"></a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <ul class="fa-ul inner-left-sm">
                                        <li class="bold text-left"><em class="fa-li fa fa-angle-double-right blueText"></em>Marine Mechanics Institute <br>
                                            <span style="font-weight:300;">Marine Technology</span></li>
                                    </ul>
                                </div>
                            </div>



                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>


            </section>
            <!-- ============================================================= SECTION – TAKE THE NEXT STEP ============================================================= -->
            <?php include("cta-bottom.php") ?>

            <!-- ============================================================= SECTION – GET IN TOUCH : END ============================================================= -->
        </main>

        <!-- ============================================================= MAIN : END ============================================================= -->
        <?php include("social-media.php") ?>

        <?php include("footer.php") ?>


        <?php include("javascript.php") ?>
        <script>
          jQuery('.navbar').affix({
                        offset: {
                            top: 10
                        }
                    });

            $(window).on('scroll', function () {
                var scrollTop = $(this).scrollTop();

                if ((scrollTop) > 0) {

                    $('.cta-phone-box').css({ 'margin-top': '0', 'z-index':'1' });
                }

                else {

                   $('.cta-phone-box').css({ 'margin-top': '78px' });
                }

            });

        </script>





    </body>


</html>

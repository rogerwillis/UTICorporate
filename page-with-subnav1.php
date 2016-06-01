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

        <?php include("styles.php") ?>
    </head>
    <body>
        <?php include("navbar.php") ?>


        <main>
            <!-- ============================================================= SECTION ============================================================= -->
            <section id="hero">
                <div id="full-width-slider" class="royalSlider heroSlider rsMinW">

                    <div class="rsContent">
                        <img class="rsImg" src="http://beta.uti.edu/~/media/images/uti/sliders/programs/auto/hands-on-02.ashx" alt="">

                    </div>

                </div>

                <a href="#program-overview" class="scrollTo circle">
                    <i class="fa fa-chevron-down"></i>
                </a>
            </section>
            <!-- ============================================================= SECTION END ============================================================= -->
            <!-- ============================================================= SECTION ============================================================= -->
            <!-- subnav here -->
            <div class="navbar subnav uti-blue-bg" role="navigation">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <ul>
                            <li><a href="page-with-subnav1.php" class="selected">Program Overview</a></li>
                            <li><a href="page-with-subnav2.php">Power & Performance</a></li>

                            <li><a href="page-with-subnav3.php">Manufacturer Training</a></li>

                            <li><a href="page-with-subnav4.php">Resources</a></li>
                            <li><a href="page-with-subnav5.php">Campus Locations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section id="program-overview">

                <div class="container inner-top-sm inner-bottom-sm">
                    <h3 class="no-bottom-margin">Program Overview</h3>
                    <div class="row">
                        <div class="col-md-8 col-sm-9">



                            <p>
                            In this 51-week* program, you'll learn how to diagnose,
                            maintain and repair domestic and foreign automobiles.
                            You will also find out how to troubleshoot problems of
                            all kinds, using the latest engine analyzers, handheld
                            scanners and other computerized diagnostic equipment.
                            </p>
                            <p>

                            You'll learn everything from basic engine systems to
                            computerized fuel injection, anti-lock brakes, passenger
                            restraint systems, computerized engine controls and much more.
                            </p>

                        </div><!-- /.col -->
                        <div class="col-md-4"><img src="http://placehold.it/500x300&text=Video" />Auto Program Overview</div>
                    </div><!-- /.row -->
                    <!-- /.col -->
                </div>

            </section>
            <!-- ============================================================= SECTION END ============================================================= -->
            <!-- ============================================================= SECTION ============================================================= -->
            <section id="course-list" class="uti-blue-bg">

                <div class="container inner-top-sm inner-bottom-sm">
                    <div class="row">
                        <h4>
                        YOUR COURSES WILL INCLUDE
                        </h4>
                        <div class="col-md-4">
                            <ul class="fa-ul">
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Automotive Engines &amp; Repair</strong></li>
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Professional Service Writing</strong></li>
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Automotive Power Trains</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="fa-ul">
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Brakes</strong></li>
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Electronic Technology</strong></li>
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Climate Control</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="fa-ul">
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Driveability &amp; Emissions</strong></li>
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong>Advanced Diagnostic Systems</strong></li>
                                <li><em class="fa-li fa fa-angle-double-right whiteText"></em><strong><a href="#power-and-performance" class="scrollTo">Power &amp; Performance</a>**</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </section>
            <!-- ============================================================= SECTION END ============================================================= -->
            <!-- ============================================================= SECTION ============================================================= -->
            <section class="light-bg">

                <div class="container inner-top-sm inner-bottom-sm ">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                            UTI’s Automotive Technology program is Master Certified by the National Automotive
                            Technicians Education Foundation (NATEF), a division of the National Institute for
                            Automotive Service Excellence (ASE).
                            </p>

                            <p>
                            Graduates of UTI’s Automotive Technician Training program are well prepared to complete
                            ASE examinations and can substitute their training for one year of the two years of work
                            experience required to become ASE Certified.
                            </p>
                        </div>
                        <div class="col-md-6"><img src="http://beta.uti.edu/~/media/Images/UTI/Programs%20Images/ASE-Logo-560px.ashx" /></div>
                    </div>
                </div><!-- /.container -->
            </section>
            <!-- ============================================================= SECTION END ============================================================= -->
                </div><!-- /.container -->
            </section>
            <!-- ============================================================= SECTION – TAKE THE NEXT STEP =========================================L=================== -->
            <?php include("cta-bottom.php") ?>

            <!-- ============================================================= SECTION – TAKE THE NEXT STEP : END ============================================================= -->
        </main>


        <?php include("social-media.php") ?>

        <?php include("footer.php") ?>
        <?php include("javascript.php") ?>
        
    </body>


</html>

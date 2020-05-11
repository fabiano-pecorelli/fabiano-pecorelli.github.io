<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANER 2021 - Honolulu, Hawaii, US</title>
        <meta charset="utf-8">
        <meta name="description" content="SANER 2021 - Honolulu, Hawaii, US">
        <meta name="author" content="Kostas Kontogiannis" />
        <meta name="keywords" content="saner, html5, css3, london, ontario, canada, western" />
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Icons/FontAwesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- totop -->
        <link rel="stylesheet" href="css/ui.totop.css" />
        <!-- owl carusol -->
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <!-- zetta menu -->
        <link rel="stylesheet" href="css/zetta-menu.min.css" />
        <!-- Animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon/favicon-96x96.png">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php
          require_once ('./utils/headerTopBar.php');
          require_once ('./utils/navbar.php');
        ?>

        <!-- Breadcrumbs -->
        <?php
          require_once ('./utils/breadcrumb.php');
        ?>
        <!-- end Breadcrumbs -->

        <!-- portfolio section -->
        <section class="content">
            <div class="container">
                <!--<h3>Social Events</h3>
                <hr class="lineHr">-->
                
                <div class="row">
                    <h5>Tuesday February 18th - Workshop Reception</h5>
                    <hr class="lineHr" style="margin-bottom: 10px;">
                    
<!--                        <div class="col-md-7 padd">
                            <div class="owl-carousel owl-item-1">
                                <div class="item">
                                    <img src="img/social/unimol.jpg" alt="University of Molise" />
                                    <div class="description">
                                        <p class="layerCaption">University of Molise</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="col-md-5 padd">
                            <p  style="text-align: justify;">
A workshop reception will be held at The Grad Club, which is located at the ground floor of Middlesex College. Middlesex College is designed in the University's traditional Collegiate Gothic architectural style, the building was constructed in 1959-1960. Its clock tower is 200 feet tall and houses a four-faced five-ton clock. Each clock face is eight feet in diameter and the five bells rings a portion of the traditional 'Big Ben' chime every quarter hour until the full chime is sounded on the hour. 
			    </p>
			    <p  style="text-align: justify;">
The event is open to all workshop and conference attendees and it will start at 18:30. See route from conference meeting rooms <a target="_blank" href="https://goo.gl/maps/buQ7wdFjZoFw8jRE6">here</a>.
                            </p>
                        </div>

                    </div>

                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <h5>Wednesday February 19th - Conference Reception</h5>
                    <hr class="lineHr" style="margin-bottom: 10px;">
                    
                    <div class="col-md-5 padd">
                        <p style="text-align: justify;">
                            The conference reception will be held at the Atrium of the Physics and Astronomy Building. Known as the Natural Science Building when it was built in 1924, the Physics & Astronomy Building is one of the oldest buildings on campus. When it was under construction, the stone masons on the project added a unique touch by carving gargoyles on the building exterior. Although many are covered by ivy, you may see Old Bill with his large mustache, the boy with a toothache and a two-headed gargoyle. The doorways also have carvings surrounding the framework.
			</p>
			<p style="text-align: justify;">
The event will start at 19:00. See route from conference meeting rooms <a target="_blank" href="https://goo.gl/maps/eeR8g5WmVLEsYHmE7">here</a>.</br>
                        </p>
                    </div>
                    
                    <div class="col-md-7 padd">
                        <div class="owl-carousel owl-item-1">
			    <?php for ($i = 1; $i <= 2; $i++) { ?>
                                <div class="item">
                                    <img src="img/social/atrium<?=$i?>.jpg" alt="PAB Atrium" />
                                    <div class="description">
                                        <p class="layerCaption">Physics and Astronomy Building's Atrium</p>
                                    </div>
                                </div>
			    <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <h5>Thursday February 20th - Banquet</h5>
                    <hr class="lineHr" style="margin-bottom: 10px;">
                    
                    <div class="col-md-7 padd">
                        <div class="owl-carousel owl-item-1">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <div class="item">
                                    <img src="./img/social/winderemere<?=$i?>.jpg" alt="Winderemere Grand Hall" />
                                    <div class="description">
                                        <p class="layerCaption">Winderemere Grand Hall</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div> 
                    
                    <div class="col-md-5 padd">
                        <p style="text-align: justify;">
                            The conference banquet will be held at the Grand Hall of Windermere Manor at 19:30. Originally built in 1925 by John Smallman, the son of Thomas Smallman a founding member of the Imperial Oil Company, Windermere Manor is a faithful reflection of classic Tudor architecture.
			</p>
			<p style="text-align: justify;">
Windermere Manor offers guests all the comforts and conveniences of a modern hotel and meeting facility, while still retaining much of its former grace and elegance. The baronial splendor of the Grand Hall with its soaring ceiling, hand-hewn beams, oak balcony and welcoming wood-burning stone fireplace serve as reminders of its grand and glorious past.<br/>
                        </p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        
        <!-- footer -->
        <?php require_once ('./utils/footer.php') ?>
        <!-- end footer -->

        <!-- jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.ui.totop.min.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            //Animation Wow.js
            new WOW().init();
        </script>

    </body>
</html>

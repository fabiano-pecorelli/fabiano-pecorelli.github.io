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
        require_once('./utils/headerTopBar.php');
        require_once('./utils/navbar.php');
      ?>

      <!-- Breadcrumbs -->
      <?php
        require_once('./utils/breadcrumb.php');
      ?>
      <!-- end Breadcrumbs -->

        <!-- service section -->
        <section id="service" class="content">
            <div class="container">
                <div class="row">
		    <p style="text-align: justify;" class="padd">
			<b>Shuttle bus:</b><br />
			A shuttle bus will be available for the conference attendees. The bus will perform connections between the recommended hotels and Somerville House, where the conference will be held. The exact timetable will be available <a href="shuttleBus">here</a>.
                    </p>
		    <p style="text-align: justify;" class="padd">
                        <b>Regular bus:</b><br />
			If you choose to stay at another hotel, or would like to go around London, bus tickets will be provided to each and every conference attendee. Further information on bus routes and timetables can be found in the <a target="_blank" href="http://www.londontransit.ca/">official website of the London Transit Commission</a>. 
                    </p>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end service section -->

        <!-- footer -->
        <?php require_once('./utils/footer.php') ?>
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

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
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Icons/FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!-- totop -->
    <link rel="stylesheet" href="css/ui.totop.css"/>
    <!-- owl carusol -->
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <!-- zetta menu -->
    <link rel="stylesheet" href="css/zetta-menu.min.css"/>
    <!-- layerSlider -->
    <link rel="stylesheet" href="css/layerslider.css"/>
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css"/>
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="css/style.css"/>

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

<!-- what-we-do -->
<section id="what-we-do" class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="text-align: justify;">
			<h5>US citizens</h5>
			If you are a U.S. citizen or permanent resident, you must carry proof of citizenship such as a passport, birth certificate, a certificate of citizenship or naturalization, a U.S. Permanent Resident Card, or a Certificate of Indian Status along with photo identification. If you are a U.S. permanent resident, ensure you carry proof of your status such as a U.S. Permanent Resident Card.
		</p>
		<p style="text-align: justify;">
			<h5>Citizens of other countries</h5>
			Depending on your country of origin, either a visitor visa or an electronic travel authentication (eTA) will be required for your entry in Canada. To find out which one is required in your case, follow <a target="_blank" href="https://www.cic.gc.ca/english/visit/visas.asp">this link</a> (hosted by the goverment of Canada) and answer the questions there. To obtain a visitor visa, a number of documents are to be submitted, including a letter of invitation. If you need a letter of invitation, make sure you answer yes in the corresponding question during the <a href="registration">registration process</a>. Processing times vary by country, so make sure to apply as soon as possible.
		</p>
		<p style="text-align: justify;">
			For further information on the type of documentation required for your entry in Canada, as well as to electronically apply for a visitor visa or eTA, follow the following links:
			<ul>
			  <li><a target="_blank" href="https://travel.gc.ca/returning/travelling-to-canada">Travelling to Canada</a></li>
			  <li><a target="_blank" href="https://www.cic.gc.ca/english/visit/visas.asp">Find out if you need a visa and apply</a></li>
			  <li><a target="_blank" href="https://www.cbsa-asfc.gc.ca/travel-voyage/ivc-rnc-eng.html">Information for visitors to Canada</a></li>
			</ul>
		</p>
            </div>
        </div>
    </div><!-- end of row -->
</section>

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
<script src="js/greensock.js"></script>
<script src="js/layerslider.transitions.js"></script>
<script src="js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/importantDates.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script>
    jQuery("#layerslider").layerSlider({
        responsive: false,
        responsiveUnder: 1280,
        layersContainer: 1280,
        skin: 'noskin',
        hoverPrevNext: false,
        skinsPath: '../layerslider/skins/'
    });
</script>

<script>
    //Animation Wow.js
    new WOW().init();
</script>

</body>
</html>

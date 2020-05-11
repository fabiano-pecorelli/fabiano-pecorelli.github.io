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
    <!-- layerSlider -->
    <link rel="stylesheet" href="css/layerslider.css" />
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon-96x96.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .prog_leisure td:nth-child(2) {
            font-style: italic;
        }
        
        .prog_social {
            background-color: #ffdddd;
        }
        
        .prog_social td:nth-child(2) {
            font-weight: bold;
        }
        
        .prog_social a {
            color: black;
        }
        
        .prog_global {
            background-color: #eeffee;
        }
        .prog_global td:nth-child(2) {
            font-weight: bold;
        }
        
        .prog_functional {
            background-color: #eeeeee;
        }
        
        .prog_sessions {
            background-color: #ffffff;
        }
        .prog_sessions td:nth-child(2) {
            font-weight: bold;
        }
        
        table.program {
            line-height: 21px;
/*             border-color: #3a3a3a; */
            
/*             border-collapse: separate; */
/*             border-spacing: 0; */
/*             border-width: 1px 0 0 1px; */
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 0 0 1.5em;
        }
        
        .program td {
            padding: 8px;
            
        }
        
        .program tr td:nth-child(1) {
            width: 5%;
        }
        
        .program tr td:nth-child(2) {
            width: 50%;
        }
        
        .program .header td {
            padding: 8px;
        }
    </style>

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

<!-- acceptedPapers -->
<section id="acceptedPapers" class="content">
    <div class="container">
        <div class="row padd">
            <div class="col-md-12">
                <h3>Program Overview</h3>
                <hr class="lineHr">
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><span style="color: #ffffff;"><strong>Tuesday, 18th</strong><br/></span></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-17:30</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions</td>
                            </tr>
<!--                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">12:30-14:00</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">14:00-15:30</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">15:30-16:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">16:00-17:30</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions</td>
                            </tr> -->
                            
                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td style="text-align: left;" align="center" valign="top"><a href="socialEvents">Workshop Reception</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Wednesday, 19th </span></strong></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Keynote (Prof.Ying Zou)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">12:30-13:30</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:30-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">15:00-15:15</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:15-16:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:45-17:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">17:00-18:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research,
ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td style="text-align: left;" align="center" valign="top"><a href="socialEvents">Conference Reception</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Thursday, 20th </span></strong></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Keynote (Jonathan Maletic)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">12:30-13:30</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:30-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">15:00-15:15</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:15-16:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:45-17:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">17:00-18:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research,
ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
			    <tr class="prog_global">
                                <td valign="top">18:00-18:45</td>
                                <td style="text-align: left;" align="center" valign="top">Most Influential Paper Awards</td>
                            </tr>
			    <tr class="prog_global">
                                <td valign="top">18:45-19:30</td>
                                <td style="text-align: left;" align="center" valign="top">Open Steering Commitee Meeting</td>
                            </tr>
                            <tr class="prog_social">
                                <td valign="top">20:00</td>
                                <td style="text-align: left;" align="center" valign="top"><a href="socialEvents">Banquet</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Friday, 21st </span></strong></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Keynote (Christian Bird)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">12:30-13:30</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:30-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research, ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">15:00-15:15</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
			    <tr class="prog_sessions">
                                <td valign="top">15:15-16:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research,
ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:45-17:00</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>

                            <tr class="prog_sessions">
                                <td valign="top">17:00-18:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (Research,
ERA, Tool Demo, RENE, Industry, Journal-First, Late Breaking Ideas)</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">18:00-18:45</td>
                                <td style="text-align: left;" align="center" valign="top">Closing</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div><!-- end of row -->
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
<script src="js/greensock.js"></script>
<script src="js/layerslider.transitions.js"></script>
<script src="js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/importantDates.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script>
    /* DOPO APERTURA DEL MODAL */
    $("#bioBosh, #abstractBosh").on('shown.bs.modal', function(e){
        $('li.zm-active').removeClass('zm-active')
    });
    /* DOPO LA CHIUSURA DEL MODAL */
    $("#bioBosh, #abstractBosh").on('hidden.bs.modal', function(e){
        $('#key').addClass('zm-active')
    });
</script>

<script>
    //Animation Wow.js
    new WOW().init();
</script>

</body>
</html>

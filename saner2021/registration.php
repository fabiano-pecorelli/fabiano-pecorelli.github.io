<!DOCTYPE html>
<?php
$registration_mail = "kostas@csd.uwo.ca";

$open_reg = strtotime("12/13/2019 12:10 America/Toronto");
$early_reg = strtotime("1/31/2020 23:59 America/Toronto");

$registration_open = time() >= $open_reg;
$late_registration = time() >= $early_reg;

$registration_link = "https://conference.has.uwo.ca/Register/default.aspx?code=C000748";

?>
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
        <style>
            table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
                border-width: 1px 0 0 1px;
                margin: 0 0 1.5em;
                width: 100%;
            }
            
            td {
                border-width: 0 1px 1px 0;
            }
            
            th, td {
                padding: 8px;
            }
            
            table, th, td {
                border: 1px solid rgba(0, 0, 0, 0.1);
                border-top-width: 1px;
                border-right-width: 1px;
                border-bottom-width: 1px;
                border-left-width: 1px;
            }
            
            caption, th, td {
                text-align: left;
                padding: 5px;
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

        <!-- portfolio section -->
        <section class="content" id="sectionRegistration">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align:justified;">
                           <?php 
                            if ($registration_open) { 
                                echo "The <a target=\"_blank\" href=\"$registration_link\">registration system</a> is open.<br/>";
                            } else {
                                echo "The registration system will be open sometime soon..";
                            }
                            ?>
                        </p>
			<p style="text-align:justified;">    
                            At least <b>one author per paper</b> has to register before January 31st, 2020. Student authors can register at student rates unless the student is the sole author attending for a given paper. In that case, the author must register at professional rate (see below).
                        </p>
                        
                        <!--For registering you first need to create an account. Using the account, you can register to all SANER events. Note, modifications are only possible as long as the payment has not been performed.</p>-->
                        
                        <p style="text-align:justified;">Please select the corresponding registration type in the registration system. Furthermore, please complete the payment to guarantee your registration. A receipt for your registration fee will be send to you at your email of choice.</p>
                        
                        <p style="text-align:justified;">The deadline for early registration is 23:59 of January 31st, 2020, Eastern Standard Time (GMT-5)</p>
                        
<!--                        <p style="text-align:justified;">The deadline for online registration is 23:59 of January 27th, 2020</b>, Eastern Stndard Time (GMT-5)</b></p>-->
                        
                        <p style="text-align:justified;">For questions about the registration, please contact <a href="mailto:<?=$registration_mail?>"><?=$registration_mail?></a>.</p>
                        
                        <p>&nbsp;</p>
                        
                        <h4>Fees</h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td valign="top" bgcolor="#3a3a3a" width="200" style="font-weight: bold;" ><span style="color: #ffffff;">Membership</span></td>
                                    <td valign="top" bgcolor="#3a3a3a" width="207" style="font-weight: bold;" ><span style="color: #ffffff;">Registration Type</span></td>
                                    <td valign="top" bgcolor="#3a3a3a" width="106" style="font-weight: bold;" ><span style="color: #ffffff;">Early Registration</span></td>
                                    <td valign="top" bgcolor="#3a3a3a" width="98"  style="font-weight: bold;" ><span style="color: #ffffff;">Late Registration</span></td>
                                </tr>
                                <tr>
                                    <td>IEEE/IEEE CS Membership (professional rate)<sup>+</sup></td>
                                    <td>All Events</td>
                                    <td>800 CAD</td>
                                    <td>960 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>One Day</td>
                                    <td>300 CAD</td>
                                    <td>360 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Workshops</td>
                                    <td>350 CAD</td>
                                    <td>420 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Non member (professional rate)<sup>+</sup></td>
                                    <td>All Events</td>
                                    <td>960 CAD</td>
                                    <td>1,200 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>One Day</td>
                                    <td>360 CAD</td>
                                    <td>450 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Workshops</td>
                                    <td>450 CAD</td>
                                    <td>560 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>IEEE/IEEE CS Student Member<sup>*+</sup></td>
                                    <td>All Events</td>
                                    <td>600 CAD</td>
                                    <td>700 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>One Day</td>
                                    <td>200 CAD</td>
                                    <td>240 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Workshops</td>
                                    <td>350 CAD</td>
                                    <td>420 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>CS Student Non member<sup>*</sup></td>
                                    <td>All Events</td>
                                    <td>780 CAD</td>
                                    <td>850 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>One Day</td>
                                    <td>300 CAD</td>
                                    <td>375 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Workshops</td>
                                    <td>450 CAD</td>
                                    <td>560 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>IEEE Life/Retired Member<sup>+</sup></td>
                                    <td>All Events</td>
                                    <td>500 CAD</td>
                                    <td>620 CAD</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>One day</td>
                                    <td>200 CAD</td>
                                    <td>240 CAD</td>
                                </tr>
                                <!--<tr>
                                    <td></td>
                                    <td>Workshop</td>
                                    <td>TBD</td>
                                    <td>TBD</td>
                                </tr>-->
                            </tbody>
                            </table>
                            
                            <p style="text-align:justified;">
                                <sup>*</sup>Students are requested to show their Student ID issued by their affiliation at the registration desk.<br />
                                <sup>+</sup>IEEE members are requested to show their IEEE membership card at the registration desk.
                            </p>
                            
                            <p>&nbsp;</p>
                            
                            <h4>What is covered</h4>
                            
                            <table>
                            <tbody>
                                <tr>
                                    <td valign="top" bgcolor="#3a3a3a" width="20%"><span style="color: #ffffff;">Registration Type</span></td>
                                    <td valign="top" bgcolor="#3a3a3a" width="80%"><span style="color: #ffffff;">Covered</span></td>
                                </tr>
                                <tr>
                                    <td>All events</td>
                                    <td>Proceedings, breakfast, lunch, coffee break snacks, workshop reception ticket, banquet ticket, conference reception ticket and access to all SANER sessions</td>
                                </tr>
                                <tr>
                                    <td>Workshops</td>
                                    <td>Proceedings, breakfast, lunch, coffee break snacks, workshop reception ticket and access to the workshops sessions</td>
                                </tr>
                                <tr>
                                    <td>One day</td>
                                    <td>Proceedings, breakfast, lunch, coffee break snacks and access to the sessions of one day of the main conference<sup>1</sup></td>
                                </tr>
                            </tbody>
                            </table>
                            
                             <p style="text-align:justified;">
                                <sup>1</sup> Social events tickets are NOT included.
                            </p>
                            
                             <p>&nbsp;</p>
                            
                            <table>
                            <tbody>
                                <tr>
                                    <td valign="top" bgcolor="#3a3a3a" width="135"><span style="color: #ffffff;">Extra Ticket</span></td>
                                    <td valign="top" bgcolor="#3a3a3a" width="207"><span style="color: #ffffff;">Fee</span></td>
                                </tr>
                                <tr>
                                    <td>Workshop Reception Ticket</td>
                                    <td>35 CAD + tax per person</td>
                                </tr>
                                <tr>
                                    <td>Banquet Ticket</td>
                                    <td>75 CAD + tax per person</td>
                                </tr>
                                <tr>
                                    <td>Conference Reception Ticket</td>
                                    <td>35 CAD + tax per person</td>
                                </tr>
                            </tbody>
                            </table>
                            
                            <p>&nbsp;</p>
                            
                            <h4>Changes and Cancellation Policy</h4>
                            <p style="text-align:justified;">
                                <strong>Changes</strong> of already paid registrations are only possible through the SANER 2020 registration office. Send an email mentioning your registration id and listing your changes to <a href="mailto:<?=$registration_mail?>"><?=$registration_mail?></a>.
                            </p>
                            <p style="text-align:justified;">
                                <strong>Cancellations</strong> of already paid registrations are only possible through the SANER 2020 registration office. Send an email mentioning your registration id to <a href="mailto:<?=$registration_mail?>"><?=$registration_mail?></a>. Cancellations made until <strong>January 27th, 2020</strong> will be accepted subject to a <strong>75 CAD</strong> cancellation fee. Refunds will be made within 30 days after the end of the conference. Cancellations will not be accepted after January 27th, 2020.
                            </p>
                            <p style="text-align:justified;">
                                <strong>“No shows”</strong> are not refundable and are liable for the full registration fee. Instead of cancelling, your registration may be transferred to a colleague. If you would like to transfer your registration to a colleague, please email <a href="mailto:<?=$registration_mail?>"><?=$registration_mail?></a>.
                            <!--Registration is open. You can now register <a target="_blank" href="https://conference.has.uwo.ca/Register/default.aspx?code=C000748">here</a>.-->
                            </p>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
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

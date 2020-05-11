<?php
    function insession($name) {
        include("sessions/" . $name . ".php");
    }
    
    function paper() {
        return "<i class=\"fas fa-file-alt\"></i>";
    }
    
    function tooldemo() {
        return "<i class=\"fas fa-wrench\"></i>";
    }
    
    function era() {
        return "<i class=\"fas fa-spinner\"></i>";
    }
    
    function rene() {
        return "<i class=\"fas fa-flask\"></i>";
    }
    
    function industry() {
        return "<i class=\"fas fa-industry\"></i>";
    }
    
    function jf() {
        return "<i class=\"fas fa-clipboard\"></i>";
    }

    function lbi() {
        return "<i class=\"fas fa-clock\"></i>";
    }
?>
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
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

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
        details summary {
            cursor: pointer;
        }
        
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
        .prog_sessions td summary {
             font-weight: bold;
        }
        
        ul {
            list-style-type: none;
        }
        
        .program_paper i {
            margin-left: -20px;
            padding-right: 6px;
        }
        
        .program_paper .title {
            display: block;
            margin-top: -20px;
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
        }
        
        .program .header td {
            padding: 8px;
	    font-weight: bold;
        }
        
        .program_paper .title {
        }
        
        .program_paper .authors {
            font-style: italic;
            font-size: 10pt;
        }
        
        .chair {
            font-weight: normal;
            padding-top: 4px;
            font-size: 10pt;
        }
	.room {
            font-weight: normal;
	    font-style: italic;
            padding-top: 4px;
            font-size: 12pt;
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
                <h3>Daily Schedule</h3>
                <hr class="lineHr">               
                <h5>Legend:</h5>
		<table style="padding:20px; border-spacing:20px;" width="400">
			<tr class="header">
				<td><strong></strong></td>
				<td><strong>  Paper Type</strong></td>
				<td><strong>Duration</strong></td>
			</tr>
                	<tr>
                    		<td><?= paper() ?></td>
				<td>  Technical Research Paper</td>
				<td>30 minutes</td>
			</tr>
			<tr>
                                <td><?= jf() ?></td>
                                <td>  Journal First Paper</td>
                                <td>30 minutes</td>
                        </tr>
			<tr>
                                <td><?= tooldemo() ?></td>
                                <td>  Tool Demo</td>
                                <td>10 minutes</td>
                        </tr>
			<tr>
                                <td><?= era() ?></td>
                                <td>  ERA Track Paper</td>
                                <td>10 minutes</td>
                        </tr>
			<tr>
                                <td><?= rene() ?></td>
                                <td>  RENE Track Paper</td>
                                <td>30 minutes</td>
                        </tr>
			<tr>
                                <td><?= industry() ?></td>
                                <td>  Industry Track Paper</td>
                                <td>10 minutes</td>
                        </tr>
			<tr>
                                <td><?= lbi() ?></td>
                                <td>  Late Breaking Ideas Track Paper   </td>
                                <td>10 minutes</td>
                        </tr>
		</table>
                <br/><br/>
               	    
		    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="5" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Tuesday, 18th </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left;" align="center" valign="top">Room 1 - SH 2316</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2 - SH 2317</td>
				<td style="text-align: left;" align="center" valign="top">Room 3 - SH 2355</td>
				<td style="text-align: left;" align="center" valign="top">Room 4 - SH 3315</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td colspan="4" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
			    <tr class="prog_sessions">
                                <td valign="top">09:00-17:30</td>
                                <td style="text-align: left;" align="center" valign="top"><a target="_blank" href="http://vst2020.scch.at/#program">VST 2020</a></td>
                                <td style="text-align: left;" align="center" valign="top"><a target="_blank" href="https://iwsc2020.github.io/pages/program.html">IWSC 2020</a></td>
				<td style="text-align: left;" align="center" valign="top"><a target="_blank" href="https://ibf2020.github.io/#Program">IBF 2020</a></td>
                                <td style="text-align: left;" align="center" valign="top"><a target="_blank" href="http://www.agile-group.org/iwbose2020/program/">IWBOSE 2020</a></td>
                            </tr>
			</tbody>
		     </table>	
			 
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="3" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Wednesday, 19th </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left; width: 48%" align="center" valign="top">Room 1 - SH 2316</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2 - SH 2317</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <!--<tr class="prog_global">
                                <td valign="top">08:30-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    Opening<br/>
                                    <div class="chair">Session Chairs: Rocco Oliveto, Massimiliano Di Penta, David C. Shepherd</div>
                                </td>
                            </tr>-->
                            <tr class="prog_global">
                                <td valign="top">09:00-10:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    "Effective Management of Clones" by Professor Ying Zou (<a href="keynotes">details</a>)<br/>
				    <div class="room">Room SH 3345</div>
                                    <!--<div class="chair">Session Chair: Massimiliano Di Penta</div>-->
                                </td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("repository_mining"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("seeking_context"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">12:30-13:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
					Lunch
				</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:30-15:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("refactoring"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("clones"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">15:00-15:15</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:15-16:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("code_reviews"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("android"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:45-17:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">17:00-18:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("program_comprehension"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("tools"); ?></td>
                            </tr>
                            <tr class="prog_global">
				<td valign="top">18:00-18:45</td>
				<td colspan="2" style="text-align: left;" align="center" valign="top">
                                    Closed Steering Commitee meeting
				</td>
			    </tr>
                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top"><a href="socialEvents">Conference Reception @ Atrium of Physics and Astronomy Building</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="3" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Thursday, 20th </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left; width: 48%" align="center" valign="top">Room 1 - SH 2316</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2 - SH 2317</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    "srcML a Retrospective: The Trials and Tribulations of Building Real Software in an Academic Environment" by Professor Jonathan Maletic (<a href="keynotes">details</a>)<br/>
				    <div class="room">Room SH 3345</div>
                                    <!--<div class="chair">Session Chair: Rocco Oliveto</div>-->
                                </td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("energy_dissipation"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("ml_and_se"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">12:30-13:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
					Lunch
				</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:30-15:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("compilers"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("apis"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">15:00-15:15</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:15-16:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("bugs"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("software_evolution"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:45-17:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">17:00-18:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("repository_practices"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("technical_debt"); ?></td>
                            </tr>
			    <tr class="prog_global">
                                <td valign="top">18:00-18:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                        MIP Award Session<br/>
                                        <div class="chair">Session Chair: Giulio Antoniol and Rudolf Ferenc</div>
					<div class="room">Room SH 3345</div>
                                </td>
                            </tr>
			    <tr class="prog_global">
				<td valign="top">18:45-19:30</td>
				<td colspan="2" style="text-align: left;" align="center" valign="top">
					Open Steering Commitee Meeting</br>
					<div class="room">Room SH 3345</div>
				</td>
                            </tr> 
                            <tr class="prog_social">
                                <td valign="top">20:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top"><a href="socialEvents">Banquet @ Winderemere Grand Hall</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="3" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Friday, 21st </span></strong></td>
                            </tr>
                            <tr class="header">
                                <td valign="top">Time</td>
                                <td style="text-align: left; width: 48%" align="center" valign="top">Room 1 - SH 2316</td>
                                <td style="text-align: left;" align="center" valign="top">Room 2 - SH 2317</td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    "Lessons and Insights from Tech Transfers at Microsoft" by Dr. Christian Bird (<a href="keynotes">details</a>)<br/>
				    <div class="room">Room SH 3345</div>
                                    <!--<div class="chair">Session Chair: David C. Shepherd</div>-->
                                </td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:30-11:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:00-12:30</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("software_architecture"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("visualization"); ?></td>
                            </tr>
                            
                            <tr class="prog_leisure">
                                <td valign="top">12:30-13:30</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
					Lunch
				</td>
                            </tr>
                            
                            <tr class="prog_sessions">
                                <td valign="top">13:30-15:00</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("blockchain"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("vulnerability_detection"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">15:00-15:15</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:15-16:45</td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("bugs2"); ?></td>
                                <td style="text-align: left;" align="center" valign="top"><?php insession("mobile_apps"); ?></td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:45-17:00</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">17:00-18:00</td>
				<td style="text-align: left;" align="center" valign="top"><?php insession("collaboration"); ?></td>
				<td style="text-align: left;" align="center" valign="top"><?php insession("testing"); ?></td>
			    </tr>
                            <tr class="prog_global">
                                <td valign="top">18:00-18:45</td>
                                <td colspan="2" style="text-align: left;" align="center" valign="top">
                                    Closing<br/>
                                    <!--<div class="chair">Session Chairs: Rocco Oliveto, Serge Demeyer</div>-->
                                </td>
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

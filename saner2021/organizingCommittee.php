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
        <!-- Load members' file -->
        <?php
        $content = file_get_contents('config/production.json');
        $json = json_decode($content, true);
        ?>

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="top-description-text" style="text-align: left;">
                            <h3>General Chair</h3>
                            <hr class="lineHr">
                        </div><!-- end top-description-text -->
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: left;">
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="img-circle" src=<?php echo $json['generalChair']['img'] ?> alt=<?php echo $json['generalChair']['name'] ?> />
                                                </div>
                                                <div class="col-md-4">
                                                    <?php if (!is_null($json['generalChair']['website'])) { ?>
                                                        <a href="<?php echo $json['generalChair']['website'] ?>" target="_blank"><?php echo $json['generalChair']['name'] ?></a>
                                                    <?php } else { ?>
                                                        <a><?php echo $json['generalChair']['name'] ?></a>
                                                    <?php } ?>
                                                    <p style="margin: 0;"><?php echo $json['generalChair']['affiliation'] ?></p>
                                                    <p><?php echo $json['generalChair']['nation'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--
                        <div class="top-description-text" style="text-align: left;">
                            <h3>General co-Chair</h3>
                            <hr class="lineHr">
                        </div><!-- end top-description-text 
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: left;">
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="img-circle" src=<?php echo $json['generalCoChair']['img'] ?> alt=<?php echo $json['generalCoChair']['name'] ?> />
                                                </div>
                                                <div class="col-md-4">
                                                    <?php if (!is_null($json['generalCoChair']['website'])) { ?>
                                                        <a href="<?php echo $json['generalCoChair']['website'] ?>" target="_blank"><?php echo $json['generalCoChair']['name'] ?></a>
                                                    <?php } else { ?>
                                                        <a><?php echo $json['generalCoChair']['name'] ?></a>
                                                    <?php } ?>
                                                    <p style="margin: 0;"><?php echo $json['generalCoChair']['affiliation'] ?></p>
                                                    <p><?php echo $json['generalCoChair']['nation'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        -->
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Program co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody>
                                <tr style="align-content: center">
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['commiteeMembers']['researchTrack'] as $key => $value) { ?>
                                                    <?php if (($value['name']=="Yuanfang Cai") || ($value['name']=="Marouane Kessentini")) { ?>
                                                            <div class="col-md-2">
                                                                <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if (!is_null($value['website'])) { ?>
                                                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                                <?php } else { ?>
                                                                    <a><?php echo $value['name'] ?></a>
                                                                <?php } ?>
                                                                <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                                <p><?php echo $value['nation'] ?></p>
                                                            </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>ERA Track co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody>
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['commiteeMembers']['era_track'] as $key => $value) { ?>
                                                    <?php if ($value['cochair']==true) { ?>
                                                            <div class="col-md-2">
                                                                <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if (!is_null($value['website'])) { ?>
                                                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                                <?php } else { ?>
                                                                    <a><?php echo $value['name'] ?></a>
                                                                <?php } ?>
                                                                <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                                <p><?php echo $value['nation'] ?></p>
                                                            </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Tool Demo Track co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody>
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['commiteeMembers']['tool_track'] as $key => $value) { ?>
                                                    <?php if ($value['cochair']==true) { ?>
                                                            <div class="col-md-2">
                                                                <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if (!is_null($value['website'])) { ?>
                                                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                                <?php } else { ?>
                                                                    <a><?php echo $value['name'] ?></a>
                                                                <?php } ?>
                                                                <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                                <p><?php echo $value['nation'] ?></p>
                                                            </div>
                                                    <?php } ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Industrial Track co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody>
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['commiteeMembers']['industry_track'] as $key => $value) { ?>
                                                    <?php if ($value['cochair']==true) { ?>
                                                            <div class="col-md-2">
                                                                <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if (!is_null($value['website'])) { ?>
                                                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                                <?php } else { ?>
                                                                    <a><?php echo $value['name'] ?></a>
                                                                <?php } ?>
                                                                <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                                <p><?php echo $value['nation'] ?></p>
                                                            </div>
                                                    <?php } ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>REproducibility Studies and NEgative Results (RENE) Track co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody>
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['commiteeMembers']['rene_track'] as $key => $value) { ?>
                                                    <?php if ($value['cochair']==true) { ?>
                                                            <div class="col-md-2">
                                                                <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if (!is_null($value['website'])) { ?>
                                                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                                <?php } else { ?>
                                                                    <a><?php echo $value['name'] ?></a>
                                                                <?php } ?>
                                                                <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                                <p><?php echo $value['nation'] ?></p>
                                                            </div>
                                                    <?php } ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Journal First co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                            <tr>
                                <td style="border: none; text-align: left;">
                                    <div class="container">
                                        <div class="row">
                                            <?php foreach ($json['commiteeMembers']['journalTrack'] as $key => $value) { ?>
                                                    <?php if ($value['cochair']==true) { ?>
                                                        
                                                            <div class="col-md-2">
                                                                <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if (!is_null($value['website'])) { ?>
                                                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                                <?php } else { ?>
                                                                    <a><?php echo $value['name'] ?></a>
                                                                <?php } ?>
                                                                <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                                <p><?php echo $value['nation'] ?></p>
                                                            </div>
                                                    <?php } ?>
                                                <?php } ?> 
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Workshop co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['workshops']['chairs'] as $key => $value) { ?>
                                                        <div class="col-md-2">
                                                            <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <?php if (!is_null($value['website'])) { ?>
                                                                <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                            <?php } else { ?>
                                                                <a><?php echo $value['name'] ?></a>
                                                            <?php } ?>
                                                            <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                            <p><?php echo $value['nation'] ?></p>
                                                        </div>
                                                <?php } ?> 
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Finance chair</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                            <tr>
                                <td style="border: none; text-align: left;">
                                    <div class="container">
                                        <div class="row">
                                            <?php foreach ($json['finance'] as $key => $value) { ?>          
                                                    <div class="col-md-2">
                                                        <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <?php if (!is_null($value['website'])) { ?>
                                                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                        <?php } else { ?>
                                                            <a><?php echo $value['name'] ?></a>
                                                        <?php } ?>
                                                        <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                        <p><?php echo $value['nation'] ?></p>
                                                    </div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Proceedings Chair</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['proceedings'] as $key => $value) { ?>
                                                    <div class="col-md-6">
                                                        <div class="col-md-4">
                                                            <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <?php if (!is_null($value['website'])) { ?>
                                                                <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                            <?php } else { ?>
                                                                <a><?php echo $value['name'] ?></a>
                                                            <?php } ?>
                                                            <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                            <p><?php echo $value['nation'] ?></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="top-description-text" style="text-align: left;">
                            <h3>Publicity and Social Media</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                            <tr>
                                <td style="border: none; text-align: left;">
                                    <div class="container">
                                        <div class="row">
                                            <?php foreach ($json['publicity'] as $key => $value) { ?>
                                                <div class="col-md-6">
                                                    <div class="col-md-4">
                                                        <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <?php if (!is_null($value['website'])) { ?>
                                                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                        <?php } else { ?>
                                                            <a><?php echo $value['name'] ?></a>
                                                        <?php } ?>
                                                        <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                        <p><?php echo $value['nation'] ?></p>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                       <div class="top-description-text" style="text-align: left;">
                            <h3>Local Arrangement co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['local'] as $key => $value) { ?>
                                                    <div class="col-md-6">
                                                         <div class="col-md-4">
                                                             <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                         </div>
                                                         <div class="col-md-4">
                                                             <?php if (!is_null($value['website'])) { ?>
                                                                 <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                             <?php } else { ?>
                                                                 <a><?php echo $value['name'] ?></a>
                                                             <?php } ?>
                                                             <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                             <p><?php echo $value['nation'] ?></p>
                                                         </div>
                                                     </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                         <div class="top-description-text" style="text-align: left;">
                            <h3>Awards co-Chairs</h3>
                            <hr class="lineHr">
                        </div>
                        <table class="table" style="width: 100%; margin-top: -4em;">
                            <tbody style="text-align: center;">
                                <tr>
                                    <td style="border: none; text-align: left;">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($json['awards'] as $key => $value) { ?>
                                                    <div class="col-md-6">
                                                         <div class="col-md-4">
                                                             <img class="img-circle" src=<?php echo $value['img'] ?> alt=<?php echo $value['name'] ?> />
                                                         </div>
                                                         <div class="col-md-4">
                                                             <?php if (!is_null($value['website'])) { ?>
                                                                 <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a>
                                                             <?php } else { ?>
                                                                 <a><?php echo $value['name'] ?></a>
                                                             <?php } ?>
                                                             <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                                                             <p><?php echo $value['nation'] ?></p>
                                                         </div>
                                                     </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
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
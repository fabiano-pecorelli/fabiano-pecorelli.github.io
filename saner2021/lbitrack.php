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

<!-- what-we-do -->
<section id="what-we-do" class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="text-align: justify;">
                    Following the trend established by ICSME’20 and ASE’20, this year we introduce the Late Breaking Ideas (LBI) Track, which aims to promote a collaborative interaction and dialogue on cutting edge advances and initial research results stemming from emerging work. In this respect, this track has two main objectives. 
                </p>
                <br>
                <p style="text-align: justify;">
                    The first objective is to provide a forum for authors to present a well-defined problem and a novel approach the problem can be addressed. There is no requirement for authors to present a full implementation or experimental results. It is however expected that the problem is well-defined and the proposed method or algorithm is clearly presented. Ideas and solutions which push the boundaries of known approaches, or utilize methods from other disciplines are particularly encouraged. As a result, authors can obtain feedback from the community which will allow them to possibly re-formulate the problem in a way that makes it for example more tractable, or obtain complementary views towards devising a solution or establishing a solid experimentation platform. Authors of accepted Late Breaking Ideas papers are strongly encouraged to then extend their papers into full research papers for a later conference submission.
                </p>
                <br>
                <p style="text-align: justify;">
                    The second objective is to allow for new researchers to be introduced, interact, and actively participate in the SANER community.  Furthermore, through such interactions, new collaborations among the members of the community can be fostered. Similarly, from the perspective of attendees, the track can offer a glimpse of upcoming trends and ideas on approaching challenging problems, in the areas of software maintenance, evolution and re-engineering.  
                </p>
                <br>
                <p style="text-align: justify;">
                    It is expected that the Late Breaking Ideas track will complement the Early Research Achievements (ERA) track. The main difference between these two tracks is that submissions in the ERA track present initial results of a technique or algorithm that has been already implemented as a prototype (even though not strongly evaluated), while submissions in the LBI track aim to get an “idea” out early so that it can be discussed among the community. As stated above, Ssubmissions in the LBI track are not expected to provide an implementation or experimental results. 
                </p>
                <strong>Evaluation Criteria</strong>
                <p style="text-align: justify; margin-top: 15px;">
                    Submissions will be evaluated on the clarity of the problem definition, the clarity of the solution proposed, and the importance of the problem addressed. Please note that merely summarizing an existing paper or providing an analysis or survey of existing approaches does not qualify as a submission for this track.
                </p>
                <br>
		<strong>Paper presentation and Publication</strong>
                <p style="text-align: justify; margin-top: 15px;">
			Accepted Late Breaking Ideas papers will be published in the IEEE proceedings and included in the conference program, with the condition that at least one of the authors must register for the conference at the full registration rate (i.e., NOT student rate) and attend the conference in order to present the paper.
                </p>
                <br>
                <strong>Submission Instructions</strong>
                <p style="text-align: justify; margin-top: 15px;">
                    Submissions of late breaking ideas must:
                    <ul>
                        <li>adhere to the conference proceedings style (<a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">IEEE proceedings paper format guidelines</a>.);</li>
                        <li>have a maximum of 2 pages that describe the criteria above;</li>
                        <li>be uploaded electronically in PDF format via the SANER 2021 Easychair submission site.</li>
                    </ul>
                </p>
                <br>
		<p style="text-align: justify;">                                                                                                                                                                                                                 <strong>Important note: SANER 2021 follows a full double-blind review process.</strong>                                                                                                                                                      In order to be compliant with the double-blind policy, submitted papers must adhere to the following rules (largely reused from <a href="http://ase2017.org/author_instructions" target="_blank">ASE 2017 double-blind instructions</a>):                                                                                                                                                                                                                                                 <ul>                                                                                                                                                                                                                                             <li>Author names and affiliations must be omitted.</li>                                                                                                                                                                                      <li>References to authors' own related work must be in the third person. (For example, not "We build on our previous work..." but rather "We build on the work of...")</li>                                                                  <li>There may be cases in which the current submission is clear follow up of one of your previous work, and despite what recommended in the previous point, reviewers will clearly associate authorship of such a previous work to the current submission. In this case, you may decide to anonymize the reference itself at submission time. For example: "based on previous results [10]" .. where the reference is reported as "[10] Anonymous Authors. Omitted per double blind reviewing." In doing so, however, please make sure that the Saner 2018 submission is self-contained and its content can be reviewed and understood without accessing the previous paper.</li>                                                      <li>Do not include acknowledgements of people, grants, organizations, etc. that would give away your identity. You may, of course, add these acknowledgements in the camera-ready version.</li>                                              <li>If you use an identifiable naming convention for your work, such as a project name, use a different name for your submission, which you may indicate has been changed for the purposes of double-blind reviewing. This includes names that may unblind individual authors and their institutions. For example, if your project is called GoogleDeveloperHelper, which makes it clear the work was done at Google, for the submission version, use the name DeveloperHelper or BigCompanyDeveloperHelper instead.</li>                                                                                                                                                                                                              <li>Avoid revealing the institution affiliations of authors or at which the work was performed. For example, if the evaluation includes a user study conducted with undergraduates from the CS 101 class that you teach, you might say "The study participants consist of 200 students in an introductory CS course." You can of course add the institutional information in the camera-ready. Similar suggestions apply for work conducted in specific organizations (e.g., industrial studies). In such cases, avoid to mention the organization's name. Instead, you may just refer the organization as "Org" or "Company", etc. When appropriate and when this does not help too much in revealing the company's name, you might mention the context (e.g., financial organization, videogame development company, etc.).</li>                                                                                                                                                  <li>Avoid linking directly to code repositories or tool deployments which can reveal your identity. Whenever possible, please use the EasyChair additional material field to submit a .zip or .tgz file including additional material. This is of course possible for small attachments. In other cases, you may post anonymized links (with a warning that following said link may reveal authors' identities), include links to anonymized code or deployments. When creating such repositories, a good practice can be asking somebody in your team to test the anonymization of the repository and of its content. In case anonymization is difficult to be achieved and you still want to provide availability of data/tools, you can simply state that you will link to the code or deployment in the camera-ready version. Program committee members are asked to keep into account the double-blind policy when reviewing papers, and therefore not requiring full availability of artifacts at submission time.</li>                                                                                                                                                                                                </ul>                                                                                                                                                                                                                                    </p>
                <p style="text-align: justify;">
                    Papers submitted to the LBI must not have been previously accepted for publication or submitted for review to another publication venue.            
                </p>
                <br>
                <p style="text-align: justify;">
                    <br>
                    <strong>Important Dates</strong>
                <ul>
                    <li>Abstract submission deadline: <font color="red">November 12, 2020</font></li>
                    <li>Paper submission deadline: <font color="red">November 12, 2020</font></li>
                    <li>Notifications: <font color="red">December 14, 2020</font></li>
                    <li>Camera Ready: <font color="red">December 31, 2020</font></li>
                    <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=saner2020">TBD</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div><!-- end of row -->
</section>
<section id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Committee Members</h3>
                <hr class="lineHr">
            </div>
        </div>
        <?php
        $content = file_get_contents('config/production.json');
        $json = json_decode($content, true);
        ?>
        <div class="row"> <?php
            foreach ($json['commiteeMembers']['lbi_track'] as $key => $value) {
                ?>
                <div class="col-md-4">
                    <?php if (!is_null($value['website'])) { ?>
                        <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['cochair'] == true) { echo ' <span style="font-size: 18px;">(co-Chair)</span>';} ?>
                    <?php } else { ?>
                        <a><?php echo $value['name'] ?></a>
                    <?php } ?>
                    <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                    <p><?php echo $value['nation'] ?></p>
                </div>
                <?php
            }
            ?>
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

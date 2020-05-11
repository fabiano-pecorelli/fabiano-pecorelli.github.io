<?php

?>

<div class="container">
    <div class="row">
        <div class="col-md-1 col-xs-1">
            <img style="padding-top: 8px;" class="zm-logo" src="img/logoSaner.png" alt="Saner logo" />
        </div>
        <div class="col-md-10 col-xs-11">
            <!-- start Navigation -->
            <nav class="navbar navbar-saner" role="navigation">
                <div class="container" style="font-size: 11.5pt;">
                    <!-- Zetta Menu 1 -->
                    <ul onClick="" class="zetta-menu zm-response-switch zm-full-width zm-effect-slide-top">
                        <li style="background: #fff;"></li>

                        <!-- Home Menu -->
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class = "zm-active"'?> >
                            <a  href="index">Home</a>
                        </li>
                        <!-- /Home Menu -->
                        <!-- Program Menu -->
                        <li
                            <?php
                            if (basename($_SERVER['PHP_SELF']) == 'keynote.php' 
                                    || basename($_SERVER['PHP_SELF']) == 'accepted.php'
                                    || basename($_SERVER['PHP_SELF']) == 'gallery.php'
                                    || basename($_SERVER['PHP_SELF']) == 'detailedProgram.php'
                                    || basename($_SERVER['PHP_SELF']) == 'programOverview.php'
                                    || basename($_SERVER['PHP_SELF']) == 'socialEvents.php') {
                                echo 'id="key" class = "zm-active"';
                            }
                            ?>
                        ><a>Program <span class="caret"></span></a>
                            <ul class="w-200">
                                <li><a href="programOverview">Overview</a></li>
                                <li><a href="keynotes">Keynotes</a></li>
                                <li><a href="accepted">Accepted Papers</a></li>
                                <!--<li><a href="gallery">Photo Gallery</a></li>-->
                                <li><a href="detailedProgram">Detailed Program</a></li>
                                <li><a href="socialEvents">Social Events</a></li>
                            </ul>
                        </li>
                        <!-- /Program Menu -->
                        <!-- Call For Papers -->
                        <li
                            <?php
                            if ((basename($_SERVER['PHP_SELF']) == 'restrack.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'eratrack.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'tooltrack.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'industrialtrack.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'negativerestrack.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'workshoproposals.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'journalFirstTrack.php')
                                || (basename($_SERVER['PHP_SELF']) == 'lbitrack.php')) {
                                echo 'class = "zm-active"';
                            }
                            ?>
                        ><a>Call For Papers <span class="caret"></span></a>
                            <ul class="w-250">
                                <li><a href="restrack">Research Track</a></li>
                                <li><a href="eratrack">ERA Track</a></li>
                                <li><a href="tooltrack">Tool Track</a></li>
                                <li><a href="industrialtrack">Industrial Track</a></li>
                                <li><a href="negativerestrack">RENE Track</a></li>
                                <li><a href="journalFirstTrack">Journal First Track</a></li>
                                <li><a href="lbitrack">Late Breaking Ideas Track</a></li>
                                <li><a href="workshoproposals">Workshop Proposals</a></li>
                            </ul>
                        </li>
                        <!-- /Call For Papers -->
                        <!-- Workshops -->
                        <li
                            <?php
                            if ((basename($_SERVER['PHP_SELF']) == 'w_vst.php')
				|| (basename($_SERVER['PHP_SELF']) == 'w_iwbose.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'w_iwsc.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'w_ibf.php')) { 
                                echo 'class = "zm-active"';
                            }
                            ?>
                        ><a>Workshops <span class="caret"></span></a> 
                            <ul class="w-200">
                                <li><a href="vst">VST 2021</a></li>
                                <li><a href="iwsc">IWSC 2021</a></li>
				<li><a href="ibf">IBF 2021</a></li>
				<li><a href="iwbose">IWBOSE 2021</a></li>
		    	    </ul>
                        </li>
                        <!-- /Workshops -->
                        <!-- Registration -->
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'registration.php') echo 'class = "zm-active"'?>>
                            <a href="registration">Registration</a>
                        </li>
                        <!-- /Registration -->
                        <!-- Venue -->
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'venue.php') echo 'class = "zm-active"'?>>
                            <a href="venue">Venue</a>
                        </li>
                        <!-- /Venue -->
                        <!-- Travel Information -->
                        <li
                          <?php
                            if ((basename($_SERVER['PHP_SELF']) == 'accommodation.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'howToArriveHonolulu.php')
				|| (basename($_SERVER['PHP_SELF']) == 'howToArriveVenue.php')
				|| (basename($_SERVER['PHP_SELF']) == 'shuttleBus.php')
				|| (basename($_SERVER['PHP_SELF']) == 'touristInformation.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'visaInformation.php')) {
                              echo 'class = "zm-active"';
                            }
                          ?>
                        ><a>Travel Information <span class="caret"></span></a>
                            <ul class="w-250">
                                <li><a href="accommodation">Accommodation</a></li>
                                <li><a href="howToArriveHonolulu">How to get to Honolulu</a></li>
				<li><a href="howToArriveVenue">How to get to the venue</a></li>
				<li><a href="shuttleBus">Conference Shuttle Bus</a></li>
                                <li><a href="visaInformation">Visa Information</a></li>
				<li><a href="touristInformation">Tourist Information</a></li>
                            </ul>
                        </li>
                        <!-- /Travel Information -->
                        <!-- Supporters start -->
                        <!--<li <?php if (basename($_SERVER['PHP_SELF']) == 'supporters.php') echo 'class = "zm-active"'?>>
                            <a href="supporters">Supporters</a>
                        </li>-->
                        <!-- Supporters end -->
                        <!-- Organization -->
                        <li
                        <?php
                          if ((basename($_SERVER['PHP_SELF']) == 'organizingCommittee.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'steeringCommittee.php') 
                                || (basename($_SERVER['PHP_SELF']) == 'programCommittee.php')) {
                            echo 'class = "zm-active"';
                          }
                        ?>
                        ><a>Organization <span class="caret"></span></a>
                          <ul class="w-200">
                              <li><a href="organizingCommittee">Organizing Committee</a></li>
                              <li><a href="programCommittee">Program Committee</a></li>
                              <li><a href="steeringCommittee">Steering Committee</a></li>
                          </ul>
                        </li>
                        <!-- Organization end -->
                        <!-- Search Place
                        <li class="zm-search zm-right-item">
                            <form>
                                <input id="search-1" name="search" type="search">
                                <label for="search-1" class="fa fa-search"></label>
                            </form>
                        </li>
                        <!-- /Search Place -->
                    </ul>
                    <!-- /Zetta Menu 1 -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
	<div class="col-md-1 col-xs-1">
            <img style="padding-top: 8px;" class="zm-logo" src="img/Maple_Leaf.png" alt="Maple Leaf" />
        </div>
    </div>
</div>

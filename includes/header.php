<div id="switch">
    <div class="content-switcher">
        <div class="center-align">
            <h3 class="h3-responsive black-text">Give us a call</h3>
            <p style="color:#009688"><i class="fa fa-phone-square"></i><a href="tel:8759456371">&nbsp;+91 8759456371, +91 9910026353</a></p>
            <h3 class="h3-responsive black-text">OR</h3>
        </div>
        <form action="includes/callresponder.php" id="allerrespnse" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="form-group">
                        <div class="input-field">
                            <input id="contact_name1" type="text" name="name" class="input-box validate form-control" autocomplete="off" required>
                            <label for="contact_name1" class="input-label">Name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="form-group"><div class="input-field">
                            <input id="email1" type="email" name="email" class="validate form-control input-box" autocomplete="off" required>
                            <label for="email1" class="input-label">Email</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="form-group">
                        <div class="input-field">
                            <input id="Phone1" type="text" name="phone" pattern="[789][0-9]{9}" class="validate input-box form-control" autocomplete="off" required>
                            <label for="Phone1" class="input-label">Phone</label>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
            $page = basename($_SERVER['PHP_SELF']);
            ?>
            <input type="hidden" name="pagedir" value="<?php echo $directory_self; ?>">
            <input type="hidden" name="pageurl" value="<?php echo $page; ?>">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="input-field submit-wrap clearfix center-align">
                        <button type="submit" class="btn btn-primary blue darken-1">submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="hide">
        <i class="fa fa-times"></i>
    </div>
</div>
<div id="mainNav">
    <div class="container">
        <!-- Company Logo Start -->
        <div class="logoDv visible-lg visible-md hidden-sm">
            <a href="" class="navbar-brand logo">
                <img src="images/finalint.jpg" alt="logo" border="0" style="width: 13%;position: absolute;">
            </a>
        </div>
        <!-- Company Logo End -->
        <!-- Big Menu Start -->
        <div class="navbar yamm">
            <div class="navbar-inner">
                <div class="container">

                    <div id="maniMenu" class="nav-collapse in collapse">


                        <div class="navi-bar">
                            <div class="solution-bx">Solutions for<b class="bx-caret"></b></div>
                            <ul class="nav">
                                <li class="dropdown tab0 left-tb theme0"><a href="#" class="dropdown-toggle"
                                                                            data-toggle="dropdown"> Me <b
                                                class="caret"></b> </a><!--ME-->
                                    <ul class="dropdown-menu boxs">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md12 col-sm-12 ">
                                                        <div class="col-space">
                                                            <ul class="thumbnails">
                                                                <li class="col-md-3">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption"><h3><a
                                                                                            href="#">Working Professionals</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Information Technology</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">BIG Data Analytics with Hadoop</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">CLOUD Computing</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Networking and Security</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Technology and Business Certifications</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">SIX Sigma and Business Tools</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="col-md-3">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption"><h3><a
                                                                                            href="#">College Students &amp; Graduates</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Information Technology</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Mobile Programming</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Web Development Programming</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Networking and Security</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">UI Frontend Programming</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Database Backend Programming</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Digital Marketing</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Electronics Programming</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Interview Preparation</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="col-md-3">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption"><h3><a
                                                                                            href="#">School Students</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Career Oriented Training and Counseling</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Personality Development &amp; Soft Skills</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Information Technology</a></li>
                                                                               </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="col-md-3">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption"><h3><a
                                                                                            href="#">Start-Ups</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Start-Up Ready Resource Pool</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Start-up Foundation Services</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Partnership with Us</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="col-md-2">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption"><h3><a
                                                                                            href="#">Internships</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Home Based Internships</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Marketing Field Based</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Technology wired Internships</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Digital Marketing</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Start-up internships</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown tab1 left-tb theme1"><a href="#" class="dropdown-toggle"
                                                                            data-toggle="dropdown"> About Us <b
                                                class="caret"></b> </a><!--About us-->
                                    <ul class="dropdown-menu boxs">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md12 col-sm-12 ">
                                                        <div class="col-space">
                                                            <ul class="thumbnails">
                                                                <li class="col-md-12">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="/about.php">About INTEGER</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="/team.php">Team &amp; Family</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="">INTEGER Reviews</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="/gallery.php">Events Conducted &amp; Media</a>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown tab2 left-tb theme2"><a href="#" class="dropdown-toggle"
                                                                            data-toggle="dropdown"> Start-Ups <b
                                                class="caret"></b> </a><!--Start-Ups-->
                                    <ul class="dropdown-menu boxs">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md12 col-sm-12 ">
                                                        <div class="col-space">
                                                            <ul class="thumbnails">
                                                                <li class="col-md-12">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Start-Up Ready Resource Pool</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Start-up Foundation Services</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Post Your Requirement</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Partnership with Us</a>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown tab3 left-tb theme3"><a href="#" class="dropdown-toggle"
                                                                            data-toggle="dropdown"> Internships <b
                                                class="caret"></b> </a><!--Internships-->
                                    <ul class="dropdown-menu boxs">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md12 col-sm-12 ">
                                                        <div class="col-space">
                                                            <ul class="thumbnails">
                                                                <li class="col-md-12">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Home Based Internships</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Marketing Field Based</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Technology wired Internships</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Social Media &amp; Digital Marketing</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <h3>
                                                                                    <a href="#">Start-up internships</a>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown tab4 left-tb theme4"><a href="#" class="dropdown-toggle"
                                                                            data-toggle="dropdown"> Enterprises <b
                                                class="caret"></b> </a><!--Enterprises-->
                                    <ul class="dropdown-menu boxs">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md12 col-sm-12 ">
                                                        <div class="col-space">
                                                            <ul class="thumbnails">
                                                                <li class="col-md-6">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption change"><h3><a
                                                                                            href="#">Mobile Development and Support</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Android App Development</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">iOS App Development</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Responsive Mobile Website Development</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Mobile App Support</a></li>
                                                                               </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="col-md-6">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption change"><h3><a
                                                                                            href="#">Website Development and Support</a></h3>
                                                                                <ul class="submenu">
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">CMS Platform Website Development</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">ERP (Enterprise Resource Planning) Solutions and Services</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Responsive Website Development</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Website Customization and Enhancement Services</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">Website Support and Maintenance</a></li>
                                                                                    <li class=""><a class=""
                                                                                                    tabindex="0"
                                                                                                    href="#">SEO, SMO Optimization Services</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="col-md-6">
                                                                    <div class="col-space">
                                                                        <div class="thumbnail">
                                                                            <div class="caption change"><h3><a
                                                                                            href="#">Client Portfolio</a></h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Big Menu End -->
    </div>
</div>
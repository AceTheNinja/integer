<body>

    <!-- start option panel -->
    <div id="switch">
        <div class="content-switcher">
            <div class="center-align">          
                <h3 class="h3-responsive black-text">Give us a call</h3>
                <p style="color: #009688"><i class="fa fa-phone-square"></i><a href="tel:8826307024">&nbsp;8826307024,&nbsp;8802093679</a></p>
                <h3 class="h3-responsive black-text">OR</h3>
            </div>
            <form action="../includes/callresponder.php" id="allerrespnse"  method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="form-group">
                            <div class="input-field">
                                <input id="contact_name1" type="text" name="name" class="input-box validate  form-control" autocomplete="off" required>
                                <label for="contact_name1" class="input-label">Name</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="form-group"><div class="input-field">
                                <input id="email1" type="email" name="email" class="validate form-control  input-box" autocomplete="off" required>
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
                            <button type="submit" class="btn  btn-primary blue darken-1">submit</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div id="hide">
            <i class="fa fa-times"></i>
        </div>
    </div>

    <div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
        <i class="fa fa-phone"></i>
    </div>
    <!-- end option panel -->


    <!-- Main Container -->
    <main id="app" class="main-section">
        <!-- header navigation start -->
        <header id="navigation" class="root-sec white nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nav-inner">
                            <nav class="primary-nav">
                                <div class="clearfix nav-wrapper">
                                    <a href="../index.php" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="../images/finalint.jpg" alt="INTEGER Innovation logo">
                                    </a>
                                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                    <ul class="right static-menu">
                                        <li>
                                            <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                                                <i class="mdi-navigation-more-vert right"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="inline-menu side-nav" id="mobile-demo">

                                        <!-- Mini Profile // only visible in Tab and Mobile -->
                                        <li class="mobile-profile">
                                            <div class="profile-inner">
                                                <div class="pp-container">
                                                    <img src="../images/finalint.jpg" alt="INTEGER Innovation logo">
                                                </div>
                                                <h3>INTEGER Innovation</h3>
                                            </div>
                                        </li><!-- mini profile end-->


                                        <li><a href="../index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                                        </li>
                                        <li><a href="../about.php"><i class="fa fa-group fa-fw"></i>About Us</a>
                                        </li>
                                        <li><a href="../course.php" ><i class="fa fa-book fa-fw"></i>Courses</a>
                                        </li>
                                        <li><a href="../gallery.php"><i class="fa fa-image fa-fw"></i>Gallery</a>
                                        </li>
                                        <li><a href="../corporate-trainings.php"><i class="fa fa-briefcase fa-fw"></i>Corporate Trainings</a>
                                        </li>
                                        <li><a href="../services.php"><i class="fa fa-life-ring fa-fw"></i>Services</a>
                                        </li>

                                        <li><a href="index.php"><i class="fa fa-bookmark-o fa-fw"></i>Blog</a>
                                        </li>
                                        <li><a href="../contact.php" ><i class="fa fa-phone fa-fw"></i>Contact</a>
                                        </li>
                                    </ul>
                                    <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                        <li><a href="../industrial-training.php"><i class="fa fa-building-o fa-fw"></i>Industrail Training</a>
                                        </li>
                                        <li><a href="../career.php"><i class="fa fa-briefcase fa-fw"></i>Career</a>
                                        </li>
                                    </ul>


                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </header>
<?php
$current_url = explode('?', basename($_SERVER['REQUEST_URI']));
$page = str_replace(".php", "", $current_url[0]);
$asd = $_GET['id'];
$gall_path = "";
$gall_title = "";
$gall_l_detail = "";
$gall_detail1 = "";
$gall_detail2 = "";
$gall_detail3 = "";
$gall_detail4 = "";
$gall_detail5 = "";
$gall_proj_link = "";
$workshop_date='';
$workshop_tech='';
$workshop_student='';
$workshop_loc='';
include("includes/configdb.php");
$sql = "SELECT * FROM galler where gall_id='$asd';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $gall_path = $row["path"];
        $gall_title = $row["title"];
        $gall_l_detail = $row["l_detail"];
        $gall_detail1 = $row["detail1"];
        $gall_detail2 = $row["detail2"];
        $gall_detail3 = $row["detail3"];
        $gall_detail4 = $row["detail4"];
        $gall_detail5 = $row["detail5"];
        $gall_proj_link = $row["project_link"];
        $workshop_date=$row["date_workshop"];
        $workshop_tech=$row["technology"];
        $workshop_student=$row["student"];
        $workshop_loc=$row["location"];
    }
}

$directory = "images/workshop/" . $gall_path . "/";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $gall_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="images/favicon.png" >

        <meta name="description" content="gallery,<?php echo $gall_title; ?>,<?php echo $gall_detail1; ?>" />
        <meta name="keywords" content="gallery,picture,<?php echo $gall_title; ?>,<?php echo $gall_detail1; ?>" />
        <meta name="author" content="INTEGER Innovation" />
        <?php
        require_once 'includes/head.php';
        ?>



        <link rel="stylesheet" href="css/jquery.bxslider.css"/>
        <link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" media="screen" />
        <link rel="stylesheet" href="libs/owl-carousel/owl.transitions.css" media="screen" />
        <link rel="stylesheet" href="libs/owl-carousel/owl.theme.css" media="screen" />
        <link rel="stylesheet" href="css/responsiveslides.css">
        <link rel="stylesheet" href="css/gallery.css" media="screen" />
        


        <style>
            .sidetitle{
                font-size: 20px; 
                font-family: 'Signika', sans-serif;
            }
            .sidebar ul
            {
                margin-top: 30px;
                margin-bottom: 28px;
                padding-left: 17px;

            }
            .sidebar ul li
            {
                list-style: disc;
                color: #777777;
                font-size: 14px;
                line-height: 26px;
                position: relative;
            }
            .sidebar p
            {
                color: #777777;
                font-size: 14px;
                line-height: 26px;
                position: relative;
            }
            .experience-inner .card .card-image img {
                width: 100%;
                height: 200px !important;
            }
            .card-title-top {
                font-size: 12px;
                font-weight: 400;
                padding: 5px 10px;
                border-bottom: none;
                line-height: 1.7;
            }



            .othercourse {
                overflow: hidden;
                text-align: center;
            }
            .othercourse:before,
            .othercourse:after {
                background-color: #000;
                content: "";
                display: inline-block;
                height: 1px;
                position: relative;
                vertical-align: middle;
                width: 50%;
            }
            .othercourse:before {
                right: 0.5em;
                margin-left: -50%;
            }
            .othercourse:after {
                left: 0.5em;
                margin-right: -50%;
            }
            .portfolio-slider-wrapper
            {
                margin-bottom: 40px;
            }
            .portfolio-wrap {
    padding-bottom: 0px;
}
#experience
{
    padding-top: 0px;
}
        </style>
        <link rel="stylesheet" href="css/blog.css">

    </head>
    <?php
    require_once 'includes/header.php';
    ?>
    <section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix blog-banner-text blog-single-banner">
                    <div class="col-md-12">
                        <h1 class="title sidetitle"><?php echo $gall_title; ?></h1>
                        <ul class="clearfix blog-post-meta">
                            <li><i class="fa fa-calendar"></i>&nbsp;Date : <?php echo $workshop_date;?></li>
                            <li><i class="fa fa-shield"></i>&nbsp;Technology : <?php echo $workshop_tech;?></li>
                            <li><i class="fa fa-users"></i>&nbsp;Students : <?php echo $workshop_student;?></li>
                            <li><i class="fa fa-map-marker"></i>&nbsp;Location : <?php echo $workshop_loc;?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- ./Banner end -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
        <div class="portfolio-bottom">      
            <div class="container">
                
                
                <div class="row">
                    <!-- Portfolio item slider end -->

                    <!-- sidebar start -->
                    <div class=" col-md-8">
                        
                        <div class="row">
                    <!-- Portfolio item slider start -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gallery_wraper">
                            <div class="callbacks_container">
                             <?php
                            try {
                                // Styling for images	
                                echo "<ul class='rslides' id='slider4'>";
                                foreach (new DirectoryIterator($directory) as $item) {
                                    if ($item->isFile()) {
                                        $path = $directory . "/" . $item;
                                        echo "<li><img src=\"" . $path . "\" alt='gallery' /></li>";
                                    }
                                }
                                echo "</ul>";
                            } catch (Exception $e) {
                                echo 'No images found for this slideshow.<br />';
                            }
                            ?>
                            
    </div>
                        </div>
                    </div>
                </div>
                        <div class="sidebar">
                            <p><?php echo $gall_l_detail; ?></p>
                            <ul class="list-group">
                                <?php echo $gall_detail1; ?>
                                <?php echo $gall_detail2; ?>
                                <?php echo $gall_detail3; ?>
                                <?php echo $gall_detail4; ?>
                                <?php echo $gall_detail5; ?>

                            </ul>
                            
                        </div>
                    </div>
                    <div class=" col-md-3 col-md-offset-1">
                        <div class="primary-sidebar">
                        
                        <aside class="single-widget">
                            <?php include_once 'includes/course-services-nav.php'; ?>
                        </aside>
                        <aside class="single-widget">
                            <?php include_once 'includes/course-blog.php'; ?>
                        </aside>

                    </div>
                    </div>
                </div><!-- Portfolio item row end -->
            </div>
        </div>
    </section>
    <section id="experience" class="padd-tb-55 root-sec ocourse">
        <div class="container">


            <div class="row">
                <div class="experience-inner">
                    <div class="col-md-12">
                        <h2 class="othercourse">Other Gallery</h2>
                    </div>
                    <div class="col-sm-11 col-md-11 card-box-wrap">
                        <div class="row">



                            <div class="col-lg-12 col-md-offset-1">
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                                            <?php
                                            include("includes/configdb.php");
                                            $sql = "SELECT * FROM gallery ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<div class="col-md-2  single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <a href="workshop.php?id=' . $row["detail_id"] . '" data-title="' . $row["Title"] . '" >
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="' . $row["Path"] . '" alt="' . $row["Title"] . '" class="img-responsive">
                                </div>
                                <h2 class="left-align card-title-top">' . $row["Title"] . '</h2>
                                    </a>
                              </div>                              
                            </div>
                          </div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapp exp-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Footer start -->
    <?php
    require_once 'includes/footer.php';
    ?>
    <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

     // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

     
    });
  </script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script >
        $(document).ready(function ($) {
            var exSlider = $("#experienceSlider");
            exSlider.owlCarousel({
                items: 4,
                slideSpeed: 600,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [800, 2],
                itemsMobile: [500, 1],
                pagination: false
            });
            var exData = exSlider.data('owlCarousel');


            var exTgt = $('.exp-ctrl').find('.go');
            exTgt.on('click', function (e) {
                e.preventDefault();
                if ($(this).hasClass('go-left')) {
                    exData.prev();
                } else {
                    exData.next();
                }
            });
        });

    </script>
</body>
</html>

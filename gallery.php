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
        <title>Gallery | INTEGER Innovation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="images/favicon.png" >

        <meta name="title" content="gallery | INTEGER Innovation" />
        <meta name="keywords" content="INTEGER Innovation" />
        <meta name="description" content="LIVE interactive classes by industry experts, 24/7 training support, Project Based learning to get hands-on experience on a real life application." />
        
        <?php
            require_once 'includes/head.php';
        ?>

</head>
<?php
require_once 'includes/header.php';
?>
<!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="title">Gallery</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
      </div>
      

      <div class="portfolio-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="protfolio-msnry">
              <?php
include("includes/configdb.php");
$sql = "SELECT * FROM gallery ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
         echo ' <li class="single-port-item category-1 ' . $row["data"] . '">
                  <a href="workshop.php?id=' . $row["detail_id"] . '" data-title="' . $row["Title"] . '" >
                        <figure class="effect-zoe">
						<img src="' . $row["Path"] . '" alt="'.$row["Title"].'" class="img-responsive">
						<figcaption>
							<h2>' . $row["Title"] . '</h2>
						</figcaption>			
					</figure>
                  </a>
                </li>';
    }
}

?>
  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #portfolio Section end -->
 <!-- Footer Section end -->
      <?php    
require_once 'includes/footer.php';
?>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/detectmobilebrowser.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/waypoints.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="libs/materialize/js/materialize.min.js"></script>
  <script src="js/common.js"></script>
  <script>
  $(window).load(function(){


	// portfolio Mesonary
	if ( $('#protfolio-msnry').length > 0 ) {
		// init Isotope
		var loading = 0;
		var portfolioMsnry = $('#protfolio-msnry').isotope({
			itemSelector: '.single-port-item',
			layoutMode: 'fitRows'
		});


		$('#portfolio-msnry-sort a').on( 'click', function(e) {

			e.preventDefault();

			if ( $(this).parent('li').hasClass('active') ) {
				return false;
			} else {
				$(this).parent('li').addClass('active').siblings('li').removeClass('active');
			}

			var $this = $(this);
			var filterValue = $this.data('target');

			// set filter for Isotope
			portfolioMsnry.isotope({ filter: filterValue });

			return $(this);
		});

		
	}
});

  </script>
  
  
</body>

</html>
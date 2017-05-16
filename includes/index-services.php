<section id="experience" class="root-sec padd-tb-120  experience-wrap">
            <div class="container">
                <div class="row">
                    <div class="experience-inner">
                        <div class="col-sm-12 col-md-12 card-box-wrap">
                            <div class="row">
                                <div class="clearfix section-head experience-text">
                                    <div class="col-sm-12">
                                        <h2 class="title">Gallery</h2>
                                    </div>
                                </div>
                                <div class="col-md-11 col-md-offset-1">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="educationSlider" class="clearfix card-element-wrapper">
<?php
include("includes/configdb.php");
$sql = "SELECT * FROM gallery ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-3  single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
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
                        <div class="btn-wrapp edu-ctrl">
                            <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                            <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
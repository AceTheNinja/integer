<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=no-js>
<!--<![endif]-->
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <title>Contact Us | INTEGER Innovation</title>
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href=images/favicon.png>
    <meta name=title content="Contact Us | INTEGER Innovation" />
    <meta name=keywords content="INTEGER Innovation" />
    <meta name=description content="LIVE interactive classes by industry experts, 24/7 training support, Project Based learning to get hands-on experience on a real life application." />
    <?php
    require_once 'includes/head.php';
    ?>
    <style>#map{width:100%;height:400px}#calculate-route .form-group input{color:#000}#calculate-route .form-group select{display:block;border-bottom-color:#9e9e9e;color:#9e9e9e;background:transparent;border-top:0;border-left:none}#calculate-route #from-link{color:#0091ea}</style>
</head>
<?php
require_once 'includes/header.php';
?>
<section id=contact class="scroll-section root-sec contact-wrap">
    <div class=container>
        <div class=row>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 wow slideInLeft">
                <div class=contact-form>
                    <?php
                    if (isset($_GET['data'])) {
                        $datacont = $_GET['data'];
                        if ($datacont == 1) {
                            ?>
                            <div class="alert alert-success">
                                Success! Well done its submitted.
                            </div>
                            <?php
                        } else if ($datacont == 2) {
                            ?>
                            <div class="alert alert-danger">
                                Error ! Occur.
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <br>
                    <h2>Drop Your Message</h2>
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                        <form action=includes/contactdb.php id=contactForm method=post enctype=multipart/form-data>
                            <div class=row>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class=form-group>
                                        <div class=input-field>
                                            <input id=contact_name type=text name=name class="input-box validate form-control" autocomplete=off required>
                                            <label for=contact_name class=input-label>Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class=form-group><div class=input-field>
                                            <input id=email type=email name=email class="validate form-control input-box" autocomplete=off required>
                                            <label for=email class=input-label>Email</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class=form-group>
                                        <div class=input-field>
                                            <input id=subject type=text name=subject class="validate input-box form-control" autocomplete=off required>
                                            <label for=subject class=input-label>Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class=form-group>
                                        <div class=input-field>
                                            <input id=Phone type=text name=phone pattern=[789][0-9]{9} required class="validate input-box form-control" autocomplete=off>
                                            <label for=Phone class=input-label>Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class=form-group>
                                        <div class="input-field textarea-input">
                                            <textarea id=textarea1 name=message class="validate materialize-textarea form-control" style=height:22px></textarea>
                                            <label for=textarea1 class=input-label>Message</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class=form-group>
                                        <div class="input-field textarea-input">
                                            <input type=text class="validate input-box form-control" name=captcha autocomplete=off />
                                            <label for=textarea1 class=input-label id=captchaOperation></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
                            $page = basename($_SERVER['PHP_SELF']);
                            ?>
                            <input type=hidden name=pagedir value=<?php echo $directory_self; ?>>
                            <input type=hidden name=pageurl value=<?php echo $page; ?>>
                            <div class="input-field submit-wrap clearfix">
                                <button type=submit class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow slideInRight">
                <div class=contact-info>
                    <h3>Contact Info</h3>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-home"></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p>INTEGER Innovation<br>
                            Block-F, Innovation Labs, Vikas Puri<br>(near Janakpuri West Metro), Delhi-110018</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-phone"></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p class=regular-text>011- 47065911</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-mobile-phone"></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p class=regular-text>+91 8759456371, +91 9910026353,<br> +91 9711614036</p>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-envelope-o"></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p class=regular-text><a href=mailto:trainings@integer-innovation.in>trainings@integer-innovation.in</a></p>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-handshake-o "></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p class=regular-text><a href=mailto:trainings@integer-innovation.in>hr@integer-innovation.in <br>rishav.agarwal@integer-innovation.in</a></p>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-globe"></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p class=regular-text><a href=index.php> www.integer-innovation.in</a></p>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-2 col-md-2">
                            <p><i class="fa fa-rss"></i></p>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <p class=regular-text><a href=index.php> xxx.blog.com </a></p>
                        </div>
                    </div>
                    <div class="social text">
                        <a href=http://www.facebook.com/INTEGER.Innovation class="link facebook" title="INTEGER Innovation facebook" target=_parent><span class="fa fa-facebook-square"></span></a>
                        <a href=https://twitter.com/INTEGERInnovatn class="link twitter" target=_parent title="INTEGER Innovation twitter"><span class="fa fa-twitter"></span></a>
                        <a href=https://plus.google.com/113670558187229529487 class="link google-plus" target=_parent title="INTEGER Innovation google-plus"><span class="fa fa-google-plus-square"></span></a>
                        <a href=https://www.linkedin.com/company/integer-innovation class="link linkdin" target=_parent title="INTEGER Innovation linkdin"><span class="fa fa-linkedin-square"></span></a>
                        <a href=https://www.pinterest.com/integerinnovati/ class="link pintrest" target=_parent title="INTEGER Innovation pinterest"><span class="fa fa-youtube-square"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-md-12>
                <br>
                <div id=map></div>
                <p id=error class=black-text></p><br>
                <h2 class="tittle black-text">Find the Route : </h2>
                <form id=calculate-route name=calculate-route action=# method=get>
                    <div class=row>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class=form-group>
                                <div class=input-field>
                                    <input type=text class="input-box validate form-control" id=from name=from required=required autocomplete="off"/>
                                    <label for=contact_name class=input-label id=lalbel_loc>Enter the Starting Address : </label>
                                    <a id=from-link href=#>Get my current position</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class=form-group>
                                <div class=input-field>
                                    <select id=mode class>
                                        <option value=null>Mode of Travel: </option>
                                        <option value=DRIVING>DRIVING</option>
                                        <option value=TRANSIT>TRANSIT</option>
                                        <option value=WALKING>WALKING</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type=hidden id=to name=to value="28.567863, 77.248975" />
                    <input type=submit value="Find path" class="btn btn-xs btn-danger blue darken-1" />
                    <input type=reset value=Reset class="btn btn-xs btn-danger blue darken-1" />
                </form>
                <div id=directionsPanel>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php
    include 'includes/footer.php';
    ?>
    <script type=text/javascript src=http://yourjavascript.com/17825231205/formvalidation-min.js></script>
<script src=js/bootstrap.js></script>
<script>$(document).ready(function(){$(".contact-form .alert").fadeOut(4000);function a(c,b){return Math.floor(Math.random()*(b-c+1)+c)}$("#captchaOperation").html([a(1,100),"+",a(1,200),"="].join(" "));$("#contactForm").formValidation({message:"This value is not valid",icon:{valid:"glyphicon glyphicon-ok",invalid:"glyphicon glyphicon-remove",validating:"glyphicon glyphicon-refresh"},fields:{name:{validators:{notEmpty:{message:"required"}}},email:{validators:{notEmpty:{message:"required"},emailAddress:{message:"Invalid email address"}}},subject:{validators:{notEmpty:{message:"required"}}},phone:{validators:{notEmpty:{message:"required"},phone:{message:"invalid ",country:"IN"},lessThan:{value:9999999999,message:"cant be more than 10 digits"},countries:{IN:"India",US:"USA"}}},message:{validators:{notEmpty:{message:"required"}}},captcha:{validators:{callback:{message:"Wrong answer",callback:function(f,c,e){var b=$("#captchaOperation").html().split(" "),d=parseInt(b[0])+parseInt(b[2]);return f==d}}}}}})});</script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqr-s0iDn1W45XgpfhqG8sct2nC6IQAqM&callback=initMap"></script>
<script>var directionDisplay;function initMap(){var d={draggable:true};directionsDisplay=new google.maps.DirectionsRenderer(d);var c={lat:28.5676184,lng:77.2490577};var b=new google.maps.Map(document.getElementById("map"),{zoom:16,center:c});var a=new google.maps.Marker({position:c,map:b,title:"INTEGER Innovation"});directionsDisplay.setMap(b);directionsDisplay.setPanel(document.getElementById("directionsPanel"))}function calculateRoute(g,f,c){var b={zoom:10,center:new google.maps.LatLng(28.5676184,77.2490577),mapTypeId:google.maps.MapTypeId.ROADMAP};var e=new google.maps.Map(document.getElementById("map"),b);var d=new google.maps.DirectionsService();var a={origin:g,destination:f,travelMode:google.maps.DirectionsTravelMode[c],unitSystem:google.maps.UnitSystem.IMPERIAL};d.route(a,function(i,h){if(h==google.maps.DirectionsStatus.OK){$("#directionsPanel").empty();directionsDisplay.setDirections(i);new google.maps.DirectionsRenderer({map:e,directions:i})}else{$("#error").append("Unable to retrieve your route<br/>")}})}$(document).ready(function(){if(typeof navigator.geolocation=="undefined"){$("#error").text("Your browser doesn't support the Geolocation API");return}$("#from-link, #to-link").click(function(b){b.preventDefault();var a=this.id.substring(0,this.id.indexOf("-"));navigator.geolocation.getCurrentPosition(function(c){var d=new google.maps.Geocoder();d.geocode({location:new google.maps.LatLng(c.coords.latitude,c.coords.longitude)},function(f,e){if(e==google.maps.GeocoderStatus.OK){$("#"+a).val(f[0].formatted_address);$("#lalbel_loc").hide()}else{$("#error").append("Unable to retrieve your address<br/>")}})},function(c){$("#error").append("Error: "+c.message+"<br/>")},{enableHighAccuracy:true,timeout:10*1000})});$("#calculate-route").submit(function(a){a.preventDefault();calculateRoute($("#from").val(),$("#to").val(),$("#mode").val())})});</script>
</body>
</html>
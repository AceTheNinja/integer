<?php

    echo '<div class="col-xs-12 col-md-6">
                                <div class="type-wrap" >
                                    <div id="typed-strings" >
                                        <p>Be a Gangnam Programmer</p>
                                        <p>We help you to build your career</p>
                                        <p>Upgrade yourself with new skills</p>
                                        <p>We Ideate, Innovate and Implement Solutions</p>
                                        <p>We provide quality services</p>
                                    </div>
                                    <span id="typed" style="white-space:pre;"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                
                            </div>';
    echo"<script>
            $(function () {
               var body = $('.home-inner');
                var backgrounds = [
                    'url(images/index/banner.jpg)',
                    'url(images/index/banner1.jpg)',
                    'url(images/index/banner2.jpg)'];
                var current = 0;
                function nextBackground() {
                    body.css({'background': backgrounds[current = ++current % backgrounds.length], 'background-repeat': 'no-repeat', 'background-size': '100% 100%'});
                    setTimeout(nextBackground, 10000);
                }
                setTimeout(nextBackground, 10000);
                body.css({'background-image': backgrounds[0], 'background-repeat': 'no-repeat', 'background-size': '100% 100%'});   
            });
        ";
?>
                            
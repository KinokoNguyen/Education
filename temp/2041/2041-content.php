<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2041">
    <div class="container testimonial-contant">
        <div class="sec-header">
            <h2>Read Our Testimonials</h2>
            <p>What Students say</p>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="main_area">
            <!-- Slider -->
            <div class="">
                <div class="" id="slider">
                    <!-- Top part of the slider -->
                    <div class="">
                        <div class="testimonial-data" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <div class="testimonial-text">
                                            <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                            <a href="#">Naiana Ansa</a>
                                        </div>
                                    </div>

                                    <div class="item" data-slide-number="1">
                                        <div class="testimonial-text">
                                            <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                            <a href="#">Jasmine Dou</a>
                                        </div>
                                    </div>

                                    <div class="item" data-slide-number="2">
                                        <div class="item" data-slide-number="1">
                                            <div class="testimonial-text">
                                                <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                <a href="#">David john</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item" data-slide-number="3">
                                        <div class="item" data-slide-number="1">
                                            <div class="testimonial-text">
                                                <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                <a href="#">Roth Brown</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item" data-slide-number="4">
                                        <div class="item" data-slide-number="1">
                                            <div class="testimonial-text">
                                                <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                <a href="#">Timothy Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- Carousel nav -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Slider-->
        </div>
        <div class="testimonial-data">
            <div id="bx-pager">
                <a id="carousel-selector-0">
                    <div class="thumb">
                        <img src="http://<?php echo $url_path ?>/images//student-testi1.jpg" alt="">
                    </div>
                    <p>Naiana Ansa</p>
                    <p class="color">guitarist</p>
                </a>
                <a id="carousel-selector-1">
                    <div class="thumb">
                        <img src="http://<?php echo $url_path ?>/images//student-testi2.jpg" alt="">
                    </div>
                    <p>Jasmine Dou</p>
                    <p class="color">student</p>
                </a>
                <a id="carousel-selector-2">
                    <div class="thumb">
                        <img src="http://<?php echo $url_path ?>/images//student-testi3.jpg" alt="">
                    </div>
                    <p>David john</p>
                    <p class="color">student</p>
                </a>
                <a id="carousel-selector-3">
                    <div class="thumb">
                        <img src="http://<?php echo $url_path ?>/images//student-testi4.jpg" alt="">
                    </div>
                    <p>Roth Brown</p>
                    <p class="color">Artist</p>
                </a>
                <a id="carousel-selector-4">
                    <div class="thumb">
                        <img src="http://<?php echo $url_path ?>/images//student-testi5.jpg" alt="">
                    </div>
                    <p>Timothy Smith</p>
                    <p class="color">Smithies</p>
                </a>
            </div>
        </div>
        <div class="side-imgage"><img src="http://<?php echo $url_path ?>/images//testimonials-bg2.png" alt=""></div>
    </div>
    <div id="bg5" data-0="background-position:0px 0px;"
         data-end="background-position:0px -1800px;" 
         class="skrollable skrollable-between" 
         style="background-position: 0px -1341.35px;">
        <div class="clearfix"></div>
    </div>

</div>
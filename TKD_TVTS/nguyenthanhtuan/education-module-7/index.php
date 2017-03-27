<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?> 
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body> 
        <div class="education-module-7">

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                <div class="widget widget-course-categories">
                                    <h2>Course Categorty</h2>
                                    <ul>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Office Productivity</a></li>
                                        <li><a href="#">IT &amp; Software</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Personal Development</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Health &amp; Fitness</a></li>
                                        <li><a href="#">Teacher Training</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Math &amp; Science</a></li>
                                        <li><a href="#">Social Science</a></li>
                                    </ul>
                                </div>

                                <div class="widget">
                                    <div class="box">
                                        <h2>Our Next Courses</h2>
                                        <ul class="event-galley next-course">

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img alt="" src="images/event1.png"></a>
                                                </div>
                                                <div class="text">
                                                    <h4><a href="#">Computer</a></h4>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                                    <span class="rate"><small>$</small> 27</span>
                                                </div>
                                            </li>


                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img alt="" src="images/event2.png"></a>
                                                </div>
                                                <div class="text">
                                                    <h4><a href="#">Computer</a></h4>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                                    <span class="rate"><small>$</small> 27</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img alt="" src="images/event3.png"></a>
                                                </div>
                                                <div class="text">
                                                    <h4><a href="#">Computer</a></h4>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                                    <span class="rate"><small>$</small> 27</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="thumb">
                                                    <a href="#"><img alt="" src="images/event4.png"></a>
                                                </div>
                                                <div class="text">
                                                    <h4><a href="#">Computer</a></h4>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                                    <span class="rate"><small>$</small> 27</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="widget widget-slider">
                                    <h2>Upcoming Courses</h2>
                                    <div class="bx-wrapper" style="max-width: 100%;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 648px;">
                                            <ul class="bxslider" style="width: auto; position: relative;">
                                                <li style="float: none; list-style: none; position: absolute; display: none; width: 250px; z-index: 0;">
                                                    <div class="thumb">
                                                        <img src="images/side-slider.png?timestamp=1489747393194" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <p>Creating Responsive Web Design</p>
                                                    </div>
                                                </li>
                                                <li style="float: none; list-style: none; position: absolute; width: 250px; display: list-item; z-index: 50;">
                                                    <div class="thumb">
                                                        <img src="images/side-slider.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <p>Creating Responsive Web Design</p>
                                                    </div>
                                                </li>
                                                <li style="float: none; list-style: none; position: absolute; width: 250px; display: none; z-index: 0;">
                                                    <div class="thumb">
                                                        <img src="images/side-slider.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <p>Creating Responsive Web Design</p>
                                                    </div>
                                                </li>
                                            </ul></div><div class="     "><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class=" ">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="  active">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class=" ">3</a></div></div><div class="  "><a class="bx-prev" href=""></a><a class="bx-next" href=""></a></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>


</html>
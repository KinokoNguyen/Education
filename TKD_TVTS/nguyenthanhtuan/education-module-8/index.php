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
        <div class="education-module-8">

            <div class="course-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bx-wrapper" style="max-width: 100%;">
                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative;">
                                    <div class="bx-loading"></div>
                                    <ul class=" " style="width: auto; position: relative;">
                                        <li style="float: none; list-style: none; width: 465px; position: absolute; z-index: 50; display: block;"><img src="images/course-detail1.png?timestamp=1489835415090" alt=""></li>
                                        <li style="float: none; list-style: none; width: 465px; position: absolute; z-index: 0; display: none;"><img src="images/course-detail2.png" alt=""></li>
                                        <li style="float: none; list-style: none; width: 465px; position: absolute; z-index: 0; display: none;"><img src="images/course-detail3.png" alt=""></li>
                                        <li style="float: none; list-style: none; width: 465px; position: absolute; z-index: 0; display: none;"><img src="images/course-detail4.png" alt=""></li>
                                        <li style="float: none; list-style: none; width: 465px; position: absolute; z-index: 0; display: none;"><img src="images/course-detail1.png" alt=""></li>
                                        <li style="float: none; list-style: none; width: 465px; position: absolute; z-index: 0; display: none;"><img src="images/course-detail2.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class=" ">
                                    <div class="bx-controls-direction">
                                        <a class="bx-prev" href=""></a>
                                        <a class="bx-next" href=""></a>
                                    </div>
                                </div>
                            </div>
                            <div id="bx-pager">
                                <a data-slide-index="0" href=""><img src="images/course-detail1.png" alt=""></a>
                                <a data-slide-index="1" href=""><img src="images/course-detail2.png" alt=""></a>
                                <a data-slide-index="2" href=""><img src="images/course-detail3.png" alt=""></a>
                                <a data-slide-index="3" href=""><img src="images/course-detail4.png" alt=""></a>
                                <a data-slide-index="4" href=""><img src="images/course-detail1.png" alt=""></a>
                                <a data-slide-index="5" href=""><img src="images/course-detail2.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="text">
                                <h2>Creating Responsive Web Design</h2>
                                <h5>Learn how to optimize your webpages for different screen sizes and platforms.</h5>
                                <div class="reviews">
                                    <a href="#">109 Reviews</a>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <p>orem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu. Vel an hinc putant fierent, saperet legimus offendit sed ei doctus volumus explicari qui ex, appareat similique an usu. . Dolor euripidis cum eu, ea per lucilius periculis corrumpit, ut euismod omittam ancillae his.</p>
                                <ul>
                                    <li><a href="#">HTML5, CSS3, and Media Queries</a></li>
                                    <li><a href="#">HTML5Shiv for Internet Explorer</a></li>
                                    <li><a href="#">Photoshop Image Optimization and Slicing</a></li>
                                    <li><a href="#">Design Adaptations for Various Screens</a></li>
                                </ul>
                            </div>
                            <div class="course-category">
                                <a href="#">Category: Design / Web Design </a>
                                <h3>26800 students enrolled </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<!DOCTYPE html>
<html>

    <head>

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
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body> 
        <div class="education_module10">
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

                        </div>
                    </div>

                    <!--categories-->
                </div>
            </div>

        </div>
    </body>
</html>
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/transitions.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="widget widget-courses">
                                <div class="inner">
                                    <h2>Visit Our Top Courses</h2>
                                        <div style="width: 100%; overflow: hidden; position: relative; height: 188px;">
                                            <ul  style="width: auto; position: relative;">
                                                <li style="float: none; list-style: none; position: absolute;  width: 330px;">
                                                    <div class="top-courses">
                                                        <div class="thumb">
                                                            <a href="#"><img src="images/top-courses.jpg" alt=""></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Intro to Java Programming</a></h4>
                                                            <p>Learn essential computer science and object-oriented programming concepts in this introductory Java course. </p>
                                                            <a href="#" class="btn-style">Lets Visit</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
        <div class="type-1">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <!--BLOG START-->
                        <div class="blog-contant">
                            <h2><a href="#">Summer Holidays Education</a></h2>
                            <div class="blog-tags">
                                Filed in: <a href="#">Online Courses</a> /  Tags: <a href="#">Fashion</a>, <a href="#">Learning</a>, <a href="#">webdesign</a>, <a href="#">Course</a>
                            </div>
                            <div class="thumb">
                                <a href="#"><img src="images/blog-img.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                                <a href="#" class="btn-style">Read More</a>
                            </div>
                            <div class="blog-comments">
                                <a href="#"><i class="fa fa-user"></i>David</a>
                                <a href="#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>
                                <a href="#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>
                            </div>
                        </div>
                        <!--BLOG END-->


                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
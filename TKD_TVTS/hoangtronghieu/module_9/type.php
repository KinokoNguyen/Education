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
        <div class="type-9">
            <div class="contant">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog">
                                <div class="comments">
                                    <h2>Latest Comments</h2>
                                    <ul>

                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img src="images/comment-img.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h4><a href="#">John Doe</a></h4>
                                                <p class="date">March 29, 2014 - 18:57PM</p>
                                                <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                                <a href="#" class="btn-style">Reply</a>
                                            </div>

                                            <ul>

                                                <li>
                                                    <div class="thumb">
                                                        <a href="#"><img src="images/comment-img.jpg" alt=""></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">John Doe</a></h4>
                                                        <p class="date">March 29, 2014 - 18:57PM</p>
                                                        <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                                        <a href="#" class="btn-style">Reply</a>
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="thumb">
                                                        <a href="#"><img src="images/comment-img.jpg" alt=""></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">John Doe</a></h4>
                                                        <p class="date">March 29, 2014 - 18:57PM</p>
                                                        <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                                        <a href="#" class="btn-style">Reply</a>
                                                    </div>
                                                    <ul>

                                                        <li>
                                                            <div class="thumb">
                                                                <a href="#"><img src="images/comment-img.jpg" alt=""></a>
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">John Doe</a></h4>
                                                                <p class="date">March 29, 2014 - 18:57PM</p>
                                                                <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                                                <a href="#" class="btn-style">Reply</a>
                                                            </div>
                                                        </li>


                                                        <li>
                                                            <div class="thumb">
                                                                <a href="#"><img src="images/comment-img.jpg" alt=""></a>
                                                            </div>
                                                            <div class="text">
                                                                <h4><a href="#">John Doe</a></h4>
                                                                <p class="date">March 29, 2014 - 18:57PM</p>
                                                                <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                                                <a href="#" class="btn-style">Reply</a>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>﻿
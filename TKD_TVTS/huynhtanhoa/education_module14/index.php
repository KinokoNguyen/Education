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
        <div class="education_module14">
            <div class="container">
                <div class="gallery">
                    <h2>4 Comlumn Gallery</h2>
                    <ul class="row">
                        <li class="col-md-3">
                            <img src="images/gallery1.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery1.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery2.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery2.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery3.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery3.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery4.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery4.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery5.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery5.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery6.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery6.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery7.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery7.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <img src="images/gallery8.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery8.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                
                
                
                <div class="gallery">
                    <h2>3 Comlumn Gallery</h2>
                    <ul class="row">
                        <li class="col-md-4">
                            <img src="images/gallery1.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery1.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery2.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery2.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery3.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery3.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery4.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery4.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery5.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery5.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery6.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery6.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery7.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery7.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <img src="images/gallery8.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery8.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        
                          <li class="col-md-4">
                            <img src="images/gallery1.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery1.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                
                
                    <div class="gallery">
                    <h2>2 Comlumn Gallery</h2>
                    <ul class="row">
                        <li class="col-md-6">
                            <img src="images/gallery1.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery1.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="images/gallery2.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery2.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="images/gallery3.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery3.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="images/gallery4.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery4.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="images/gallery5.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery5.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="images/gallery6.jpg" alt="">
                            <div class="social-icons">
                                <a href="images/gallery6.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                                <br>
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-info-circle"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="container">
                <div class="pagination">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
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
        <div class="education-module-6">

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="featured-courses">
                                <h2>Browsing All Topics</h2>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course1.jpg"></a>
                                                <div class="price"><span>$</span>21</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Music</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$800</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course2.jpg"></a>
                                                <div class="price"><span>$</span>32</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Holidays Education</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$750</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course3.jpg"></a>
                                                <div class="price"><span>$</span>75</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Marketing</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$925</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course4.jpg"></a>
                                                <div class="price"><span>$</span>25</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Management</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$1000</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course1.jpg"></a>
                                                <div class="price"><span>$</span>21</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Music</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$800</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course2.jpg"></a>
                                                <div class="price"><span>$</span>32</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Holidays Education</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$750</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course3.jpg"></a>
                                                <div class="price"><span>$</span>75</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Marketing</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$925</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course4.jpg"></a>
                                                <div class="price"><span>$</span>25</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Management</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$1000</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course1.jpg"></a>
                                                <div class="price"><span>$</span>21</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Music</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$800</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course2.jpg"></a>
                                                <div class="price"><span>$</span>32</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Holidays Education</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$750</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course3.jpg"></a>
                                                <div class="price"><span>$</span>75</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Marketing</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$925</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="course">
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/course4.jpg"></a>
                                                <div class="price"><span>$</span>25</div>
                                            </div>
                                            <div class="text">
                                                <div class="header">
                                                    <h4>Management</h4>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                </div>
                                                <div class="course-name">
                                                    <p>How to play the guitar</p>
                                                    <span>$1000</span>
                                                </div>
                                                <div class="course-detail-btn">
                                                    <a href="#">Subscribe</a>
                                                    <a href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

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
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>
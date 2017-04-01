<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2034">
    <header>
        <div class="top-strip">
            <div class="container">

                <!--LANGUAGE-->
                <div class="language">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" role="button">
                            Language 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel1">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spenish</a></li>
                            <li><a href="#">Turkish</a></li>
                            <li><a href="#">Arabic</a></li>
                        </ul>
                    </li>
                    <!--CURRENCY-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" role="button">
                            Currency 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="currency">
                            <li><a href="#">Dollar</a></li>
                            <li><a href="#">Euro</a></li>
                            <li><a href="#">Dirham</a></li>
                            <li><a href="#">Rupees</a></li>
                            <li><a href="#">Dinar</a></li>
                        </ul>
                    </li>
                    <!--/END CURRENCY-->
                </div>      
                <!--/END LANGUAGE-->

                <!--ACCOUNT-->
                <div class="account">
                    <li><a href="#">Subscribe</a></li>
                    <li><a href="#">Sign Out</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" role="button">
                            My Account 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li><a href="#">Privacy Setting</a></li>
                        </ul>
                    </li>
                </div>
                <!--/END ACCOUNT-->

            </div>
        </div>
        <div class="clearfix"></div>

        <!--MENU-->
        <nav class="navbar navbar-default">
            <div class="container">

                <!--LOGO-->
                <div class="logo">
                    <a href="#">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </a>
                </div>
                <!--/END LOGO-->

                <!--CART-->
                <div class="cart">
                    <ul>
                        <!--SEARCH-->
                        <li>
                            <div class="search-bar"><i class="fa fa-search"></i></div>
                            <div class="search-box">
                                <input type="text" class="input-block-level">
                            </div>
                        </li>
                        <!--/END SEARCH-->

                        <li class="dropdown">
                            <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
                                <i class="fa fa-briefcase"></i><span>&euro;0</span>
                            </a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <p>0 items in shopping bag</p>
                                <p class="color">Unfortunately, your shopping bag is emtpy.</p>
                                <a href="#" class="return">Return to the Shop</a>
                            </div>
                        </li>
                        <li><i class="fa fa-star"></i><span>3</span></li>
                    </ul>
                </div>
                
                <div class="navbar-header">
                    <!--BUTTON TOGGLE-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--/END BUTTON TOGGLE-->
                </div>
                <!--COLLAPSE-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Home Page Default</a></li>
                                <li><a href="#">Home Page 1</a></li>
                                <li><a href="#">Home Page 2</a></li>
                                <li><a href="#">Home Page 3</a></li>
                                <li><a href="#">Home Page 4</a></li>
                                <li><a href="#">Home Page 5</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Event Detail</a></li>   
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Course Detail</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Error 404</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Our Lessons</a></li>
                                <li><a href="#">Search Result</a></li>
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">Student Login</a></li>
                                <li><a href="#">Student Profile</a></li>
                                <li><a href="#">Teacher Profile</a></li>
                                <li><a href="#">Our Team</a></li>
                             
                            </ul>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <!--/END COLLAPSE-->
                <!--/END CART-->

                


            </div>
        </nav>
        <!--/END MENU-->
        <div class="clearfix"></div>
    </header>
</div>
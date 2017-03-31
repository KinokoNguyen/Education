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
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="dLabel1" role="button" data-toggle="dropdown" data-target="#" href="#">
                            Language
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel1">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spenish</a></li>
                            <li><a href="#">Turkish</a></li>
                            <li><a href="#">Arabic</a></li>
                        </ul>
                    </div>
                    <!--CURRENCY-->
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="currency" role="button" data-toggle="dropdown" data-target="#" href="#">
                            Currency
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="currency">
                            <li><a href="#">Dollar</a></li>
                            <li><a href="#">Euro</a></li>
                            <li><a href="#">Dirham</a></li>
                            <li><a href="#">Rupees</a></li>
                            <li><a href="#">Dinar</a></li>
                        </ul>
                    </div>
                    <!--/END CURRENCY-->
                </div>      
                <!--/END LANGUAGE-->

                <!--ACCOUNT-->
                <div class="account">
                    <ul>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Sign Out</a></li>
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#" href="#">
                                    My Account
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li><a href="#">Privacy Setting</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/END ACCOUNT-->

            </div>
        </div>

        <!--MENU-->
        <div class="navigation-bar">
            <div class="container">
                <!--LOGO-->
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
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
                <!--/END CART-->

                <!--NAVAR-->
                <div class="navigation">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container">
                                <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="nav-collapse collapse">
                                    <ul>
                                        <li><a href="javascript:void(0)">Home</a>
                                            <ul>
                                                <li><a href="#">Home Page Default</a></li>
                                                <li><a href="#">Home Page 1</a></li>
                                                <li><a href="#">Home Page 2</a></li>
                                                <li><a href="#">Home Page 3</a></li>
                                                <li><a href="#">Home Page 4</a></li>
                                                <li><a href="#">Home Page 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Blog</a>
                                            <ul>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="javascript:void(0)">Events</a>
                                            <ul>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Event Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Courses</a>
                                            <ul>
                                                <li><a href="#">Courses</a></li>
                                                <li><a href="#">Course Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Pages</a>
                                            <ul>
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
                                                <li><a href="#">Edit Your Profile</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--NAVAR-->
            </div>
        </div>
        <!--/END MENU-->
    </header>
</div>
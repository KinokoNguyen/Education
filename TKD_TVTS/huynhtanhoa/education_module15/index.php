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
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head> 

    <body> 
        <div class="education_module15">

            <div class="container">
                <div class="row">
                    <section class="gray-bg">
                        <div class="col-md-6">
                            <div class="intro">
                                <h2>Everything you need to know</h2>
                                <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.
                                    Cum copiosae pertinacia ei, admodum volumus cum ut, erat nonumy his te. Iudico praesent sed id, nam error consequat reprehendunt no. Nostrud nostrum tacimates mei ut, debet facilisi in ius, dolor accusam omittam eu sea. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/mac-screen2.png" alt="Chania" width="460" height="266">
                                    </div>

                                    <div class="item">
                                        <img src="images/mac-screen1.png" alt="Chania" width="460" height="266">
                                    </div>

                                    <div class="item">
                                        <img src="images/mac-screen2.png" alt="Flower" width="460" height="266">
                                    </div>

                                    <div class="item">
                                        <img src="images/mac-screen1.png" alt="Flower" width="460" height="266">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
<!doctype html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/chart.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/transitions.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compilefile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-7">
        <div class="contant">
            <section class="gray-bg">
                <div class="container">

                    <div class="sec-header">
                        <h2>our extra features</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>


                    <div class="features">
                        <div class="row">
                            <div class="span2">
                                <i class="fa fa-comments"></i>
                                <h4>consulting</h4>
                                <p>in quis magna eget magna rutrum hendrerit. donec dap ibus aliquet magna in facilisis.
                                </p>
                            </div>
                            <div class="span2">
                                <i class="fa fa-calendar"></i>
                                <h4>planning</h4>
                                <p>in quis magna eget magna rutrum hendrerit. donec dap ibus aliquet magna in facilisis.
                                </p>
                            </div>
                            <div class="span2">
                                <i class="fa fa-cogs"></i>
                                <h4>development</h4>
                                <p>in quis magna eget magna rutrum hendrerit. donec dap ibus aliquet magna in facilisis.
                                </p>
                            </div>
                            <div class="span2">
                                <i class="fa fa-bullhorn"></i>
                                <h4>production</h4>
                                <p>in quis magna eget magna rutrum hendrerit. donec dap ibus aliquet magna in facilisis.
                                </p>
                            </div>
                            <div class="span2">
                                <i class="fa fa-bar-chart-o"></i>
                                <h4>analysis</h4>
                                <p>in quis magna eget magna rutrum hendrerit. donec dap ibus aliquet magna in facilisis.
                                </p>
                            </div>
                            <div class="span2">
                                <i class="fa fa-plane"></i>
                                <h4>release</h4>
                                <p>in quis magna eget magna rutrum hendrerit. donec dap ibus aliquet magna in facilisis.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="tabs">
                        <div class="row">
                            <div class="span6">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#how">how we do</a></li>
                                    <li class=""><a data-toggle="tab" href="#features">features</a></li>
                                    <li class=""><a data-toggle="tab" href="#about">about theme</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="how" class="tab-pane fade active in">
                                        <p>suspendisse dictum quam tortor, et dapibus lacus. quisque euismod lacus in mi consequat sed pulvinar elit ultricies. nam eu ligula
                                            ut massa lobortis scelerisque.
                                        </p>
                                        <p>
                                            curabitur at rhoncus quam. in in tortor quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie. curabitur at rhoncus quam. in in tortor
                                            quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie.
                                        </p>
                                    </div>
                                    <div  class="tab-pane fade">
                                        <p>curabitur at rhoncus quam. in in tortor quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie.
                                            curabitur at rhoncus quam. in in tortor quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie.
                                        </p>
                                        <p>
                                            curabitur at rhoncus quam. in in tortor quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie. curabitur at rhoncus quam. in in tortor
                                            quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade">
                                        <p>
                                            curabitur at rhoncus quam. in in tortor quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie. curabitur at rhoncus quam. in in tortor
                                            quis sem tempor ultricies in eu risus. fusce posuere justo et metus semper molestie.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="message-box">
                                    <h2>everything you need to know</h2>
                                    <h4>lorem ipsum dolor sit amet, ius minim gubergren ad. at mei sumo sonet audiam, ad mutat elitr platonem vix.
                                    </h4>
                                    <p>ne nisl idque fierent vix. ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. an gloriatur vulputate eos, an sed
                                        fuisset, in quo inani eligendi.c iudico praesent sed id, nam error consequat reprehendunt no. nostrud nostrum tacimates mei ut,
                                        debet facilisi in ius, dolor accusam omittam eu sea.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        </div>
        <script src="css/jquery-1.11.0.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
    </body>

</html>
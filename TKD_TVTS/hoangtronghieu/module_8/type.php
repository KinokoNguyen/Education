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
        <div class="type-8">
            <div class="contant">
                <section>
                    <div class="container">
                        <div class="sec-header">
                            <h2>our skills</h2>
                            <p>what students say</p>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="our-skills">

                            <div class="row">
                                <div class="span4">
                                    <div class="chart easypiechart" data-percent="65" data-size="180" data-barcolor="#00a685" style="width: 180px; height: 180px; line-height: 180px;"><span>65</span>%
                                        <canvas width="180" height="180"></canvas>
                                    </div>
                                    <div class="skills">
                                        <h4>service 1</h4>
                                        <p>maecenas tempus, ante a gravida
                                        </p>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="chart easypiechart" data-percent="85" data-size="180" data-barcolor="#00a685" style="width: 180px; height: 180px; line-height: 180px;"><span>85</span>%
                                        <canvas width="180" height="180"></canvas>
                                    </div>
                                    <div class="skills">
                                        <h4>service 1</h4>
                                        <p>maecenas tempus, ante a gravida
                                        </p>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="chart easypiechart" data-percent="35" data-size="180" data-barcolor="#00a685" style="width: 180px; height: 180px; line-height: 180px;"><span>35</span>%
                                        <canvas width="180" height="180"></canvas>
                                    </div>
                                    <div class="skills">
                                        <h4>service 1</h4>
                                        <p>maecenas tempus, ante a gravida
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="span6">
                                    <h3>lesson attachments and questions</h3>
                                    <div class="progress">
                                        <div class="bar" style="width: 40%;"></div>
                                    </div>
                                    <h3>ultimate university conference
                                    </h3>
                                    <div class="progress">
                                        <div class="bar" style="width: 90%;"></div>
                                    </div>
                                    <h3>club dance course</h3>
                                    <div class="progress">
                                        <div class="bar" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <ul class="list-style1">
                                        <li><a href="#">lorem ipsum dolorem</a></li>
                                        <li><a href="#">niel satim notevole ancorando</a></li>
                                        <li><a href="#">misi misi folerum totem kleine</a></li>
                                        <li><a href="#">andromeda foligno e cipolla</a></li>
                                        <li><a href="#">lorem ipsum dolorem</a></li>
                                        <li><a href="#">niel satim notevole ancorando</a></li>
                                        <li><a href="#">misi misi folerum totem kleine</a></li>
                                        <li><a href="#">andromeda foligno e cipolla</a></li>
                                        <li><a href="#">lorem ipsum dolorem</a></li>
                                    </ul>
                                </div>
                                <div class="span3">
                                    <ul class="list-style2">
                                        <li><a href="#">lorem ipsum dolorem</a></li>
                                        <li><a href="#">niel satim notevole ancorando</a></li>
                                        <li><a href="#">misi misi folerum totem kleine</a></li>
                                        <li><a href="#">andromeda foligno e cipolla</a></li>
                                        <li><a href="#">lorem ipsum dolorem</a></li>
                                        <li><a href="#">niel satim notevole ancorando</a></li>
                                        <li><a href="#">misi misi folerum totem kleine</a></li>
                                        <li><a href="#">andromeda foligno e cipolla</a></li>
                                        <li><a href="#">lorem ipsum dolorem</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="css/jquery-1.11.0.min.js"></script>

        <script src="css/bootstrap.min.js"></script>


        <script type="text/javascript" src="css/jquery.easy-pie-chart.js"></script>


        <script src="css/functions.js"></script>


    </body>

</html>
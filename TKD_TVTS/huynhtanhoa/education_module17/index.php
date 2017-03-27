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
        <div class="education_module17">
            <section class="upcoming-events">
                <div class="container">
                    <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 150px;"><ul class="bxslider" style="width: auto; position: relative;">

                                <li style="float: none; list-style: none; position: absolute; display: none; z-index: 0; width: 1170px;">
                                    <div class="event-contant">
                                        <div class="thumb">
                                            <a href="#"><img src="images/event-img.jpg?timestamp=1489908800667" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2>Upcoming Events 1</h2>
                                            <h4>Free Seminar at London14 May 2014 10:00 am</h4>
                                            <p>Quisque tortor nisi, tristique sit amet commodo vel, commodo at mauris. Vestibulum vel justo neque, non pharetra orci. Integer nec est mauris, in vestibulum elit. Nulla facilisi. Praesent eu dolor lacus. Vestibulum laoreet sodales...</p>
                                        </div>
                                    </div>
                                </li>


                                <li style="float: none; list-style: none; position: absolute; display: none; z-index: 0; width: 1170px;">
                                    <div class="event-contant">
                                        <div class="thumb">
                                            <a href="#"><img src="images/event-img2.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2>Upcoming Events 2</h2>
                                            <h4>Free Seminar at London14 May 2014 10:00 am</h4>
                                            <p>Quisque tortor nisi, tristique sit amet commodo vel, commodo at mauris. Vestibulum vel justo neque, non pharetra orci. Integer nec est mauris, in vestibulum elit. Nulla facilisi. Praesent eu dolor lacus. Vestibulum laoreet sodales...</p>
                                        </div>
                                    </div>
                                </li>


                                <li style="float: none; list-style: none; position: absolute; display: list-item; z-index: 50; width: 1170px;">
                                    <div class="event-contant">
                                        <div class="thumb">
                                            <a href="#"><img src="images/event-img3.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2>Upcoming Events 3</h2>
                                            <h4>Free Seminar at London14 May 2014 10:00 am</h4>
                                            <p>Quisque tortor nisi, tristique sit amet commodo vel, commodo at mauris. Vestibulum vel justo neque, non pharetra orci. Integer nec est mauris, in vestibulum elit. Nulla facilisi. Praesent eu dolor lacus. Vestibulum laoreet sodales...</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class=""><div class="bx-pager">
                                <div class="bx-pager-item"><a href="" data-slide-index="0" class=" ">1</a>
                                </div>
                                <div class="bx-pager-item"><a href="" data-slide-index="1" class=" active">2</a>
                                </div>
                                <div class="bx-pager-item"><a href="" data-slide-index="2" class=" ">3</a>
                                </div>
                            </div>
                            <div class="bx-controls-direction"><a class="bx-prev" href=""></a><a class="bx-next" href=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
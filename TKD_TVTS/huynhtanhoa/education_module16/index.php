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
        <script src="js/jquery.accordion.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body> 
        <div class="education_module16">
            <div class="container">
                <div class="row">
                        <div class="col-md-8">
                            <div class="faq">
                                <h2>why choose us</h2>

                                <div class="accordion_cp accordion-close" id="section1">
                                    <p>we provide courses at affordable prices</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>


                                <div class="accordion_cp accordion-close" id="section2">
                                    <p>WE PROVIDE A VARIETY OF COURSES cHECK OUT THE COUSES NOW</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>


                                <div class="accordion_cp accordion-close" id="section3">
                                    <p>We have world class teaching facilities</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>


                                <div class="accordion_cp accordion-close" id="section4">
                                    <p>Learning Management</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>


                                <div class="accordion_cp accordion-close" id="section5">
                                    <p>Learn Cooking Basics Online</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>


                                <div class="accordion_cp accordion-close" id="section6">
                                    <p>What you have to know about MBA</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>


                                <div class="accordion_cp accordion-close" id="section7">
                                    <p>WE PROVIDE A VARIETY OF COURSES cHECK OUT THE COUSES NOW</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="contain_cp_accor" style="display: none;">
                                    <div class="content_cp_accor">
                                        <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
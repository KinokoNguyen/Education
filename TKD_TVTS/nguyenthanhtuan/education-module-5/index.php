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
        <div class="education-module-5">

            <div class="container">
                <div class="event-page">
                    <div class="admin">
                        <div class="thumb">
                            <a href="#"><img alt="" src="images/admin.jpg"></a>
                        </div>
                        <div class="text">
                            <div class="social-icons">
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <h2><a href="#">Administrator</a></h2>
                            <p class="profession">Photographer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nulla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus tristique aliquet semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="leave-reply">
                                <h2>Leave Us a Reply</h2>
                                <form>
                                    <div class="row-fluid">
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Name" class=" ">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="E-mail" class=" ">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Website" class=" ">
                                        </div>
                                        <div class=" ">
                                            <textarea placeholder="Comments" class=" "></textarea>
                                            <button class="btn-style">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="campaign">
                                <h4>Campaign Launched on 25 January, 2014 at LONDON, UK</h4>
                                <p>share THIS CAMPAIGN</p>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    <a href="#"><i class="fa fa-comment-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </body>


</html>
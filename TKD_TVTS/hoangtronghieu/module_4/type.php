<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/transitions.css">
        <link rel="stylesheet" type="text/css" href="css/color.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="widget widget-tags">
                                <h2>Papular Tags</h2>
                                <ul>
                                    <li><a href="#">resource</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">art</a></li>
                                    <li><a href="#">icon</a></li>
                                    <li><a href="#">Photoshop</a></li>
                                    <li><a href="#">Template</a></li>
                                    <li><a href="#">resource</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">art</a></li>
                                    <li><a href="#">icon</a></li>
                                    <li><a href="#">Photoshop</a></li>
                                    <li><a href="#">Template</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-newsletter">
                                <div class="inner">
                                    <h2>Join Newsletters</h2>
                                    <div class="input-cover">
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="text"  placeholder="Enter Your E-Mail ID">
                                    </div>
                                    <button class="btn-style">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
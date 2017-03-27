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
        <div class="type-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="widget widget-twitter">
                                <h2>Latest Tweets</h2>
                                <ul>
                                    <li>
                                        <p>What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.</p>
                                        <a href="#"># Quotes About Photography</a>
                                        <p>8 mins ago</p>
                                    </li>
                                    <li>
                                        <p>There are no bad pictures; that's just how your face looks sometimes..</p>
                                        <a href="#"># Quotes About Photography</a>
                                        <p >8 mins ago</p>
                                    </li>
                                    <li>
                                        <p>What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.</p>
                                        <a href="#"># Quotes About Photography</a>
                                        <p >8 mins ago</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
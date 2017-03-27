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
        <div class="education-module-1">


            <div class="page-heading">
                <div class="container">
                    <h2>Events</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                </div>
            </div>
        </div>

    </body>


</html>
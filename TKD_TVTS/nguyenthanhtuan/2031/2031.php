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
        $less->compileFile('less/2031.less', 'css/2031.css');
        ?> 
        <link href="css/2031.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body>
        <div class="container-fluid bg-color">
            <div class="row">
                <div class="container">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php
                        include './2031-content.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
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
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body> 
        <div class="education_module11">
            <div class="container fix">
                <div class="row">
                    <div class="page-heading">
                        <div class="container">
                            <h2>Error 404</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
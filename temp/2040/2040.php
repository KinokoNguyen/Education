<!DOCTYPE html>
<html>

    <head>
        <title>Tab</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2040.less', 'css/2040.css');
        ?> 

        <link href="css/2040.css" rel="stylesheet" type="text/css"/>

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head> 
    <body> 
        <?php
        include './2040-content.php';
        ?>
    </body>
</html>
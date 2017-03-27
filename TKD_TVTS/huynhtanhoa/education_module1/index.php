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
        <div class="education_module1">
            <div class="container">
                <div class="row">
                    <div class="error">
                        <p class="error-404">4<span><img src="images/error.png" alt=""></span>4</p>
                        <p class="ohh">Uh Oh! Looks like something broke.</p>
                        <p class="away">Take me away <span class="color">or</span> Report This</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
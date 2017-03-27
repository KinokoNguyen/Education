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
        <div class="education_module7">
            <div class="container">     
                <div class="row">
                    <div class="clearfix"></div>
                    <div class="the-best">
                        <p>The Best Websites for Free Online Courses, Certificates, Degrees, and Educational Resources</p>
                        <h2>take $10 0ff for new users</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </body>
</html>
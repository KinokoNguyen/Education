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

    </head> 

    <body> 
        <div class="education_module9">
            <div class="container">
                <div class="row">
                    <div class="buttons">
                        <button class="btn1 login-btn"><i class="fa fa-facebook"></i>Login with Facebook</button>
                        <button class="btn2 login-btn"><i class="fa fa-google-plus"></i>Login with Google</button>
                        <button class="btn3 login-btn"><i class="fa fa-yahoo"></i>Login with Yahoo</button>
                        <button class="btn4 login-btn"><i class="fa fa-linkedin"></i>Login with Linkein</button>
                        <button class="btn5 login-btn"><i class="fa fa-windows"></i>Login with Window Live</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
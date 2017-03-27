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
        <div class="education_module4">
            <div class="container">
                <div class="row">
                    <div class="search-result">
                        <h1>Page Not Found!</h1>
                        <h2>Page you are looking for has been removed. Back to <a href="#">HOME</a></h2>
                        <div class="cover">
                            <input type="text" class="input-block-level" placeholder="Enter Your Keyword">
                            <button class="btn-style"><i class="fa fa-search"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
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
        <div class="type-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="span8">
                            <div class="blog">
                                <div class="leave-reply">
                                    <h2>Leave Us a Reply</h2>
                                    <form>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <input type="text"  placeholder="Name">
                                            </div>
                                            <div class="span4">
                                                <input type="text"  placeholder="E-mail">
                                            </div>
                                            <div class="span4">
                                                <input type="text"  placeholder="Website">
                                            </div>
                                            <div class="text-area">
                                                <textarea  placeholder="Comments"></textarea>
                                                <button class="btn-style">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>   
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
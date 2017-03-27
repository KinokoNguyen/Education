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
        <div class="education_module5">
            <div class="container">
                <div class="row">
                    <div class="student-profile">
                        <div class="col-md-6">
                            <h2>600+ High Quality Courses</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. Sed id odio ante.</p>
                            <p class="color">Duis bibendum metus eu urna placerat mattis! Duis bibendum tempor massa at tristique. Integer viverr metus vitae lectus dictum eleifend amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. </p>
                            <p>Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. </p>
                            <a href="#" class="btn-style">View Courses</a>
                        </div>
                        <div class="col-md-6">
                            <img src="images/student-profile1.jpg" alt="">
                        </div>
                    </div>

                    <div class="student-profile">
                        <div class="col-md-6">
                            <h2>600+ High Quality Courses</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. Sed id odio ante.</p>
                            <p class="color">Duis bibendum metus eu urna placerat mattis! Duis bibendum tempor massa at tristique. Integer viverr metus vitae lectus dictum eleifend amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. </p>
                            <p>Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. </p>
                            <a href="#" class="btn-style">View Courses</a>
                        </div>
                        <div class="col-md-6">
                            <img src="images/student-profile1.jpg" alt="">
                        </div>
                    </div>

                    <div class="student-profile">
                        <div class="col-md-6">
                            <h2>600+ High Quality Courses</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. Sed id odio ante.</p>
                            <p class="color">Duis bibendum metus eu urna placerat mattis! Duis bibendum tempor massa at tristique. Integer viverr metus vitae lectus dictum eleifend amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. </p>
                            <p>Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. </p>
                            <a href="#" class="btn-style">View Courses</a>
                        </div>
                        <div class="col-md-6">
                            <img src="images/student-profile1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
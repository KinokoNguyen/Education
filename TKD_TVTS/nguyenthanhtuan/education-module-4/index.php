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
        <div class="education-module-4">
            <div class="container">
                <div class="event-page">
                    <div class="text-detail">
                        <p>This Course will help you learn some interesting information about the WooTeam and the WooThemes ecosystem.Ut imperdiet ipsum vel est congue, a vestibulum orci faucibus. Mauris dictum orci ornare arcu placerat, eu porta quam sollicitudin. Fusce in dapibus turpis. Curabitur imperdiet fermentum tellus.</p>
                        <h2>The Event Program</h2>
                        <ul>
                            <li><a href="#">Quisque ut mattis dolor, a gravida turpis.</a></li>
                            <li><a href="#">At vero eos et accusamus et iusto odio dignissimos</a></li>
                            <li><a href="#">Ducimus qui blanditiis praesentium voluptatum</a></li>
                            <li><a href="#">Deleniti atque corrupti quosed dolores</a></li>
                            <li><a href="#">Quas molestias excepturi sint occaecati</a></li>
                        </ul>
                        <p>Nunc suscipit magna vitae nisi blandit, lacinia pellentesque elit euismod. Quisque ut mattis dolor, a gravida turpis.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quosed dolores et quas molestias excepturi sint occaecati.Nunc suscipit magna vitae nisi blandit, lacinia pellentesque elit euismod. Quisque ut mattis dolor, a gravida turpis.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quosed dolores et quas molestias excepturi sint occaecati.</p>
                        <p>Nunc suscipit magna vitae nisi blandit, lacinia pellentesque elit euismod. Quisque ut mattis dolor, a gravida turpis.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quosed dolores et quas molestias excepturi sint occaecati.Nunc suscipit magna vitae nisi blandit, lacinia pellentesque elit euismod. Quisque ut mattis dolor, a gravida turpis.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quosed dolores et quas molestias excepturi sint occaecati.</p>
                    </div>


                    <div class=" ">
                        <div class="map">
                            <a href="#"><img src="images/Education.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </body>


</html>
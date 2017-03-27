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
        <div class="education_module12">
            <div class="container">
                <!--button-->
                <!--button-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-box">
                            <form>
                                <div class="form-body">
                                    <fieldset>
                                        <legend>Login Below:</legend>
                                        <label>Email Address</label>
                                        <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter Password" class="input-block-level">
                                        <button type="submit" class="btn-style">Submit</button>
                                    </fieldset>
                                </div>
                                <div class="footer">
                                    <ul>
                                        <li><a href="#">I Forgot My Password</a></li>
                                        <li><a href="#">Re-send Confirmation Email</a></li>
                                        <li><a href="#">Sign up Today for Free!</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                    </ul>
                                    <button class="btn-style">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-box">
                            <form>
                                <div class="form-body">
                                    <fieldset>
                                        <legend>First time here? Sign up now!</legend>
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                                <input type="text" placeholder="First Name" class="input-block-level">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" placeholder="Last Name" class="input-block-level">
                                            </div>
                                        </div>
                                        <label>Email Address</label>
                                        <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter Password" class="input-block-level">
                                        <button type="submit" class="btn-style">Sign Up</button>
                                    </fieldset>
                                </div>
                                <div class="footer">
                                    <p>By Registering, You Accept Terms &amp; Conditions</p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--categories-->


                    <!--categories-->
                </div>
            </div>

        </div>
    </body>
</html>
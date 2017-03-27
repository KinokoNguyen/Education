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
        <div class="education_module8">
            <div class="container">
                <!--button-->
                <!--button-->
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-box">
                            <form>
                                <div class="form-body">
                                    <fieldset>
                                        <h2>First time here? Sign up now!</h2>
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                                <input type="text" placeholder="Enter your First Name" class="input-block-level">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" placeholder="Enter your Last Name" class="input-block-level">
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <label>Enter Email</label>
                                                <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Enter Phone number</label>
                                                <input type="text" placeholder="Enter your Phone Number" class="input-block-level">
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <label>Select Your City</label>
                                                <select class="input-block-level">
                                                    <option>HaNoi</option>
                                                    <option>Hawai</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                                <select class="input-block-level">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <label>Education Level</label>
                                                <input type="text" placeholder="Enter your Education Level" class="input-block-level">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Age</label>
                                                <input type="text" placeholder="Enter your age" class="input-block-level">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="footer">
                                    <h2>Your Preferences</h2>
                                    <div class="row-fluid">
                                        <div class="col-md-6">
                                            <label>Select Your Course</label>
                                            <input type="text" placeholder="Enter Your Course" class="input-block-level">
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="col-md-12">
                                            <label>Additional Message</label>
                                            <textarea placeholder="Your Message" class="input-block-level" rows="8"></textarea>
                                        </div>
                                        <p class="pull-left">By registering, You accept Terms &amp; Conditions</p>
                                        <button type="submit" class="btn-style pull-right">Submit</button>
                                    </div>
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
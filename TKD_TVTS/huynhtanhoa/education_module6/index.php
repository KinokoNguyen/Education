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
        <div class="education_module6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="profile-box profile-view">
                            <div class="thumb">
                                <a href="#"><img src="images/profile-img.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <p>Welcome</p>
                                <a href="#" class="btn-style">Marrie James</a>
                            </div>
                        </div>


                        <div class="profile-box edit-profile">
                            <h2>Account Setting</h2>
                            <ul>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Edit Password</a></li>
                                <li><a href="#">View Quiz Scores</a></li>
                                <li><a href="#">Attended Courses</a></li>
                                <li><a href="#">Booked Courses</a></li>
                                <li><a href="#">Confirmed Courses</a></li>
                            </ul>
                            <div class="logout">
                                <a href="#">Log Out</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">

                        <div class="profile-box editing">
                            <h2>Edit Profile</h2>
                            <ul>
                                <li>
                                    <label>First Name</label><br>
                                    <input type="text" class="input-block-level" placeholder="Enter your First Name">
                                </li>
                                <li>
                                    <label>Last Name</label><br>
                                    <input type="text" class="input-block-level" placeholder="Enter your Last Name">
                                </li>
                                <li>
                                    <label>Genter</label><br>
                                    <select class="input-block-level">
                                        <option> Male</option>
                                        <option> Female</option>
                                    </select>
                                </li>
                                <li>
                                    <label>Date of Birth</label><br>
                                    <input type="text" class="input-block-level">
                                </li>
                                <li>
                                    <label>Email</label><br>
                                    <input type="text" class="input-block-level" placeholder="Enter your E-mail ID">
                                </li>
                                <li>
                                    <label>Phone</label><br>
                                    <input type="text" class="input-block-level" placeholder="Enter your Phone Number">
                                </li>
                                <li class="fw">
                                    <label>Address</label><br>
                                    <textarea class="input-block-level"></textarea>
                                </li>
                                <li class="fw">
                                    <button class="btn-style">Update</button>
                                </li>
                            </ul>
                        </div>


                        <div class="profile-box editing">
                            <h2>Edit Password</h2>
                            <ul>
                                <li>
                                    <label>New Password</label><br>
                                    <input type="text" class="input-block-level" placeholder="Enter your New Password">
                                </li>
                                <li>
                                    <label>Confirm Password</label><br>
                                    <input type="text" class="input-block-level" placeholder="Confirm Password">
                                </li>
                                <li>
                                    <label>Old Password</label><br>
                                    <input type="password" class="input-block-level" placeholder="Enter your old Password">
                                </li>
                                <li class="fw">
                                    <button class="btn-style">Update</button>
                                </li>
                            </ul>
                        </div>


                        <div class="profile-box editing">
                            <h2>View quizes scores (only online course)</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Student</td>
                                        <td>Part</td>
                                        <td>Score</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">How To Be A Great Photographer</a></td>
                                        <td>1</td>
                                        <td>5/25</td>
                                    </tr>
                                    <tr>
                                        <td>Instructor: Rebecca Smith</td>
                                        <td>2</td>
                                        <td>2.5/25</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>3</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>4</td>
                                        <td>Pending</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total</td>
                                        <td>&nbsp;</td>
                                        <td>7.5/50</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
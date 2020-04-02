<?php
session_start();
if (isset($_SESSION["username"])) //checks whether admin is already logged then redirect it to index.php 
    header("Location:dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- links bootstrap.css       -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <!-- .container starts -->
    <div class="container">
        <!-- .row starts -->
        <div class="row mt-5">
            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                <form class="needs-validation border-primary p-4" style="border: 7px solid white;" novalidate>
                    <!-- .form-row starts -->
                    <div class="form-row ">
                        <div class="col-md-12">
                            <span style="font-size: 20px;">Login</span>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row mt-3">
                        <div class="col-md-12 mb-3">
                            <label for="username" class="font-weight-bold">Email or Phone Number</label>
                            <input type="text" class="form-control" id="username" placeholder="Email or Phone Number" required>
                            <div class="invalid-tooltip" id="username_tooltip">
                                Enter your Email or Phone Number?
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="pwd" class="font-weight-bold">Password</label>
                                </div>
                                <div class="col-md-6 form-inline" style="justify-content: flex-end;">
                                    <button class="btn" id="btnforgotPassword" type="button">Forgot Password</button>
                                </div>
                            </div>
                            <input type="password" class="form-control" id="pwd" placeholder="Password" required>
                            <div class="invalid-tooltip" id="pwd_tooltip" style="top:0px;left:100px;">
                                Enter your password?
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <button class="btn btn-danger form-control mt-5" type="button" id="login">Login</button>
                    <div class="form-row mt-5">
                        <div class="col-md-4">
                            <hr>
                        </div>
                        <div class="col-md-4 text-center">
                            What new?
                        </div>
                        <div class="col-md-4">
                            <hr>
                        </div>
                    </div>
                    <a class="btn btn-primary form-control mt-5" href="signup.php">Sign Up</a>
                </form>

            </div>
        </div>
        <!-- .row ends -->
    </div>
    <!-- .container ends -->
    <!-- .modal starts-->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signinModalLabel">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="que"><span class="text-muted">Security Question:</span>
                                    <br>Who is your favorite actor, musician, or artist?</label>
                                <input type="text" class="form-control checkNull" id="que">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="fpwd">New Password</label>
                                <input type="password" class="form-control" id="fpwd" placeholder="New Password">
                                <div class="invalid-feedback" id="fpwd_feedback">
                                    Enter the combination of minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="button" id="changePassword">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .modal ends -->
    <!-- .toast starts -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" style="position: absolute; top: 100px; right: 100px;">
        <div class="toast-header">
            <small class="text-muted">just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body" id="txtToast">
        </div>
    </div>
    <!-- .toast ends -->
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script><!-- links jquery-3.4.1.min.js -->
    <script src="js/bootstrap.js" type="text/javascript"></script> <!-- links bootstrap.js        -->
    <script src="js/login-validation.js" type="text/javascript"></script><!-- links login-validation.js -->
</body>

</html>
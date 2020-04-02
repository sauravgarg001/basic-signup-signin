<?php
session_start();
if (isset($_SESSION["username"])) //checks whether admin is already logged then redirect it to index.php 
    header("Location:dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- links bootstrap.css       -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <!-- .container starts -->
    <div class="container">
        <!-- .row starts -->
        <div class="row mt-3">
            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                <form class="needs-validation border-primary p-4" style="border: 7px solid white;" novalidate>
                    <!-- .form-row starts -->
                    <div class="form-row ">
                        <div class="col-md-12">
                            <span style="font-size: 20px;">Sign Up</span>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row mt-3">
                        <div class="col-md-12 mb-3">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" required>
                            <div class="invalid-feedback" id="email_feedback">
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="pno" class="font-weight-bold">Phone Number</label>
                            <input type="text" class="form-control" id="pno" placeholder="Phone Number" required>
                            <div class="invalid-feedback" id="pno_feedback">
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="name" class="font-weight-bold"> Full Name</label>
                            <input type="text" class="form-control isNull" id="name" placeholder="Full Name" required>
                            <div class="invalid-feedback" id="name_feedback">
                                Enter your Full Name?
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="pwd" class="font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password" required>
                            <div class="invalid-feedback" id="pwd_feedback">
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <!-- .form-row starts -->
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="pwd" class="font-weight-bold">
                                <span class="text-muted">Security Question (in case you forgot your password)</span>
                                <br>
                                Who is your favorite actor, musician, or artist?</label>
                            <input type="text" class="form-control isNull" id="ques" required>
                            <div class="invalid-feedback" id="ques_feedback">
                                Enter the name of your favorite actor, musician, or artist?
                            </div>
                        </div>
                    </div>
                    <!-- .form-row ends -->
                    <button class="btn btn-primary form-control mt-3" type="button" id="signup">Sign Up</button>
                    <a class="btn btn-danger form-control mt-3 mb-5" href="login.php">Back to Login Page</a>
                </form>

            </div>
        </div>
        <!-- .row ends -->
    </div>
    <!-- .container ends -->
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
    <script src="js/signup-validation.js" type="text/javascript"></script><!-- links login-validation.js -->
</body>

</html>
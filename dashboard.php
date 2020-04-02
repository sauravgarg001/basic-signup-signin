<?php
session_start();
if (!isset($_SESSION["username"])) //checks whether admin is already logged then redirect it to index.php 
    header("Location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- links bootstrap.css       -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <!-- .container starts -->
    <div class="container">
        <!-- .row starts -->
        <div class="row">
            <div class="col-md-12 text-center text-capitalize text-white" style="font-size:28px;background-color:#F96C0B">
                DASHBOARD
            </div>
        </div>
        <!-- .row ends -->
        <!-- .row starts -->
        <div class="row mb-3">
            <div class="col-md-3" style="background-color:#616161">
                <div class="row text-white text-center">
                    <div class="col-md-12 mt-3">
                        Name: <?php echo $_SESSION["username"]; ?>
                    </div>
                    <div class="col-md-12">
                        Email: <?php echo $_SESSION["name"]; ?>
                    </div>
                    <div class="col-md-12">
                        Phone No: <?php echo $_SESSION["pno"]; ?>
                    </div>
                </div>
                <a class="btn btn-primary form-control mt-4 mb-5" href="signout-process.php" style="background-color:#FF9800">Sign Out</a>
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
</body>

</html>
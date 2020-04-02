$(document).ready(function() {
    function load() { //Empty fields on start
        $("#username").val("");
        $("#pwd").val("");
        $("#username").focus();
    }
    load();
    //-----------------------------------------------
    $("#btnforgotPassword").click(function() {
        if ($("#username").val() === "")
            alert("Enter email or phone number?");
        else {
            $("#forgotPasswordModal").modal("show");
            $("#que").focus();
        }
    });
    //-----------------------------------------------
    $("#login").click(function() {
        //check for valid text if not show alert
        if ($("#username").hasClass("is-invalid") ||
            $("#pwd").hasClass("is-invalid")
        )
            alert("Enter Required Values");
        else {
            var username = $("#username").val();
            var pwd = $("#pwd").val();
            var ajaxCall = "login-process.php?username=" + username + "&pwd=" + pwd;
            //verify credentials from server
            $.get(ajaxCall, function(response) {
                response = response.trim();
                if (response.trim().startsWith("valid")) {
                    window.location.href = "dashboard.php";
                } else {
                    $("#txtToast").html(response);
                    $('.toast').toast('show'); //show response on toast
                }
            });
        }
    });
    //--------------------------------------------------
    $('#fpwd').on('keyup keypress focus', function(e) {
        var patt = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (patt.test($(this).val())) {
            $("#fpwd_feedback").css("display", "none");
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $("#fpwd_feedback").css("display", "block").html("Enter password with atleast: <br>1 capital letter <br>1 special character<br>1 digit <br>1 small letter <br>Total of 8 characters.");
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });
    //--------------------------------------------------
    $("#fpwd").focusout(function() {
        $("#fpwd_feedback").css("display", "none");
    });
    //-------------------------------------------------
    //check for valid text if not show alert
    $("#changePassword").click(function() {
        if ($("#username").hasClass("is-invalid") ||
            $("#que").hasClass("is-invalid") ||
            !$("#fpwd").hasClass("is-valid") ||
            $("#que").val() === ""
        )
            alert("Enter Required Values");
        else {
            var username = $("#username").val();
            var fpwd = $("#fpwd").val();
            var que = $("#que").val();
            var ajaxCall = "login-changepassword-process.php?username=" + username + "&pwd=" + fpwd + "&que=" + que;
            //verify credentials from server
            $.get(ajaxCall, function(response) {
                response = response.trim();
                if (response.trim().startsWith("valid")) {
                    window.location.href = "dashboard.php";
                } else {
                    $("#txtToast").html(response);
                    $('.toast').toast('show'); //show response on toast
                    $("#forgotPasswordModal").modal("hide");
                }
            });
        }
    });
    //-------------------------------------------------
    $(".checkNull").blur(function() { //check for null values inside fields
        var txt = $(this).val();
        if (txt === "")
            $(this).addClass("is-invalid");
        else
            $(this).removeClass("is-invalid");
    });
});
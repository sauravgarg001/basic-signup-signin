$(document).ready(function() {
    function load() { //Empty fields on start
        $("#email").val("");
        $("#pwd").val("");
        $("#pno").val("");
        $("#name").val("");
        $("#ques").val("");
        $("#email").focus();
    }
    load();
    $("#email").focusout(function() {
        $("#email_feedback").css("display", "none");
    });
    //--------------------------------------------------
    $("#email").on('keyup keypress focus', function() {
        var patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if ($(this).val() === "") {
            $("#email_feedback").css("display", "block").html("Enter your Email?");
            $(this).removeClass("is-valid").addClass("is-invalid");
        } else if (!patt.test($(this).val())) {
            $("#email_feedback").css("display", "block").html("Invalid Email!");
            $(this).removeClass("is-valid").addClass("is-invalid");
        } else {
            $.get("index-email-process.php?email=" + $(this).val(), function(response) {
                if (response === "exists") {
                    $("#email_feedback").css("display", "block").html("Already signed up with this email");
                    $("#email").removeClass("is-valid").addClass("is-invalid");
                } else {
                    $("#email").removeClass("is-invalid").addClass("is-valid");
                    $("#email_feedback").css("display", "none");
                }
            });
        }
    });
    //--------------------------------------------------
    $("#pno").focusout(function() {
        $("#pno_feedback").css("display", "none");
    });
    //--------------------------------------------------
    $("#pno").on('keyup keypress focus', function() {
        var patt = /^[6-9]\d{9}$/;
        if ($(this).val() === "") {
            $("#pno_feedback").css("display", "block").html("Enter your Phone Number?");
            $(this).removeClass("is-valid").addClass("is-invalid");
        } else if (!patt.test($(this).val())) {
            $("#pno_feedback").css("display", "block").html("Invalid Phone Number must of 11 digits begining with 0!");
            $(this).removeClass("is-valid").addClass("is-invalid");
        } else {
            $.get("index-pno-process.php?pno=" + $(this).val(), function(response) {
                if (response === "exists") {
                    $("#pno_feedback").css("display", "block").html("Already signed up with this phone number");
                    $("#pno").removeClass("is-valid").addClass("is-invalid");
                } else {
                    $("#pno").removeClass("is-invalid").addClass("is-valid");
                    $("#pno_feedback").css("display", "none");
                }
            });
        }
    });
    //--------------------------------------------------
    $('#pwd').on('keyup keypress focus', function(e) {
        var patt = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (patt.test($(this).val())) {
            $("#pwd_feedback").css("display", "none");
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $("#pwd_feedback").css("display", "block").html("Enter password with atleast: <br>1 capital letter <br>1 special character<br>1 digit <br>1 small letter <br>Total of 8 characters.");
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });
    //--------------------------------------------------
    $("#pwd").focusout(function() {
        $("#pwd_feedback").css("display", "none");
    });
    //--------------------------------------------------
    $(".isNull").on('keyup keypress focus', function() {
        if ($(this).val() === "") {
            $(this).removeClass("is-valid").addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    //---------------------------------------------------
    $("#signup").click(function() {
        if ($("#email").hasClass("is-valid") &&
            $("#pwd").hasClass("is-valid") &&
            $("#pno").hasClass("is-valid") &&
            $("#name").hasClass("is-valid") &&
            $("#ques").hasClass("is-valid")) {
            var email = $("#email").val();
            var pwd = $("#pwd").val();
            var pno = $("#pno").val();
            var name = $("#name").val();
            var ques = $("#ques").val();
            var res = confirm("Are you sure?");
            if (res === true) {
                $.get("signup-process.php?email=" + email + "&pno=" + pno + "&name=" + name + "&pwd=" + pwd + "&ques=" + ques, function(response) {
                    $("#txtToast").html(response);
                    $('.toast').toast('show');

                    setTimeout(function() {
                        if (response.trim().startsWith("Account Created Succesfully"))
                            window.location.href = "login.php";
                    }, 2000);

                });
            }
        } else
            alert("Enter required fields");
    });
});
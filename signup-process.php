<?php
    include_once("do-connect.php");//to establish connection to database

    $email = $_GET["email"];
    $pno = $_GET["pno"];
    $name = $_GET["name"];
    $pwd = md5($_GET["pwd"]);//encrypt password
    $ques = $_GET["ques"];

	$query = "insert into accounts values('$email','$pno','$name','$pwd','$ques');";//insert one account to accounts table

    mysqli_multi_query($dbRef,$query);//execute query

	$msg = mysqli_error($dbRef);//to check if any error message
	if($msg=="")
			echo "Account Created Succesfully";
	else
			echo "Error Occured Try Again!";
?>

<?php
    $username = $_GET["username"];
    $que = $_GET["que"];
    $pwd = md5($_GET["pwd"]);//encrypt password

    include_once("do-connect.php");//to establish connection to database
    $query="update accounts set pwd = '$pwd' where (email = '$username' or pno = '$username') and ques = '$que';";//update the current password to new one.
    mysqli_query($dbRef, $query);//execute query

    if(mysqli_affected_rows($dbRef)==1){//if one row afftected means password changed
        echo "Password Changed";  
    }
    else{
       echo "Error Occured Try Again!";
    }
?>

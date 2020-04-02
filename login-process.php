<?php
    session_start();
    include_once("do-connect.php");//to establish connection to database
    $username = $_GET["username"];
    $pwd = md5($_GET["pwd"]);

    $query="select * from accounts where (email = '$username' or pno = '$username') and pwd = '$pwd';";//get account corresponding to email or pno and pwd
    $table=mysqli_query($dbRef,$query);//execute query and store results
    if(!$table || mysqli_num_rows($table)==0){
          echo "Invalid Password or Username!";
        }
    else{
        $row = mysqli_fetch_array($table);//convert the object into array
        $_SESSION["username"] = $row["email"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["pno"] = $row["pno"];
        echo "valid";
    }
?>

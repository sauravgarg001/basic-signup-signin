<?php
    include_once("do-connect.php");//to establish connection to database
    $pno = $_GET["pno"];
    $query="select * from accounts where pno = '$pno';";//check if there is any existing pno 
    $table=mysqli_query($dbRef,$query);//execute query ans store results
    if(mysqli_num_rows($table)>=1){
        echo "exists";
    }
?>
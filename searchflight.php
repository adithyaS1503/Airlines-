<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "emiform_db";
    $conn = new mysqli($servername,$username, $password,$dbname);
    if($conn->connect_errno ) {
        printf("Connect failed: %s<br />", $conn->connect_error);
        exit();
     }
     printf('Connected successfully.<br />');

     $from=$_POST["fromloc"];
     $to=$_POST["toloc"];
    
    $search = "SELECT * FROM flight WHERE fromloc='$from' AND toloc='$to' " ;
    $result=$conn->query($search);

if ($result->num_rows > 0) {
    echo"There are  ".$result->num_rows." suitable flights avialable.";
    while($row = $result->fetch_assoc()) {
        printf("<br /><br />Id: %s, To: %s, From: %s", 
           $row["flightid"], 
           $row["toloc"], 
           $row["fromloc"]);              
     }
  } else {
     printf('No flight record found.<br />');
  }
  $conn->close();
  
?>
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

     $loc=$_POST["loc"];
     $rooms=$_POST["room"];
    
    // $search = "SELECT * FROM hotel WHERE loc='$loc' OR rooms_avl='$rooms' " ;
    $search = "SELECT * FROM hotel WHERE loc='$loc' OR rooms_avl = '$rooms' " ;
    $result=$conn->query($search);

if ($result->num_rows >= 0) {
    echo"There are  these ".$result->num_rows." many hotels avialable.";
    while($row = $result->fetch_assoc()) {
        printf("<br /><br />Id: %s, Location: %s, Rooms: %s", 
           $row["hotel_id"], 
           $row["loc"], 
           $row["rooms_avl"]);              
     }
  } else {
     printf('No hotel or room found.<br />');
  }
  $conn->close();
  
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EmiForm_DB";
    
    // $conn = new mysqli($servername,$username, $password);

    // $conn->close();

    $conn1 = new mysqli($servername, $username, $password, $dbname);

    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    } 

    //Must create and delete table all the time
    //creating table
    /*
    $table = "CREATE TABLE hotel (
    hotel_id varchar(100) NOT NULL PRIMARY KEY, 
    loc varchar(100) NOT NULL, ht_name varchar(100) NOT NULL
    ,rooms_avl varchar(100) DEFAULT 0)";
    if ($conn1->query($table) === TRUE) 
    {
        echo "<br>";
        echo "Table details created successfully";
    } 
    else 
    {
        echo "Error creating table: " . $conn1->error;
    }
    */
    
    //Inserting
    $insert = "INSERT INTO hotel (hotel_id, loc, ht_name, rooms_avl)
    VALUES ('ca43', 'California', 'Hotel California','100')";
    if ($conn1->query($insert) === TRUE) 
    {
        echo "<br>";
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $insert . "<br>" . $conn1->error;
    }

    /*
    $dest_from = $_POST['dest_from'];
    $dest_to = $_POST['dest_to'];
    $dept_date = $_POST['dept_date'];
    $pass = $_POST['passengers'];
    $child = $_POST['childPass'];
    $cpass = $_POST['childquant'];
    $class = $_POST['class'];
   
    $insert = "INSERT INTO emirates (dest_from, dest_to, dept_date, pass_num, child_pass, cpass_num, class)
    VALUES ('$dest_from', '$dest_to', '$dept_date','$pass', '$child', '$cpass', '$class')";
    */
/*
if ($conn1->query($insert) === TRUE) 
{
    echo "<br>";
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $insert . "<br>" . $conn1->error;
}
*/
  $conn1->close();
?>
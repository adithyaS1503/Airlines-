<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EmiForm_DB";
    
    $conn = new mysqli($servername,$username, $password);
    
    /*
    Stuff to fix and implement:
        radio button(seat selection..?)
    */

    //COOKIES
    //setcookie("dest_from","BLR", 60, "/") //this cookie will expire in one minute or 60 seconds
    /*
    if(isset($_POST['submit']))
    {
        if(isset($_POST['cookies']))
        {
            setcookie("dest_from",$_POST['dest_from'], time() +3600);
            setcookie("dest_from",$_POST['dest_to'], time() +3600);
        }
    }
    */

    if ($conn->connect_error) 
    {
        die("Connection failure: " . $conn->connect_error);
    }
    
    /*
    $sql = "CREATE DATABASE EmiForm_DB";
    if ($conn->query($sql) === TRUE) {
        echo "Database with name EmiForm_DB";
    } else {
        echo "Error: " . $conn->error;
    }
    */

    $conn->close();

    $conn1 = new mysqli($servername, $username, $password, $dbname);

    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    } 

    //Must create and delete table all the time
    //creating table
    /*
    $table = "CREATE TABLE emirates (
    dest_from varchar(100) NOT NULL PRIMARY KEY, 
    dest_to varchar(100) NOT NULL, pass_num varchar(100) NOT NULL
    ,child_pass varchar(100) DEFAULT 0, cpass_num varchar(100) DEFAULT 0, class varchar(100) NOT NULL)";
    */

    /*
    //creating table with date
    $table = "CREATE TABLE emirates (
        dest_from varchar(100) NOT NULL PRIMARY KEY, 
        dest_to varchar(100) NOT NULL, dept_date varchar(100) NOT NULL, pass_num varchar(100) NOT NULL
        ,child_pass varchar(100) DEFAULT 0, cpass_num varchar(100) DEFAULT 0, class varchar(100) NOT NULL)";
    
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
    /*
    if('childPass' = 0 || 'childPass' = NULL)
    {
        $cpass = 0;
        $cpass = $_POST['childPass'];
    }
    */
    $dest_from = $_POST['dest_from'];
    $dest_to = $_POST['dest_to'];
    $dept_date = $_POST['dept_date'];
    $pass = $_POST['passengers'];
    $child = $_POST['childPass'];
    $cpass = $_POST['childquant'];
    $class = $_POST['class'];
    /* Insertion with date as varchar*/
    $insert = "INSERT INTO emirates (dest_from, dest_to, dept_date, pass_num, child_pass, cpass_num, class)
    VALUES ('$dest_from', '$dest_to', '$dept_date','$pass', '$child', '$cpass', '$class')";

if ($conn1->query($insert) === TRUE) 
{
    echo "<br>";
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $insert . "<br>" . $conn1->error;
}

  $conn1->close();
?>
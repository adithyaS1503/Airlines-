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
    $table = "CREATE TABLE feedback (
    cust_name varchar(100) NOT NULL, 
    email varchar(100) NOT NULL PRIMARY KEY, feedback varchar(100) NOT NULL)";

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
    $insert = "INSERT INTO feedback (cust_name, email, feedback)
    VALUES ('Adithya', 'r1976@gmail.com', 'Emirates YES')";
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
    
    //No more array index problems?
    
    if(isset($_POST['cust_name'])){

        $cust_name = $_POST['cust_name'];
    
    }else{
    
        $cust_name = "Error";
    
    }

    if(isset($_POST['email'])){

        $email = $_POST['email'];
    
    }else{
    
        $email = "Error";
    
    }

    if(isset($_POST['textarea'])){

        $text = $_POST['textarea'];
    
    }else{
    
        $text = "Error";
    
    }
    $insert = "INSERT INTO feedback (cust_name, email, feedback)
    VALUES ('$cust_name', '$email', '$text')";
    if ($conn1->query($insert) === TRUE) 
    {
        echo "<br>";
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $insert . "<br>" . $conn1->error;
    }
    
    // $cust_name = $_GET["cust_name"];
    // $email = $_GET["email"];
    // $text = $_GET["textarea"];
    
    // ANother isset
    /*
    $cust_name=(isset($_POST['cust_name']) == TRUE) ? $_POST['cust_name'] : '';
    $email=(isset($_POST['email']) == TRUE) ? $_POST['email'] : '';
    $text=(isset($_POST['textarea']) == TRUE) ? $_POST['textarea'] : '';
    $insert = "INSERT INTO feedback (cust_name, email, feedback)
        VALUES ('$cust_name', '$email', '$text')";
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

    /*
    global $cust_name;
    global $email;
    global $text;

    if(isset($cust_name) || isset($email) || isset($text))
    {
        $cust_name = $_POST['cust_name'];
        $email = $_POST['email'];
        $text = $_POST['textarea'];
        
    }
    
    $insert = "INSERT INTO feedback (cust_name, email, feedback)
        VALUES ('$cust_name', '$email', '$text')";
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

    /*
    $cust_name = $_GET['cust_name'];
    $email = $_GET['email'];
    $text = $_GET['textarea'];
    
    $insert = "INSERT INTO feedback (cust_name, email, feedback)
    VALUES ('$cust_name', '$email', '$text')";
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
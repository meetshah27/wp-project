<?php
   $username = "root";
   $password = "";
   $servername = "localhost";

   $name=$_POST['name'];
   $password=$_POST['pwd'];
   $phone=$_POST['phno'];
   $email=$_POST['email'];
   //DATABASE CONNECTION 
   $conn = new mysqli("localhost", "root", "", "test");
   if($conn->connect_error)
    {
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
    }
    else
    {
     $q="insert into login(name,pwd,phno,email) values('$name','$password',$phone,'$email')";
   // echo"***".$q;
    if ($conn->query($q) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $q . "<br>" . $conn->error;
      }
    }

?>
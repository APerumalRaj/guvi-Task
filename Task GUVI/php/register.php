<?php 
 
 $User = $_POST['User_name'];
 $Email = $_POST['User_email'];
 $UserPassword = $_POST['User_password'];



 $UserName = "root";
 $Password = "";
 $dbname = "Register";
 $Servername = "localhost";


 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("failed". $conn->connect_error);
 }
 
 $sql = "INSERT INTO RegisterDetails
VALUES ('$User', '$Email', '$UserPassword')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "helooo"


?>
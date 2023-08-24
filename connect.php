<?php
$con = mysqli_connect('localhost', 'root', 'your_password', 'userinfodata');

if($con){
    echo "Connection successful";
} else {
    echo "No connection";
}

$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$query = "INSERT INTO userinfodata (Name, Phone, Email, Message) 
          VALUES ('$Name', '$Phone', '$Email', '$Message')";


if(mysqli_query($con, $query)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

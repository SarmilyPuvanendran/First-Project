<?php
$username = filter_input(INPUT_POST, 'username');
$age = filter_input(INPUT_POST, 'age');
if (!empty($username)){
if (!empty($age)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "kids";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO student (username, age)
values ('$username','$age')";
if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
echo '<script> window.location.href="index.html"; </script>';
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "age should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
<?php
 $username = $_POST['username'];
 $age = $_POST['age'];

 //Database connection here
 $con = new mysqli('localhost' , 'root', 'kids');
 if($conn->connect_error){
    die('Connection Failed : ' -$conn->connect_error);

}else{
    $stmt = $conn->prepare("select * from login where age = username");
    $stmt->bind_param("s",$age);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   
}
?>
<?php
 $sqlusername="SELECT username FROM student ORDER BY username DESC";
 $result=mysqli_query($con,$sqlusername) or die("Error in sqlusername :".mysqli_error($con));
 if(mysqli_num_rows($result)==0)
 {
     $username="";
 }
 else
 {
     $row=mysqli_fetch_assoc($result);
     $username=++$row['username'];
 }
?>

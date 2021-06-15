<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
<div style="overflow-x:auto;">
<?php 
$connection=mysqli_connect("localhost","root","","student");

$q=mysqli_query($connection,
    "select * from student_info")
    or die('error'.mysqli_error($connection));
  
//   $row = mysqli_fetch_array($q);
    
   echo"<table border='1'>";
   echo "<tr>";
   echo "<th>First_Name</th>";
   echo "<th>Last_Name</th>";
   echo "<th>Gender</th>";
   echo "<th>Email</th>";
   echo "<th>Code</th>";
   echo "<th>Phone No</th>";
   echo "<th>Address</th>";
   echo "<th>Password</th>";
   echo "<th>Bloodgroup</th>";
   echo "<th>BirthDate</th>";
   echo "</tr>";

   $i=0;
   while($row=mysqli_fetch_array($q)){
       $i++;
     echo "<tr>";
     echo "<td>{$row['fname']}</td>";
     echo "<td>{$row['lname']}</td>";
     echo "<td>{$row['gender']}</td>";
     echo "<td>{$row['email']}</td>";
     echo "<td>{$row['code']}</td>";
     echo "<td>{$row['phone']}</td>";
     echo "<td>{$row['address']}</td>";
     echo "<td>{$row['psw']}</td>";
     echo "<td>{$row['bloodgroup']}</td>";
     echo "<td>{$row['dob']}</td>";
     echo "</tr>";
   }
  echo"</table>";
?>
</div>
<br/>
<br/>
<a href="index.php">Add Information</a>
</body>
</html>

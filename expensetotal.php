<?php
//This script will handle login


// check if the user is already logged in

require_once "config.php";
$ww=$_SESSION['id'];
$sql = "SELECT  SUM(amount) from expense where user_id=$ww";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result))
{
    $expense= $row['SUM(amount)'];
    
    echo "<br>";
} 
  ?>
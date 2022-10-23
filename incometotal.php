
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<?php
//This script will handle login


// check if the user is already logged in

require_once "config.php";
$ss=$_SESSION['id'];
$sql = "SELECT  SUM(amount) from income1 where user_id=$ss";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
  $income=$row['SUM(amount)'];
    
  echo "<br>";
} 
  ?>

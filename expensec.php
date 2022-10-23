<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','login');

// get the post records
$date = $_POST['date'];
$amount = $_POST['amount'];
$category = $_POST['category'];
$userid = $_POST['userid'];


// database insert SQL code
//$sql = "INSERT INTO `INSERT INTO `expense`(`amount`,`user_id`) VALUES ($amount,$userid)";
$sql="INSERT INTO `expense`(`date`, `amount`, `category`, `user_id`) VALUES ('$date',$amount,'$category',$userid)";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}



?>
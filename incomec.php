<?php
// database connection code
 //$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','login');

 //get the post records
$date = $_POST['date'];
$amount = $_POST['amount'];
$dis = $_POST['dis'];
$userid = $_POST['userid'];


// database insert SQL code
//$sql = "INSERT INTO `income1`(`amount`, `user_id`) VALUES ($amount,$userid)";
$sql="INSERT INTO `income1`(`date`, `amount`, `discription`, `user_id`) VALUES ('$date',$amount,'$dis',$userid)";
// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
	
}



?>

<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>income Page</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

  <style>
    * {
     
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration:none;
      list-style:none;
      fonr-family: 'Poppins' , sans-serif;
    }

    .column1,.column2 {
      float: left;
      width: 20%;
      padding: 0.5px;
      height: 300px;

    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      display: inline-block;
    }

    table,
    th,
    td {
      border: 1px solid black;

    }

    th,
    td {
      padding: 15px;

    }

    
    .button {
      padding: 8px 8px;
      font-size:20px;
      text-align: left;
      padding-left: 3px;
      display: inline-block;
      cursor: pointer;
      background-color:transparent;
    }
    body{
      position:relative;
      min-height: 100vh;
      background: white;
      background-size:cover;
      background-position: center;
    }
    .bg-image {
      width:204vh;
      height:100vh;
      background-size:cover;
      background-repeat:no-repeat;
      background-color: rgb(0,0,0,0.3);
      background-blend-mode: overlay;
    
}
p{
  color: white;
  font-size:32px;
}
.heading{
  font-style:Britannic Bold;
}
.side-bar{
  background: black;
  background-color: rgb(0,0,0,0.9);
    background-blend-mode: overlay;
  background-filter: blur(15px);
  width: 250px;
  height: 100vh;
  position: fixed;
  top:0;
  left:0;
  overflow-y: auto;
 
 }

.side-bar .menu{
   width: 100%;
   margin-top: 20px; 
}
.side-bar .menu .item {
  position: relative;
  cursor:pointer;
}
.side-bar .menu .item a{
  color: #fff;
  font-size: 20px;
  text-decoration: none;
  display: block;
  padding: 5px 10px;
  line-height:60px;
}
.side-bar .menu .item a:hover{
  background: #008B8B;
  transition: 0.3s ease;
}
li{
  font-size: 40px;
  margin-left: 3px;
  list-style-type:circle;
  list-style-position:inside;
  color:white;
}
.container{
  width:calc(100% - 250px);
  margin-left: 500px;
  margin-top: 100px;
 text-align:center;
  

}
label{
  font-size:25px;
}
input, select{
  font-size:20px;
}
.form {
    position: relative;
    width: 100%;
    max-width: 600px;
    padding: 80px 40px 40px;
    background: rgba(0,0,0,0.8);
    border-radius: 10px;
    color: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.8);
}
.transaction{
  display:inline-block;
    font-size:14px;
    line-height: 120%;
    color:#FFF;
    background-color:transparent;
    border:1px solid #FFF;
    padding: 10px 12px;
    border-radius:4px;
    text-decoration:none;
    cursor:pointer;
    transition:background-color ease 400ms;
    font-size:18px;
    
}
.transaction:hover{
  color:#FFF;
background-color: rbga(255,255,255,0.4);
transition-duration: 0.4s;
}
button{
  
  display:inline-block;
    font-size:14px;
    line-height: 120%;
    color:#FFF;
    background-color:transparent;
    border:1px solid #FFF;
    padding: 10px 12px;
    border-radius:4px;
    text-decoration:none;
    cursor:pointer;
    transition:background-color ease 400ms;
    font-size:18px;
}
button:hover{
color:;
background-color: rbga(255,255,255,0.4);
transition-duration: 0.4s;
} 
input[type=date] , input[type=amount]{
    margin: 5px 0px;
    border-radius:4px;
    outline:none;
    padding: 0px;
    box-sizing: border-box;
    transition:0.3s;
}
input[type=date] , input[type=amount]:focus{
  border-color:black;
  box-shadow:0 0 8px 0 white;
}

body {
    background: url('mini_&.jpeg') no-repeat center;
    background-size: cover;
    font-family: Californian FB;
    width:100%;
    font-size:20px;
    background-color: rgb(0,0,0,0.5);
    background-blend-mode: overlay;
    
}
.side-bar .menu .item .p a ul .fas{
  width:35px;
} 


</style>
  </head>

  <body>
  
      <div class="side-bar">
      <div class="menu">
      <div class="item">
  <div class="heading"><p style="font-family:Castellar">ADD INCOME</p></div>

        <ul >
          <a href="homepage.php"><i class="fas fa-home"></i>    Home</a>
          <a href="viewacc.php"><i class="far fa-user"></i>    View Account</a>
        
          <a href="income.php"><i class="fas fa-wallet"></i>    Add Income</a>
          <a href="expense_page.php"><i class="fas fa-money-check"></i>   Add Expense</a>
          </ul>
          </div>
      </div>
    </div>
    <div class="container">
   <!-- <form action="incomec.php" class="form">
    <form>-->
                <form action="income.php" method="post" class="form">
                  <label for="date">Date:</label>
                  <input type="date" id="date" name="date">
                  <br>
                  <br>
                  <label for="amount">Amount :</label>
                  <input type="amount" id="amount" name="amount"><br><br>
                  <label for="dis">Description:</label>
                  <input type="text" id="dis" name="dis">
                  <br>
                  <label for="userid"></label>
                  <input type="hidden" id="userid" name="userid" value="<?php echo $_SESSION['id']?>">
                  <br>
                  <div class="content">
                    
                    <button id="button" > Add Income</button>
                   </div><br>
                   
                   <div class="transaction"><a href="transaction.php">View income details</a></div>
                  
                  
                
                 </div>
                </form>
                </form>
    </div>
    </div><center>
    
    <?php
// database connection code
 //$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','login');
if(isset($_POST['date'],$_POST['amount'],$_POST['dis'],$_POST['userid']))
{
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

	echo "Records Inserted";
	
}

}




?>

  </body>

</html>

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
  <title>Display all records from Database</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<style>
   * {
     
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     text-decoration:none;
     list-style:none;
     fonr-family: 'Poppins' , sans-serif;
   }
  
   table{
 
 margin: 25px 500px;
 border-collapse: collapse;
 display: inline-block;
 min-width: 400px;
 border: 1px solid black;
 
}
td , th{
  border:1px solid black;
}
th{
  background-color: #9CE0E5;
  font-size:22px;
  padding: 0.7rem 2rem;
  color:black;
}

td {
      text-transform:uppercase;
      letter-spacing:0.1rem;
      font-size:15px;
      padding: 0.3rem 4rem;
      background-color:white;
      color:black;
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
h2{
  margin-left: 500px;
 margin-top: 50px;
 color:white;
}
.container{
  margin-left: 500px;
 margin-top: 20px;
 
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
color:#FFF;
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

}

body {
   background: url('mini_&.jpeg') no-repeat center;
   background-size: cover;
   font-family: Californian FB;
   width:100%;
   font-size:20px;
   background-color: rgb(0,0,0,0.4);
   background-blend-mode: overlay;
}
.side-bar .menu .item .p a ul .fas{
 width:35px;
} 
.date{
  top:0px;
  left:0px;
}

    </style>

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
    <h2>Expense Details</h2>
 
</div>

<table>
<thread>
  <tr>
  
    <th>Date</th>
    <th>Amount</th>
   
    <th>Description</th>
  </tr>
  </thread>
  

<?php

require_once "dbconn.php";// Using database connection file here
$exid=$_SESSION['id'];
$records = mysqli_query($db,"select * from expense where user_id=$exid"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<tbody>
  <tr>
    
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['amount']; ?></td>
   
    <td><?php echo $data['category']; ?></td>
  </tr>	
</tbody>
<?php
}
?>
</table><center>
<button onclick="window.print()">Print this page</button>
<?php mysqli_close($db); // Close connection ?>
</div>
</body>
</html>
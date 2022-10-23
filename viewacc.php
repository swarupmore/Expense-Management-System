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
  <title>View Account</title>
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
  top:0px;
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
  box-shadow:0 0 8px 0 white;
}

body {
    background: url('mini_&.jpeg') no-repeat center;
    background-size: cover;
    font-family: Californian FB;
    width:100%;
    font-size:20px;
  
}
.side-bar .menu .item .p a ul .fas{
  width:35px;
} 
.w3-container{
	margin-left:270px;
	
}
p{
	font-size:20px;
	padding:5px;
    color:black;
	margin-top:10px;
}
h2{
	color: white;
}
.navbar{
	font-size: 30px;
}

</style>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Home page</title>
  </head>

  <body>
  
      <div class="side-bar">
      <div class="menu">
      <div class="item">
  <div class="heading"><h2 style="font-family:Castellar, font-color:white ">VIEW ACCOUNT</h2></div><br>

        <ul >
          <a href="homepage.php"><i class="fas fa-home"></i>    Home</a>
          <a href="viewacc.php"><i class="far fa-user"></i>    View Account</a>
        
          <a href="income.php"><i class="fas fa-wallet"></i>    Add Income</a>
          <a href="expense_page.php"><i class="fas fa-money-check"></i>   Add Expense</a>
          </ul>
          </div>
      </div>
    </div>
    
          </div>
        </div>

		
        <div class="w3-container">
		<p></p>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"><?php echo $_SESSION['username']?></i></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "User Id is ". $_SESSION['id']?></p>
       
          <hr>

     </div>
	 </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 
  </body>

</html>
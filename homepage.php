<!doctype html>
<html lang="en">
  <head><style>
    *{
      box-sizing: border-box;
    }
     .column {
      float: left;
      width: 20%;
      padding: 10px;
      height: 300px;
    
    }
    
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
       
         h1 , h2, h3 {
           box sizing : border-box;
      border: 1px solid red ;
      width : 50%;
      float:left;
      
    }

    .header{
     
      font-size:20px;
     
    }
    h3{
      width: 500px; height: 550px;
      margin: 50px auto;
      border: 1px solid white;
      position: relative;
      top: 30px;
      left: 180px;
      display: flex;
      align-items:center;
      justify-content: center;
      font-size: 10px;
      color: white;
      font-family:Californian FB;
      box-shadow:0 3px 9px 3px  #CDCCC7;
    }
    h2{
      width: 500px; height: 260px;
      margin: 50px auto;
      border: 1px  solid white;
      position: relative;
      left: 190px;
      top: 30px;
      display: flex;
      align-items:center;
      justify-content: center;
      color: white;
      font-family:Californian FB;
      box-shadow:0 3px 9px 3px  #CDCCC7;
    }
    h2{
      width: 600px; height: 270px;
      margin: 50px auto;
      border: 1px solid white;
      position: relative;
      top: 30px;
      left: 200px;
      display: flex;
      align-items:center;
      justify-content: center;
      color: white;
      font-family:Californian FB;
      box-shadow:0 3px 9px 3px #CDCCC7;
    }
    body{
      min-height: 100vh;
    }
    
    .bg-image {
      width:100%;
      height:100vh;
      background: url('mini_&.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: rgb(0,0,0,0.3);
    background-blend-mode: overlay;
    
}
p{
  white-space: pre-line;
  text-align: center;
}
.transparent_btn{
  
    display:inline-block;
    font-size:14px;
    line-height: 120%;
    color:black;
    background-color:#CDCCC7;
    border:1px solid #FFF;
    padding: 10px 12px;
    border-radius:4px;
    text-decoration:none;
    cursor:pointer;
    transition:background-color ease 400ms;
    font-size:18px;
  
  
}
.transparent_btn:hover{
  color:#FFF;
  background-color:rgba(255,255,255,0.3);
  transition-duration: 0.4s;
} 
.button{
  background-color:transparent;
  display:inline-block;
  margin: 15px 12px;
}
.btn{
  border-radius: 25px;
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
    <div class="bg-image">
      <div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="welcome.php">Expense Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <?php
require_once "balance.php";

if($balance<0)
{
  echo "Balance Cannot be Negative ";
}
else{
echo "Available Balance Rupees : ".$balance;
}


    ?>
    
  </div>
</nav>
</div>

<div class="box">
<h3><p style="font-size: 40px"><b>MY ACCOUNT </b>

  <a href="viewacc.php" class="transparent_btn">View Account</a> </h3></p>
<h2><p style="font-size: 40px"><b>MY INCOME </b>

<a href="income.php" class="transparent_btn">Income Details</a> 
</h2></p>
<h2><p style="font-size: 40px"><b>MY EXPENSES</b>

<a href="expense_page.php" class="transparent_btn">Expense Details</a>
</h2></p>
</div>

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
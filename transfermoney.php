<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Transfer</title>
  </head>

<body>

  <!-- Navbar content -->
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/img5.png" width="45" height="35" class="d-inline-block align-top" alt="">
    <a class="font-weight-bold" href="#" >Sparks Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/Project 8 Bank">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<?php
    // if(isset($_POST['Transfer Money'])){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $amount = (isset($_POST['amount']) ? $_POST['amount'] : '');

        // $amount = $_POST['amount'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "transfer";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_conn_error());
      }
      else{ 
         
            $sql = "INSERT INTO `transferdata` (`sender`, `receiver`, `amount`, `dt`) VALUES ('$sender', '$receiver', '$amount', current_timestamp())";
            $result = mysqli_query($conn, $sql);
 
            if($result){
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>';
            }
            else{
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>

            </div>';
            }

          }

        }

    
?>

<div class="container mt-3">
<h1>Transfer Money</h1>
    <form action="/Project 8 Bank/transfermoney.php" method="post">
    <div class="form-group">
        <label for="sender">Sender</label>
        <input type="text" name="sender" class="form-control" id="sender" aria-describedby="sender">
    </div>

    <div class="form-group">
        <label for="receiver">Receiver</label>
        <input type="text" name="receiver" class="form-control" id="receiver" aria-describedby="receiver"> 
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" name="Amount" class="form-control" id="amount" placeholder="Amount">

        <!-- <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>  -->
    </div>
    
    <button type="transfer" class="btn btn-primary">Transfer</button>
    </form>
</div>
<style>
    
  .font-weight-bold{
        font-size:1.5rem;

  }
  </style>
   <style>
    
    .font-weight-bold{
          font-size:1.5rem;
  
    }
  
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
      margin-bottom: .5rem;
      font-family: auto;
      font-weight: bold;
      line-height: 1.2;
      color: darkblue;
     }
  
     .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 20px;
      font-weight: bold;
  
      left: 15%;
      z-index: auto;
      padding-top: 20px;
      padding-bottom: 20px;
      color: darkred;
      text-align: center;
  }
  
  
  
  
  
  
    </style>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


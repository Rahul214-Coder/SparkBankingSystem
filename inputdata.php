<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Bank</title>
</head>

<body>

  <!-- Navbar content -->
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Sparks Foundation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/Project 8 Bank/transfer.php">Home <span class="sr-only">(current)</span></a>
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

if(isset($_POST['Transfer Money'])){
    $transferid = $_POST['transferid'];
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    



         // Connecting to the Database
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "transfer";

         // Create a connection
         $conn = mysqli_connect($servername, $username, $password, $database);
         // Die if connection was not successful
         if (!$conn){
             die("Sorry we failed to connect: ". mysqli_connect_error());
         }
         else{
             echo "Connection was successful<br>";
         }

         // // Variables to be inserted into the table
         $transferid = "";
          $Sender = "Rahul Kumar";
          $Receiver = "Virat Kohli";
          $Amount= "2300";
         //  $Date = "21/6/2021";
         //  $destination = "Russia";

         // Sql query to be executed
         // $sql = "INSERT INTO `transfer` (`name`, `dest`) VALUES ('$name', '$destination')";
         $sql = "INSERT INTO `transferdata` (`transfer id`, `Sender`, `Receiver`, `Amount`, `Date`) VALUES ('', '$sender', '$receiver', '$amount', '$date')";
         $result = mysqli_query($conn, $sql);

         // Add a new trip to the Trip table in the database
         if($result){
             echo "The record has been inserted successfully successfully!<br>";
         }
         else{
             echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
         }


        }

?>

<div class="container mt-3">
<h1>Contact us for your concerns</h1>
    <form action="/Project 8 Bank/inputdata.php" method="post">
    <div class="form-group">
        <label for="sender">Sender</label>
        <input type="text" name="sender" class="form-control" id="sender" aria-describedby="sender">
    </div>

    <div class="form-group">
        <label for="receiver">Receiver</label>
        <input type="text" name="receiver" class="form-control" id="receiver" aria-describedby="receiver"> 
        <small id="receiver" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" name="Amount" class="form-control" id="amount" placeholder="Amount">

        <!-- <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>  -->
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>

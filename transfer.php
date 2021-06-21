{% comment %} <a class="navbar-brand" href="#">Sparks Foundation</a> {% endcomment %}
   
    
    <!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Bank</title>
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

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $transferid = $_POST['transferid'];
  $sender = $_POST['sender'];
  $receiver = $_POST['receiver'];
  $amount = $_POST['amount'];

       // Connecting to the Database
       $servername = "localhost";
       $username = "root";
       $password = "";

       //Create a connection
       $conn = mysqli_connect($servername, $username, $password);

       //Die if connection was not successful
       if(!$conn){
       die("Sorry we failed to connect:".mysqli_connect_error());

       }
       else{       
            echo "Connection was successful";

       
           //Sql query to be Executed
           $sql = "INSERT INTO `transferdata` (`transfer id`, `Sender`, `Receiver`, `Amount`, `Date`) VALUES ('$transfer id', '$sender', '$receiver', '$amount', '$date')";
           $result =mysqli_query($conn,$sql);

           if($result){
             echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Your entry has been submitted successfully!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </div>';
           }
           else{
               echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
           //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           //   <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
           //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           //     <span aria-hidden="true">×</span>
           //   </button>
           // </div>';
           }

         }

}

?>


  <div class="container mt-3">
  <img src="img/img4.png" alt="">

    <!-- <div class="container-fluid myclass" style="padding:0px; margin:0px;"> -->
    <h1>Transfer Money</h1>


    <form action="/Project 8 Bank/transferhis.php" method="POST">
      <div class="form-group">
        <label for="Sender">Sender </label>
        <input type="text" name="Sender" class="form-control" id="Sender" placeholder="Sender">
      </div>
      <div class="form-group">
        <label for="Receiver">Receiver</label>
        <input type="text" name="Receiver" class="form-control" id="Receiver" placeholder="Receiver">
      </div>
      <div class="form-group">
        <label for="Amount">Amount</label>
        <input type="text" name="Amount" class="form-control" id="Amount" placeholder="Amount">
      </div>
      <button type="button" class="btn btn-primary btn-lg btn-block">Transfer Money</button>

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
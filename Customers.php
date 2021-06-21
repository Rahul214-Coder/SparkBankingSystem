<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "transfer";


//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());

}
else{
    // echo "Connection was successful";


}

?>


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

  <div class="container">
  <img src="img/img4.png" alt="">



    <table class="table">
    <table class="table" id="myTable">

      <thead>
        <tr>
          <th scope="col">Sr.no</th>
          <th scope="col">Name</th>
          <th scope="col">Account no</th>
          <th scope="col">Balance</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `customers`";
        $result = mysqli_query($conn,$sql);
        while($row =mysqli_fetch_assoc($result)){
          echo "<tr>
          <th scope='row'>". $row['Sr.no'] . "</th>
          <td>". $row['Name'] . "</td>
          <td>". $row['Account no'] . "</td>
          <td>". $row['Balance'] . "</td>
          <td> <button class='edit btn btn-sm btn-primary' id=".$row['Sr.no'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['Sr.no'].">Delete</button>  </td>
        </tr>";
          
          
          
          
          // "<tr>
          // <th scope='row'>".$row['srno'] ."</th>
          // <td>".$row['name'] ."</td>
          // <td>".$row['accountno'] ."</td>
          // <td>".$row['balance'] ."</td>
          // <td> Actions</td>
          // </tr>";
        }
         
      
        ?>


      </tbody>
    </table>
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>
</html>
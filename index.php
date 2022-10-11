<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Sparks Bank</title>
  </head>

  <body style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(./img/bg.jpg);
    min-height: 100vh;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: relative;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : transparent;">
              
              <div class="col-sm-12 col-md text-center">
              
              <marquee style="text-align: justify;"><h1>Welcome To The<br>Sparks Bank</h1></marquee>
                <!-- <img src="img/bank.png" class="img-fluid pt-2 ml-20 "> -->
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act mt-4">
                    <img src="img/cr.jpg" style="border-radius: 50%;height: 250px;width: 250px;" class="img-fluid ">
                    <br>
                    <a href="createuser.php"><button type="button" class="btn btn-outline-success mt-3 mb-2">Create a User</button></a>
                  </div>
                  <div class="col-md act mt-4">
                    <img src="img/rm.jpg" style="border-radius: 50%;height: 250px;width: 250px;" class="img-fluid">
                    <br>
                    <a href="removeuser.php"><button type="button" class="btn btn-outline-danger mt-3 mb-2">Delete Users</button></a>
                  </div>
                  <div class="col-md act mt-4">
                    <img src="img/mt.jpg" style="border-radius: 50%;height: 250px;width: 250px;" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button type="button" class="btn btn-outline-primary mt-3 mb-2" >Make a Transaction</button></a>
                  </div>
                  <div class="col-md act mt-4">
                    <img src="img/tr.jpg" style="border-radius: 50%; height: 250px;width: 250px;" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-outline-warning mt-3 mb-2">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2022<b>Ravi Parihar</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html> 
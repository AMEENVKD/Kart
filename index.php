<?php
include('includes/connect.php');
include('function/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecomurse</title>

  <!-- Bootstrap CSS -->
  <?php
  include("./includes/navbar.php");
  
  ?>

  <!------ calling cart function------>
  


  <!-- Hero section -->

  <html>
  <head>
    <style>
      .jumbotron {
        background-image: url('');
        background-size: cover;
        background-position: center;
      }
    </style>
  </head>
  <body>
    <section class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <p><?php

  ?></p>
        <h1 class="display-4">Welcome to DECKART</h1>
        <sub class="lead">Shop the latest trends and find amazing deals</sub>
        <br>
        <br>
        <sub href="display_all.php" class="btn btn-primary btn-lg">Shop Now</sub>
      </div>
    </section>
  </body>
  </html>



  <!-- Products section -->
  <section class="container mt-4">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
      <!-- Products section -->

      <?php
      Products();
      // $ip = getIPAddress();
      // echo 'User Real IP Address - ' . $ip;

      ?>

  </section>

  <!----- footer ---->

  <?php 
  include("./includes/footer.php");
  ?>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

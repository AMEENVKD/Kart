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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
    /* Custom styles */
    body {
      background-color: #f7f7f7;
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .footer {
      background-color: #232f3e;
      color: #ffffff;
      padding: 20px 0;
    }
    h5 {

    font-family: Arial, sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    }
    #ptt{
        object-fit: contain;
        
    }

  </style>
</head>

<body>
  <!-- Navigation -->
  <?php
  include("./includes/navbar.php");
  ?>
  <!-- Hero section -->

  <!-- Products section -->
  <!-- <section class="container mt-4">
    <h2 class="text-center mb-4">Product detail</h2>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="images/Logo.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">$product_title</h5>
            <p class="card-text" style="font-family: Arial, sans-serif;">$product_description</p>
            <p class="card-text">Price: $product_price</p>
            <a href="#" class="btn btn-primary" id="ptt">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  
  <?php

  view_details();
   
  ?>
    <!-- Footer -->
    <br>
    <br>
    <br>
    <br>
    
    <?php 
  include("./includes/footer.php");
  ?>
  
  <!-- Your footer code here -->

  <!-- Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

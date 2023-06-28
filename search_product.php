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
  
  <?php
  include("./includes/navbar.php");
  ?>


  <!-- Hero section -->
  <section class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <p><?php search_product();?></p>
      <h1 class="display-4">Welcome to Ecomurse</h1>
      <p class="lead">Shop the latest trends and find amazing deals</p>
      <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
    </div>
  </section>

  <!-- Products section -->
  <section class="container mt-4">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
  <!-- Products section -->

    <?php

Products();

    
   
    ?>
    
      
      
  </section>

  <!-- Footer -->
  <!-- <footer class="footer text-center text-light bg-info">
    <p>All rights reserved. Designed by Ecomurse 2023</p>
  </footer> -->
  <?php 
 include("./includes/footer.php");
 ?>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include('includes/connect.php');

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS -->
<style>
  /* Custom styles */
  body {
    background-color: #f7f7f7;
    padding-top: 70px; /* Add padding-top to account for the fixed navbar */
  }

  .navbar {
    background-color: #232f3e;
    color: #ffffff;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999;
  }

  .navbar .navbar-nav {
    margin: auto;
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

  #ptt {
    object-fit: contain;
  }

  /* Add margin-top to adjust content position below the fixed navbar */
  .container {
    margin-top: 7px;
  }

  .logo {
    font-family: system-ui;
    font-size: 25px;
    font-weight: bold;
    color: #dc3545;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  
  .atag {
    font-size: 16px;
  }
  
  /* Custom CSS for logo alignment */
  @media (min-width: 576px) {
    .navbar-brand {
      margin-left: 100px;
      margin-right: auto;
    }
  }
  
</style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info justify-content-center navhbar">
    <div class="container">
      <a class="navbar-brand text-light logo" href="index.php">
        Ecomurse
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-light atag" href="product.html">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light atag" href="display_all.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light atag" href="shoping-cart.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light atag" href="blog.html">Total Price &#8377; <?php total_cart_price()?></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search_product.php" method="get">
          <div class="input-group">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search_data" aria-label="Search">
            <div class="input-group-append">
              <input type="submit" value="Search " class="btn btn-outline-light" name="search_data_product">
            </div>
          </div>
        </form>
        <ul class="navbar-nav ml-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="zmdi zmdi-favorite-outline"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">
              <i class="fas fa-shopping-cart text-light"></i>
              <span class="badge badge-pill badge-danger"><?php   cart_item()?></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

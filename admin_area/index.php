



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        /* Custom Navbar */
        .navbar-custom {
            background-color: #212529;
        }

        .navbar-custom .navbar-brand {
            color: #fff;
        }

        .navbar-custom .nav-link {
            color: #fff;
        }

        .navbar-custom .nav-link:hover {
            color: #ffc107;
        }

        /* Page Content */
        .page-content {
            margin-top: 20px;
        }

        .section-heading {
            text-align: center;
            color: #212529;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: #fff;
            padding: 10px 20px;
            margin-bottom: 10px;
        }

        .btn-custom:hover {
            background-color: #138496;
            border-color: #138496;
        }

        .btn-custom a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="images/icons/logo-01.png" alt="Ecomurse Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.html">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.html">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.html">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.html">Orders</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user-circle"></i> Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Second Child - Manage Details -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading">Manage Details</h3>
            </div>
        </div>
    </div>

    <!-- Third Child - Buttons -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <button class="btn btn-info btn-custom">
                        <a href="insertProduct.php" class="nav-link">Insert Product</a>
                    </button>
                    <button class="btn btn-info btn-custom">
                        <a href="#" class="nav-link">View Products</a>
                    </button>
                    <button class="btn btn-info btn-custom">
                        <a href="index.php?insert_category" class="nav-link">Insert Categories</a>
                    </button>
                    <button class="btn btn-info btn-custom">
                        <a href="#" class="nav-link">View Categories</a>
                    </button>
                    <button class="btn btn-info btn-custom">
                        <a href="#" class="nav-link">All Orders</a>
                    </button>
                    <button class="btn btn-info btn-custom">
                        <a href="#" class="nav-link">All Payments</a>
                    </button>
                    <button class="btn btn-info btn-custom">
                        <a href="#" class="nav-link">List Users</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--- forth child-->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_product'])){
            include('insertProduct.php');
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include('includes/connect.php');
include('function/common_function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Insert the form data into the database
  $query = "INSERT INTO customers (first_name, last_name, address, city, zip, email, phone)
            VALUES ('$firstName', '$lastName', '$address', '$city', '$zip', '$email', '$phone')";
  $result = mysqli_query($con, $query);

  if ($result) {
    // Data inserted successfully
    echo "<script>
            var alertMessage = 'Data for $firstName $lastName inserted into the database.';
            var alertDiv = document.createElement('div');
            alertDiv.classList.add('alert', 'alert-success');
            alertDiv.innerHTML = alertMessage;
            document.body.appendChild(alertDiv);
            setTimeout(function() {
              alertDiv.style.display = 'none';
            }, 3000);
          </script>";
    // JavaScript alert
   
  } else {
    // Failed to insert data
    echo "Error inserting data into the database: " . mysqli_error($connection);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Static Cart Design</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include("./includes/navbar.php"); ?>
<section class="h-100 gradient-custom">
  <div class="container">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Delivery Address</h5>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <!-- Address Form -->
              <div class="row mb-4">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control" name="firstName" required>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control" name="lastName" required>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <div class="form-outline">
                    <input type="text" id="address" class="form-control" name="address" required>
                    <label class="form-label" for="address">Address</label>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-6">
                  <div class="form-outline">
                    <input type="text" id="city" class="form-control" name="city" required>
                    <label class="form-label" for="city">City</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">
                    <input type="number" id="zip" class="form-control" name="zip" required>
                    <label class="form-label" for="zip">Zip</label>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-6">
                  <div class="form-outline">
                    <input type="email" id="email" class="form-control" name="email" required>
                    <label class="form-label" for="email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">
                    <input type="number" id="phone" class="form-control" name="phone" required>
                    <label class="form-label" for="phone">Phone</label>
                  </div>
                </div>
              </div>
                        <!-- Summary -->
        

          <input type="submit" value="Buy Now" class="btn btn-primary btn-lg btn-block" name="update_cart">
        </form>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-body">
        <p><strong>Expected shipping delivery</strong></p>
        <p class="mb-0">12.10.2020 - 14.10.2020</p>
      </div>
    </div>
    <div class="card mb-4 mb-lg-0">
      <div class="card-body">
        <p><strong>We accept</strong></p>
        <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa" />
        <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express" />
        <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" alt="Mastercard" />
        <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp" alt="PayPal acceptance mark" />
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Summary</h5>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li
            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            Products
            <span>$<?php total_cart_price()?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            Shipping
            <span class="text-success">free</span>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
            <div>
              <strong>Total amount</strong>
              <strong>
                <p class="mb-0">(including VAT)</p>
              </strong>
            </div>
            <span><strong>$53.98</strong></span>
          </li>
        </ul>

        <button type="button" class="btn btn-dark btn-lg btn-block">
          continue Shopping
        </button>
      </div>
    </div>
</div>

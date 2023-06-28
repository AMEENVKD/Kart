<?php

// including connect file
include('./includes/connect.php');

function Products(){
    
    global $con; 
    $select_query = "SELECT * FROM products ";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image3'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $product_keywords = $row['keywords']; // Update the column name to 'product_keywords'

        echo "<div class='col-md-4'>
    <div class='card mb-4'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='Product 1'>
        <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text' style='font-family: Arial, sans-serif;'>$product_description</p>
            <p class='card-text'>Price: $product_price</p>

            <a href='cart.php?add_to_cart=$product_id' class='btn btn-primary' id='ptt'>Add to Cart</a>

            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-primary'>View More</a>
        </div>
    </div>
</div>";

} 

}


//searching product

function search_product() {
    global $con;

    if (isset($_GET['search_data'])) {
        $search_data_value = $_GET['search_data'];
        $search_query = "SELECT * FROM products WHERE product_description LIKE '%$search_data_value%'";

        $result_query = mysqli_query($con, $search_query);
        $num_of_rows = mysqli_num_rows($result_query);

        if ($num_of_rows == 0) {
            echo "<div id='search-alert' class='text-center'>
            <div class='alert alert-danger'>No results match. No products found in this category!</div>
        </div>";

        echo "<script>
            setTimeout(function() {
                document.getElementById('search-alert').style.display = 'none';
            }, 2000); // Delay of 2 seconds (2000 milliseconds)
        </script>";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            // Code to display product details...
        }
    }
}

function get_all_product(){
    global $con; 
    $select_query = "SELECT * FROM products  ";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image3'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $product_keywords = $row['keywords']; // Update the column name to 'product_keywords'

        echo "<div class='col-md-4'>
            <div class='card mb-4'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='Product 1'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text' style='font-family: Arial, sans-serif;'>$product_description</p>
                    <p class='card-text'>Price: $product_price</p>

                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary' id='ptt'>Add to Cart</a>

                    <a href='product_details.php?product_id=$product_id' class='btn btn-outline-primary'>View More</a>
                </div>
            </div>
        </div>";
}

}

//view detail fucntion
function view_details(){
    global $con;
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        $product_id=$_GET['product_id'];
     
    $select_query = "SELECT * FROM products where product_id=$product_id";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image3'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $product_keywords = $row['keywords']; // Update the column name to 'product_keywords'

        echo "<section class='container mt-4'>
        <h2 class='text-center mb-4'>Product detail</h2>
        <div class='row justify-content-center'>
          <div class='col-md-4'>
            <div class='card mb-4 carousel slide' data-ride='carousel' id='productCarousel'>
              <div class='carousel-inner'>
                <div class='carousel-item active'>
                  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='Product 1'>
                </div>
                <div class='carousel-item'>
                  <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='Product 2'>
                </div>
                <div class='carousel-item'>
                  <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='Product 3'>
                </div>
              </div>
              <a class='carousel-control-prev' href='#productCarousel' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href='#productCarousel' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
               
                <p class='card-text'>Price:$product_price</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary' id='ptt'>Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- JavaScript -->
      <script>
        // Activate the carousel
        $(document).ready(function() {
          $('#productCarousel').carousel();
        });
      </script>
      
      ";
        
} 

}
}
}

// get ip address functionn

function getIPAddress() {
    // Whether IP is from the share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    // Whether IP is from the proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Whether IP is from the remote address
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// $ip = getIPAddress();
// echo 'User Real IP Address - ' . $ip;

// cart function
function cart() {
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<div id='search-alert' class='text-center'>
            <div class='alert alert-danger'>already in cart</div>
        </div>";

        echo "<script>
            setTimeout(function() {
                document.getElementById('search-alert').style.display = 'none';
            }, 2000); // Delay of 2 seconds (2000 milliseconds)
        </script>";
           
        } else {
            $insert_query = "INSERT INTO cart_details (product_id, ip_address, quantity) VALUES ($get_product_id, '$get_ip_add', 0)";
            $result_query = mysqli_query($con, $insert_query);
            echo "<div id='search-alert' class='text-center'>
                <div class='alert alert-success'>success</div>
            </div>";

            echo "<script>
                setTimeout(function() {
                    document.getElementById('search-alert').style.display = 'none';
                }, 2000); // Delay of 2 seconds (2000 milliseconds)
            </script>";
            
        }
    }
}


// function to get cart item item numbers

function cart_item() {
    global $con;

    $get_ip_add = getIPAddress();
   
    $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add'";
    $result_query = mysqli_query($con, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);

    if (isset($_GET['add_to_cart'])) {
        // Product has been added to the cart
        $product_id = $_GET['add_to_cart'];

        // Check if the product is already in the cart
        $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add' AND product_id=$product_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);

        if ($num_of_rows == 0) {
            // Product is not in the cart, so insert it
            $insert_query = "INSERT INTO cart_details (product_id, ip_address, quantity) VALUES ($product_id, '$get_ip_add', 0)";
            mysqli_query($con, $insert_query);
            
        }
     
    }

    echo $count_cart_items;
}



    // total price function
    function total_cart_price(){
        global $con;
        $get_ip_add = getIPAddress();
        $total = 0;
        $cart_query="Select * from cart_details where ip_address='$get_ip_add'";
        $result=mysqli_query($con,$cart_query);
        while($row=mysqli_fetch_array($result)){
            $product_id=$row['product_id'];
            $select_product="Select * from products where product_id='$product_id'";
            $result_products = mysqli_query($con, $select_product);
            while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price=array($row_product_price['product_price']);
                $product_values=array_sum($product_price);
                $total+=$product_values;

            }
        }
        echo "$total";
       

    }


    function updateCartItem($product_id, $quantity) {
        global $con;
        $update_query = "UPDATE cart_details SET quantity = '$quantity' WHERE product_id = '$product_id'";
        $result = mysqli_query($con, $update_query);
        if ($result) {
          echo "Cart item updated successfully.";
        } else {
          echo "Error updating cart item: " . mysqli_error($con);
        }
      }
      

?>
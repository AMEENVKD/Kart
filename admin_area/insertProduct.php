<?php
include('../includes/connect.php');

// Check if the form is submitted
if (isset($_POST['insert_product'])) {
    // Retrieve form data
    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $product_category = $_POST['product_categories'];
    $price = $_POST['price'];
    $product_status = 'true';


    // Process and store the uploaded images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    if ($product_title == '' or $description == '' or $keywords == '' or $product_category == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
        echo "<script>alert('Please fill all the required fields.')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

        $insert_query = "INSERT INTO products (product_title, product_description, keywords , category_id, product_price, product_image1, product_image2, product_image3, product_status) VALUES ('$product_title', '$description', '$keywords', '$product_category', '$price', '$product_image1', '$product_image2', '$product_image3', '$product_status')";
        $result_query = mysqli_query($con, $insert_query);

        if ($result_query) {
            echo "<script>alert('Product inserted successfully.')</script>";
        } else {
            echo "<script>alert('Error: Unable to insert product.')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
</head>
<body>
    <!-- Form content here -->
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 40px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .submit-btn {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Insert Products</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div>

            <div class="form-group">
                <label for="keywords" class="form-label">Keywords</label>
                <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>

            <div class="form-group">
                <label for="product_categories" class="form-label">Product Category</label>
                <select name="product_categories" id="product_categories" class="form-control">
                    <option value="">Select category</option>
                    <?php
                         $select_query = "SELECT * FROM categories";
                         $result_query = mysqli_query($con, $select_query);
                         while($row = mysqli_fetch_assoc($result_query)){
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                         }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Enter price" autocomplete="off" required="required">
            </div>

            <div class="submit-btn">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
        </form>
    </div>
</body>
</html>

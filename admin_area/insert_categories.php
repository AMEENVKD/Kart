<?php
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];

    //select data from database
    $select_query = "SELECT * FROM categories WHERE category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number > 0){
        echo "<script>alert('This is already present in the database')</script>";
    } else {
        $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
        $result = mysqli_query($con, $insert_query);

        if($result){
            echo "<script>alert('Category has been inserted')</script>";
        }
    }
}
?>

<h2 class="text-center">Insert Categoris</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Category" aria-label="Add Category" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-3 m-auto">
        <input type="submit" class="btn btn-info px-3 my-3" name="insert_cat" value="Insert Category">
    </div>
</form>


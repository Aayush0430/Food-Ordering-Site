<?php
if(!session_id()){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <style>
    .body-main {
        background-color: lightgray;
        width: auto;
        height: 90vh;
        margin-left: 15vw;

        padding-left: 20px;
        /* margin-top: 9vh; */
    }

    #cat-btn {
        margin: 20px 0 0 200px;
        font-size: 0.9rem;
        padding: 5px 10px;
        border-radius: 5px;
        border: 2px solid black;
        transition: all 0.3s ease;
    }

    #cat-btn:hover {

        background-color: black;
        color: lightgray;
    }
    </style>
</head>

<body>
    <?php
    require_once("../db_conn.php");
    include("adminIndex.php");
    ?>
    <?php
    $cat_id=$_POST["category_id"];
    $sql_edit="SELECT * from categories where category_id=$cat_id";
    $result_edit= mysqli_query($conn,$sql_edit);
    $item=mysqli_fetch_assoc($result_edit);
    echo'
    <div class="body-main">

        <h3 class="">Edit category</h3>

        <form  action="updateCategoryHandle.php" method="post">
            <label for="name">Category Name</label><br>
            <input  id="name" style="height:25px;width:200px;border-radius:5px;border:none;padding-left:5px;" 
            type="text" name="category_name" value="'.$item["category_name"].'" required><br>
            
            <label for="image">Image URL</label><br>
            <input  id="image" style="height:30px;width:500px;border-radius:5px;border:none;padding-left:5px;" 
            name="category_image" type="text" value="'.$item["category_image"].'" required><br>
            
            <input type="hidden" name="category_id" value="'.$cat_id.'">
            <br>
            <input class="" id="cat-btn" type="submit" value="Save Edit">
            
            </form>
            </div>

    </div>
    ';


    ?>

</body>

</html>
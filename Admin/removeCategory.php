<?php
if(!session_id()){
    session_start();
}
?><?php
    include("../db_conn.php");
    $cat_id=$_POST['category_id'];
    $sql="DELETE from categories where category_id=$cat_id";
    $result=mysqli_query($conn,$sql);
    header("location:adminCategories.php?catrem=removed");
?>
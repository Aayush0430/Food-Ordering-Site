<?php
if(!session_id()){
    session_start();
}
?><?php
    include("../db_conn.php");
    $cat_id=$_POST['category_id'];
    $cat_name=$_POST['category_name'];
    $cat_image=$_POST['category_image'];
    
    $sql_update="UPDATE categories set category_name='$cat_name',category_image='$cat_image' where category_id=$cat_id";
    $result=mysqli_query($conn,$sql_update);
    header("location:adminCategories.php?catup=updated");

?>
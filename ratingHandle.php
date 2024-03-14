<?php
  if(!session_id())
    session_start();
?>
<?php 
    if(isset($_SESSION['login'])&&$_SESSION['login']==true){

    }
    else{
        header("location:login.php");
    }
    include('db_conn.php');
        // $rating_num=$_POST['rating'];//rating value
        // $item_id=$_POST['itemID'];//rating item id
    if($_POST){
        $rating_num=$_POST['rating'];//rating value
        $item_id=$_POST['itemID'];//rating item id
        
        $sql_rating="SELECT * from items where item_id=$item_id";
        $result_rating=mysqli_query($conn,$sql_rating);
        $row=mysqli_fetch_assoc($result_rating);
        $previous_rating=$row['item_rating'];
        $rating_count=$row['rating_count'];
        
        // echo $previous_rating.$rating_count.$rating_num.$item_id;

        
        if($rating_count==0){
          $new_rating=$rating_num;  
        }else{
         $new_rating=(float)(($rating_num+$previous_rating)/2);//average 
        }
      $rating_count++;//increase rating count
      
          $sql_rating_update="Update items set item_rating=".$new_rating.",rating_count=".$rating_count."  where item_id=$item_id";
        $result_rating_update=mysqli_query($conn,$sql_rating_update);
        header("refresh:0;url=productPage.php?item_id=$item_id");
    }
?>
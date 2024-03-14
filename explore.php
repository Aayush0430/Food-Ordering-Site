<?php
if(!session_id())
    session_start();
 
?>
<?php
include("db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <style>
    .box-food {
        transition: all 0.7s ease;
    }

    .box-food img {
        filter: contrast(60%);
        transition: all 0.6s ease;

    }

    .box-food:hover {
        /* transform: scale(1.1); */
        box-shadow: 5px 5px 10px gray;
        font-size: 1.2rem;

    }

    .box-food:hover>img {
        filter: contrast(90%);


    }

    #button-order {

        transition: all 0.4s ease;
    }

    #button-order:hover {
        transform: scale(0.9);
        color: black;


    }
    </style>
</head>

<body>

    <?php
              $sql = "SELECT * FROM `items` ORDER BY rand()";
              $result = mysqli_query($conn,$sql);
     $count = 1;
     echo '<div style="width:100%;margin-left:30px;">';
       echo '<div class="product-container"
       style="display:flex;justify-content:space-around;
       flex-wrap:wrap;background:rgba(250, 250, 250, 1);border-radius:15px;padding:10px;">';
       
       
       while($item = mysqli_fetch_assoc($result))
       {
           if($count<=28)
           {
           $category_id = $item['product_cat_id'];
           $product_id = $item['item_id'];
           
           // card
           echo'
               <div class="card my-4 box-food" style="width: 260px; height:370px;">
                   <img src="'.$item['item_image'].'" class="card-img-top p-2" style="height:57%;">
                   <div class="card-body text-center" style="padding:15px 10px 0px 10px;">
                   <p class="card-title font-weight-light m-0">'.substr($item['item_name'],0,50).'</p>
                   <h4 class="card-title font-weight-bold mt-1">Rs. '.$item['item_price'].'</h4>
                   <div style="position:absolute;bottom:5px;right:10px;"><i class="fa-solid fa-star" style="font-size:0.8rem;
                   color:#f2a900;"></i><span style="font-family:comic-sans;">'.number_format((float)$item['item_rating'], 1, '.', '').'/5</span></div>
                
                    <!-- Button trigger  -->
                    <form action="productPage.php" method="post">
                    <input type="hidden" name="item_id" value="'.$product_id.'">
                  <button type="submit" style="background-color:#f2a900;border:0;outline:none;" class="btn btn-primary" id="button-order" data-toggle="modal" data-target="#exampleModalCenter'.$product_id.'">
                    Order now
                  </button>
                    </form>
                   </div>
               </div>';
           $count++;
           
           }
          }
           
       echo '</div>';
     echo '</div>';
     ?>


</body>
<script>
function showRating() {

}

function calcTotal() {
    var quantity = document.getElementById("quantityInput").value;
    console.log(quantity);
}
calcTotal();
</script>

</html>
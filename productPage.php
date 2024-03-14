<?php
if(!session_id())
    session_start();
 
?>
<?php  
    include('db_conn.php');
    // if($_POST['item_id']){
        
        $item_id=$_REQUEST['item_id'];
        // $item_id=10;
        $sql="SELECT * from items where item_id=$item_id";
        // $sql="SELECT * from items where item_id=10";
    $result=mysqli_query($conn,$sql);    
    $row=mysqli_fetch_array($result);
    $item_name=$row['item_name'];
    $product_cat_id=$row['product_cat_id'];
    // }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel=<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $item_name; ?></title>


    <style>
    .product-info {
        padding: 5px;
        margin: 20px auto 30px;
        background-color: rgb(249, 244, 228);
        border-radius: 10px;
        overflow: hidden;
        width: 720px;
        height: 350px;
        display: flex;
    }

    #product-image {
        border-radius: 10px;
        padding: 10px;
        height: auto;
        width: 350px;
        /* background-color: bisque; */
        /* object-fit: cover; */

    }

    #product-image img {
        box-shadow: 2px 2px 5px black;

    }

    #product-details {
        border-radius: 10px;
        padding: 10px 10px 10px 0;
        width: 370px;

        /* border: 1px solid black; */

        /* background-color: blue; */
        position: relative;
    }

    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap');


    #item-name {
        margin-left: 10px;
        font-size: 2.5rem;
        font-weight: bold;
        font-family: "Dancing Script", cursive;
    }

    #item-des {
        font-family: "Protest Riot", sans-serif;
        text-align: justify;
        font-weight: 400;
        font-size: 1rem;
        height: 120px;
        /* background: pink; */
        padding: 10px;
    }

    #item-rating {
        font-size: 1.1rem;
        padding: 0 10px;
        display: flex;
        /* background-color: aqua; */
        height: 100px;
    }

    #item-price {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

        position: absolute;
        right: 150px;
        bottom: 0px;
        font-size: 1.6rem;
        font-weight: 600;
    }

    #order-btn {
        font-family: "Protest Riot", sans-serif;
        position: absolute;
        right: 30px;
        bottom: 15px;
        background-color: #f2a900;
        /* background-color: #efba3e; */
        border: none;
        outline: none;
        padding: 5px 10px;
        border-radius: 10px;
        color: white;
        transition: 0.5s ease;
    }

    #order-btn:hover {
        transform: scale(1.1);
        color: black;
    }

    #rate-btn {
        font-family: "Protest Riot", sans-serif;
        background-color: #f2a900;
        border: none;
        outline: none;
        padding: 3px 10px;
        height: 30px;
        border-radius: 10px;
        color: white;
        transition: 0.5s ease;
        margin-left: 10px;
    }

    #rate-btn:hover {
        transform: scale(1.1);
        color: black;
    }

    #related-products {
        height: auto;
        width: 95%;
    }

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
        filter: contrast(100%);


    }

    #button-order {
        transition: all 0.4s ease;
    }

    #button-order:hover {
        transform: scale(0.9);
        color: black;


    }

    .rating-css {
        display: flex;

    }

    .rating-css div {
        color: yellow;
        font-size: 5px;
        font-family: sans-serif;
        font-weight: 10px;
    }

    .rating-css label {
        color: yellow;
    }

    .rating-css input {
        display: none;

    }

    .rating-css input+label {
        font-size: 20px;
        text-shadow: 1px 1px 0 #838383;
        cursor: pointer;
    }


    .rating-css input:checked+label~label {
        color: #838383;

    }

    .rating-css label:active {
        transform: scale(0.8);
        /* background-color: yellow; */
        transition: 0.3s ease;
    }

    .product-info {
        position: relative;
    }

    .outer {
        position: absolute;
        height: 100%;
        width: 100%;
        /* background-color: red; */
        overflow: hidden;
        z-index: 1;
        transform: translate(-5px, -5px);
    }

    .circle {
        position: relative;
        height: 200px;
        width: 200px;
        border-radius: 50%;

        background-color: rgb(253, 231, 167);

    }

    .circle:nth-child(1) {
        top: 200px;
        transform: translateX(-100px);

    }

    .circle:nth-child(2) {
        height: 300px;
        width: 300px;
        top: -50px;
        transform: translateX(50px);

    }

    .circle:nth-child(3) {
        height: 300px;
        width: 300px;
        top: -100px;
        transform: translate(280px, -200px);


    }

    .circle:nth-child(4) {
        height: 500px;
        width: 500px;

        transform: translate(480px, -700px);


    }



    .pizza-size input[type='radio'] {
        appearance: none;
        margin-right: 5px;
        width: 10px;
        height: 10px;
        border: 1px solid #999;
        border-radius: 0%;
        outline: none;
        transition: box-shadow 0.3s ease;
        cursor: pointer;
    }

    .pizza-size input[type='radio']:before {
        content: '';
        display: block;
        width: 60%;
        height: 60%;
        margin: 20% auto;
        border-radius: 50%;
    }

    .pizza-size input[type='radio']:checked:before {
        background: black;
    }

    input[type='checkbox'] {
        color: black;
        accent-color: black;
    }
    </style>
</head>

<body>

    <?php
        
        include('header.php');

    ?>
    <!-- product -->
    <div class="product-info">

        <!-- <div class="outer">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div> -->
        <div id="product-image" style="">
            <img src="<?php echo $row['item_image']; ?>"
                style="width:300px;height:300px;object-fit:cover;border-radius:10px;" alt="product">
        </div>
        <div id="product-details">

            <div id="item-name">
                <p><?php echo $item_name;      ?></p>
            </div>
            <div id="item-des">
                <p><?php echo $row['item_des'];      ?></p>
            </div>
            <div id="item-rating">
                <p><b>Rating:</b> <i class="fa-solid fa-star"
                        style="color:#f2a900;"></i><?php echo number_format((float)$row['item_rating'], 1, '.', '');      ?>/5
                </p>

                <!-- modal for rating -->
                <?php 
                // echo $item_id;
                    echo'
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" id="rate-btn" data-toggle="modal" data-target="#exampleModal">Rate
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="margin:40% auto;width:400px;">
                            <div class="modal-header" style="height:50px;">
                                <h5 class="modal-title" id="exampleModalLabel" >Rate the item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="ratingHandle.php" method="post">

                            <div class="rating-css">

                        <input type="hidden" name="itemID" value="'.$item_id.'">
                <input type="radio" name="rating" id="rating1" value=1>
                <label for="rating1"><i class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rating2" value=2>
                <label for="rating2"><i class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rating3" value=3>
                <label for="rating3"><i class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rating4" value=4>
                <label for="rating4"><i class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rating5" value=5 checked>
                <label for="rating5"><i class="fa-solid fa-star"></i></label>
            </div>
        </div>
        <input type="hidden" name="item_id" value="">
        <div class="modal-footer" style="height:50px;">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" style="color:white;background:#f2a900;">Submit</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    ';
    ?>

            </div>
            <div id="item-price">
                <p>Price: Rs <?php echo $row['item_price'];      ?></p>
            </div>
            <?php
           if (strpos($item_name, "Pizza") !== false) {
                echo'
                   <button type="button" style="background-color:#f2a900;border:0" class="btn btn-primary" id="order-btn" data-toggle="modal" data-target="#exampleModalCenter'.$item_id.'">
                    Order now 
                  </button>

                  <!-- Modal -->

                  <div class="modal fade" id="exampleModalCenter'.$item_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content" style="height:auto;">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">'.$row["item_name"].'</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                       
                        <form action="cart_handle.php" method="post">

                        <div class="modal-body" style="width:400px;display:flex;">
                        
                          <div class="left" style="height:200px;width:240px">
                                <img src='.$row["item_image"].' class="card-img-top" style="margin-bottom:20px;height:100%;border-radius:15px;width:230px;object-fit:cover;object-position: center;">
                          
                            </div>
                                <div class="right" style=""> 

                                        <div class="pizza-size" style="padding:0 10px;font-size:0.95rem;display:flex;gap:10px;width:200px;">
                          
                                            <div><b>Pizza Size:</b><br>
                                            </div>
                                            <div>
                                                    <input type="radio" class="size-radio" name="pizza-size" id="small" value="small" required><label for="small">Small</label><br>
                                                    <input type="radio" class="size-radio"name="pizza-size" id="medium" value="Medium"><label for="medium">Medium</label><br>
                                                    <input type="radio" class="size-radio"name="pizza-size" id="large" value="Large"><label for="large">Large</label><br>
                                            </div>
                                        </div>
                                <div style="margin-left:10px;">
                                <b>Add Toppings:</b><br>
                                
                                <input type="checkbox" id="olive" value="olive"><label for="olive">Black Olives</label><br>
                                <input type="checkbox" id="cheese" value="cheese"><label for="cheese">Extra Cheese</label><br>
                                <input type="checkbox" id="pepper" value="pepper"><label for="pepper">Pepper</label><br>
                                <input type="checkbox" id="onions" value="onioins"><label for="onions">Onions</label><br>
                                </div>
                          <br>  
                              
                             
                          
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <input style="background-color:#f2a900;border:0" id="button-order" type="submit" value="Add to cart" class="btn btn-secondary" >
                          <input  type="hidden" name="product_id" value="'.$item_id.'">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div> 
                ';
            }else{
            echo'

            <!-- Button trigger modal -->

                  <button type="button" style="background-color:#f2a900;border:0" class="btn btn-primary" id="order-btn" data-toggle="modal" data-target="#exampleModalCenter'.$item_id.'">
                    Order now
                  </button>

                  <!-- Modal -->

                  <div class="modal fade" id="exampleModalCenter'.$item_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">'.$row["item_name"].'</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                       
                        <form action="cart_handle.php" method="post">

                        <div class="modal-body">
                          <div style="display:flex;height:200px;">
                          <img src='.$row["item_image"].' class="card-img-top" style="height:100%;border-radius:15px;width:230px;object-fit:cover;object-position: center;">
                            <div class="right" style="width:50%;display:flex;flex-direction:column;justify-content:center;align-items:center;"> 
                            <div class="desc" style="padding:0 10px;font-size:0.95rem;">
                              '.$row["item_des"].'
                          </div>
                            
                          <br>  
                            <!--<input type="number" name="quantity" id="quantityInput" onchange=\'calcTotal()\' value="1" style="width:50px;">-->
                              <p>Price: '.$row["item_price"].'</p>
                              
                              <div class="desc" style="padding:0 10px;font-size:0.95rem;position:absolute;bottom:10px;right:20px;">
                              Rating:'." ".'<i class="fa-solid fa-star" style="color:#f2a900;"></i> '.number_format((float)$row['item_rating'], 1, '.', '').'/5
                             </div>
                          
                          </div>
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <input style="background-color:#f2a900;border:0" id="button-order" type="submit" value="Add to cart" class="btn btn-secondary" >
                          <input  type="hidden" name="product_id" value="'.$item_id.'">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div> ';
            }
            echo'

        </div>
    </div>';
    ?>

            <!-- related products  -->
            <div id="related-products">
                <h2
                    style="text-align:center;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Related Items</h2>

                <div class="explore-page">


                    <?php
            // $product_cat_id=$row['product_cat_id'];
        $sql = "SELECT * FROM `items` where product_cat_id=$product_cat_id and item_id not in ($item_id)";
              $result = mysqli_query($conn,$sql);
        $count = 1;
         echo '<div style="width:100%;margin-left:30px;">';
             
       echo '<div class="product-container"
       style="display:flex;justify-content:space-around;
       flex-wrap:wrap;background:rgba(250, 250, 250, 1);border-radius:15px;padding:10px;">
       ';
       
       
       while($item = mysqli_fetch_assoc($result))
       {
           if($count<=21)
          //  {
           $category_id = $item['product_cat_id'];
           $product_id = $item['item_id'];
           
           // card
           echo'
               <div class="card my-4 box-food" style="width: 260px; height:370px;">
                   <img src="'.$item['item_image'].'" class="card-img-top p-2" style="height:57%;object-fit:cover;">
                   <div class="card-body text-center" style="padding:15px 10px 0px 10px;">
                   <p class="card-title font-weight-light m-0">'.substr($item['item_name'],0,50).'</p>
                   <h4 class="card-title font-weight-bold mt-1">Rs. '.$item['item_price'].'</h4>
                                      <div style="position:absolute;bottom:5px;right:10px;"><i class="fa-solid fa-star" style="font-size:0.8rem;
                   color:#f2a900;"></i><span style="font-family:comic-sans;">'.number_format((float)$item['item_rating'], 1, '.', '').'/5</span></div>

                
                    <!-- Button trigger  -->
                    <form action="productPage.php" method="post">
                    <input type="hidden" name="item_id" value="'.$product_id.'">
                  <button type="submit" style="background-color:#f2a900;border:0" class="btn btn-primary" id="button-order" data-toggle="modal" data-target="#exampleModalCenter'.$product_id.'">
                    Order now
                  </button>
                    </form>

                   </div>
               </div>';
           $count++;
           
           }
       
           
       echo '</div>';
     echo '</div>';

        ?>









                </div>
            </div>
            <div id="footer-section">
                <?php
        include('footer.php');
        ?>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
</body>

</html>
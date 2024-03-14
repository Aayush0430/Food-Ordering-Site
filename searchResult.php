<?php
if(!session_id())
    session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>search</title>
    <style>
    main {
        height: auto;
        /* background-color: blue; */
        width: 100%;

    }

    #second {
        width: auto;
        height: 250px;
        margin: 35px 50px;
        display: flex;
        justify-content: space-evenly;
        /* background-color: red;    */
    }

    #search {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: white;
        width: 700px;
        height: 100%;
        border-radius: 20px;
        background: url(img/second.png);
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* #search-img{
        mix-blend-mode: multiply;
        height:200px;
        padding: 20px;
    } */
    #search h1 {
        font-weight: bold;
    }

    #input_search {
        height: 15px;
        cursor: pointer;
        margin-left: 10px;
        border: 0;
        outline: none;
        font-size: 0.6rem;
    }

    #search button {
        border-radius: 15px;
        width: 45px;
        height: 80%;
        margin-right: 5px;
        border: none;
        background-color: #f2a900;
        color: white;
        font-size: 0.6rem;
    }

    #explore-search-button {
        border-radius: 15px;
        margin-right: 5px;
        border: 1px solid #f2a900;
        padding: 5px 10px;
        background-color: #f2a900;
        color: white;
        font-size: 0.8rem;
    }

    #search button:hover,
    #explore-search-button:hover {
        border: 1px solid #f2a900;
        color: #f2a900;
        background-color: inherit;
    }

    #search button {
        border-radius: 15px;
        width: 45px;
        height: 80%;
        margin-right: 5px;
        border: none;
        background-color: #f2a900;
        color: white;
        font-size: 0.6rem;
    }

    #search button:hover {
        transform: scale(1.1);
        border: 1px solid #f2a900;
        color: #f2a900;
        background-color: inherit;
    }

    #searchbar {
        margin-top: 10px;
        width: 200px;
        height: 30px;
        background-color: white;
        border-radius: 15px;
        justify-content: space-between;
        display: flex;
        align-items: center;

    }

    .scroll-container {
        height: 100%;
        background-color: #f2a900;
        width: auto;
        border-radius: 20px;

    }


    .link {
        color: black;

    }

    .link:hover {
        text-decoration: none;
        color: gray;
    }

    .explore-page {
        height: auto;
        width: 95%;
        /* background-color: blue; */


    }

    .explore-section {
        margin-left: 0;
        width: 90%;

    }

    html {
        /* scroll-behavior: smooth; */
        scroll-padding-top: 75px;
    }

    #search-a {
        text-decoration: none;
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
    </style>
</head>

<body>
    <?php
    include("db_conn.php");
    ?>
    <?php
    include("header.php");
    ?>

    <main>
        <div id='second'>
            <div id='search'>
                <?php include('searchBanner.php'); ?>
            </div>
            <div class="scroll-container">
                <?php
                include ("scroll_cont.php");
                ?>
            </div>
        </div>
        <!-- category-bar -->
        <div id="category-bar">
            <?php  include('categoryCarousel.php')?>
        </div>
    </main>
    <!-- explore page -->
    <section id="explore-section"><span style="height:1px;"></span></section>
    <div class="explore-page">

        <div style="display: flex;justify-content:center;margin-left:376px;align-items:center;">
            <div style="">
                <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                    Explore</h2>
            </div>

            <form action="#explore-section" method="post">

                <input name="searched-item" id="explore-section-input"
                    style="border:none;border-bottom:1px solid black;margin-left:50px;outline:none;width:250px;padding-left:10px;font-size:0.9rem;"
                    placeholder="Find your favourite food" type="text">
                <button type="submit" id="explore-search-button">SEARCH</button>
            </form>
        </div>
        <?php
        $searched_item=$_POST["searched-item"];
        // echo "Searched:".$searched_item;
    
        $sql = "SELECT * FROM `items` where item_name like '%".$searched_item."%' OR item_des like '%".$searched_item."%'";
              $result = mysqli_query($conn,$sql);
              $number=mysqli_num_rows($result);
              
              if($number>0){
        $count = 1;
         echo '<div style="width:100%;margin-left:30px;">
         <pre style="font-size:1rem;margin-left:40%;">You searched for:  '.$searched_item.'</pre>
         <pre style="margin-left:500px;">Results:</pre>';
             
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
                   <img src="'.$item['item_image'].'" class="card-img-top p-2" style="height:57%;">
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
        }
        else{
            echo '<div style="width:100%;margin-left:30px;">
         <pre style="font-size:1rem;margin-left:40%;">You searched for:  '.$searched_item.'</pre>
         <pre style="margin-left:500px;">Results:</pre>';

         echo '<div class="product-container"
            style="display:flex;justify-content:space-around;
            flex-wrap:wrap;background:rgba(250, 250, 250, 1);border-radius:15px;padding:10px;height:300px;">
            
            <div style="display:flex;padding-top:100px;">
                <pre><h2>No items were found</h2></pre>
                <img src="img/sad.png" style="height:40px;padding-left:20px;">
            </div>
       ';
         
         echo '</div>
         </div>';
        }
        ?>









    </div>
    <div id="footer-section">
        <?php
        include('footer.php');
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    const input = document.getElementById("explore-section-input");
    window.addEventListener("load", () => {
        setTimeout(() => {

            input.focus();
        }, 200)
    })

    function inputFocus() {
        setTimeout(() => {

            input.focus();
        }, 200)

    }
    </script>
</body>

</html>
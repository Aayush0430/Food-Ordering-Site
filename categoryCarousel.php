<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorybar</title>
    <style>
    .cover {
        /* position: relative; */
        height: 50%;
        width: 90%;
    }

    .carousel-category {
        width: 80%;
        display: flex;
    }

    .carousel-category-inner {
        height: 170px;
        width: 81vw;
        display: flex;
        /* overflow: hidden; */
        position: relative;
        transition: all 0.6s ease;
        scroll-behavior: smooth;
        overflow-x: scroll;
        /* background-color: #f2a900;    */
        padding: 10px 10px 0px;
    }

    /* Adding the ability to scroll */


    /* Hiding scrollbar for Chrome, Safari and Opera */
    .carousel-category-inner::-webkit-scrollbar {
        display: none;
    }


    .carousel-category a {
        text-decoration: none;
        color: black;
    }

    .carousel-category img {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    .cat-button-left {
        margin-top: 60px;
        left: 100px;
        position: absolute;
        border: none;
        outline: none;
        border-radius: 50%;
        z-index: 2;
        padding: 10px;
        /* background-color: #f2a900; */
        color: gray;
        transition: all 0.5s ease;

    }

    .cat-button-right {
        margin-top: 60px;

        position: absolute;
        right: 110px;
        border: none;
        outline: none;
        border-radius: 50%;
        /* z-index: 500; */
        padding: 10px;
        /* background-color: #f2a900; */
        color: gray;
        transition: all 0.5s ease;
    }

    .cat-button-right:hover,
    .cat-button-left:hover {
        color: black;
        transform: scale(0.9);
        background-color: #f2a900;
    }

    #category-bar {
        padding: 20px;
        /* background-color: #f2a900; */
        /* background-color: white; */
        /* overflow-x: hidden; */
        height: auto;
        width: auto;
        margin: 35px 80px;
        display: flex;
        /* z-index: 200;     */
        padding-left: 30px;
    }

    .category-type {
        padding: 5px;
        display: grid;
        margin-right: 10px;
        justify-content: center;
        align-items: center;
        background-color: none;
        box-shadow: 5px 5px 10px gray;
        border-radius: 20px;
        width: 160px;
        height: 150px;
        transition: all 0.6s ease;
        /* z-index: 200; */

    }


    .category-type:hover {
        box-shadow: 5px 5px 10px #f2a900;

    }

    .category-type:hover {
        transform: scale(0.9);
    }

    .category-bar-button {
        border: none;
        background-color: white;
        outline: none;

    }
    </style>
</head>

<body>
    <div class="carousel-category">
        <div>

            <button class="cat-button-left" style="outline:none;" onclick="scrollr()"><i
                    class="fa-solid fa-angles-left"></i></button>
        </div>
        <div class="cover">
            <div class="carousel-category-inner">
                <?php
                        include("db_conn.php");
                        $sql_category="SELECT * from categories";
                        $result_category=mysqli_query($conn,$sql_category);
                        while($item=mysqli_fetch_assoc($result_category)){
                            echo'
                            <form style="border:none;outline:none;" action="categoryDisplay.php?cid='.$item['category_id'].'#explore-section" method="post">
                    <button class="category-bar-button" style="outline:none;" type="submit">
                        <div class="category-type">
                            <img src="'.$item['category_image'].'" alt="'.$item["category_name"].'">
                            <p>'.$item["category_name"].'</p>
                        </div>
                        </button>
                        </form>';

                        }
                    ?>
            </div>
        </div>
        <div>
            <button class="cat-button-right" style="outline:none;" onclick="scrolll()"><i
                    class="fa-solid fa-angles-right"></i></button>
        </div>


    </div>
    <!-- <button class="carousel-control-prev" onclick="scrollr()">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" onclick="scrollr()">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button> -->


    <script>
    function scrolll() {
        const left = document.querySelector(".carousel-category-inner");
        left.scrollBy(200, 0)
    }

    function scrollr() {
        const right = document.querySelector(".carousel-category-inner");
        right.scrollBy(-200, 0)
    }
    </script>

</body>

</html>
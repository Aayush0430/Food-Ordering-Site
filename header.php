<?php
if(!session_id())
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    #header {
        z-index: 10;
        font-size: 0.9rem;
        font-family: "Cabin", sans-serif;
        font-style: normal;
        padding: 0 50px;
        margin: 0;
        height: 60px;
        align-items: center;
        display: flex;
        position: sticky;
        top: 0;
        background-color: white;
        /* background-color: rgba(0, 0, 0, 0.7); */
        /* color: white; */
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.9);
    }

    #header img {
        height: 50px;

    }

    /* .searchbar{
            width: 500px;
            height:20px;
        }
        .searchbar input{
            width:90%;
            height:100%;
            border-radius: 7px;
        } */
    #mid {
        margin-left: 50px;
        justify-content: space-around;
        height: 40%;
        width: 300px;
        /* background-color: red; */
        display: flex;
        align-items: center;
    }

    #header a {
        color: black;
        display: flex;
        align-items: center;
        text-decoration: none;
        /* color: white; */
    }

    #right {
        height: 40%;
        width: 200px;
        /* background-color: white; */
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        /* background-color: red; */
        right: 50px;
    }

    i {
        margin-right: 8px;
    }

    .idcard {
        height: 40%;
        width: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .title {
        margin-top: 15px;
    }

    .header-link {
        color: blue;
        /* color: red; */

    }

    #header a:hover {
        /* text-decoration: none; */
        color: gray;
    }

    /* dropdown css */
    .header-dropdown {
        position: relative;
        z-index: 999;
    }

    .header-dropdown ul {

        background-color: white;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .header-dropdown li {
        display: inline-block;

    }

    .header-dropdown li a {
        display: block;
        text-decoration: none;
    }

    /* Style the dropdown menu */
    .header-dropdown ul ul {
        position: absolute;
        top: 100%;
        display: none;
    }

    .header-dropdown ul ul li {
        display: block;
    }

    .header-dropdown li:hover ul {
        display: block;
    }

    .header-dropdown li:hover {
        background-color: rgb(50, 50, 10);
        color: white;
    }

    .d-links a:hover>i,
    .d-links a:hover>p {
        color: white;
    }
    </style>
</head>

<body>
    <header id="header" style="z-index: 20;">
        <div id="logo">
            <a href="index.php"><img src="img/foodlogo.png" alt=""></a>
        </div>
        <div id="mid">
            <a href="index.php" class="header-link">HOME</a>

            <a href="index.php#footer-section" class="header-link">CONTACT</a>
            <a href="index.php#category-bar" class="header-link">CATEGORIES</a>
            <a href="searchBypass.php#explore-section" class="header-link"><i
                    class="fa-solid fa-magnifying-glass"></i></a>


        </div>
        <!-- <div class="searchbar">
                <input type="search" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->

        <?php
                    echo"<div id='right'>";
                    // $asda = $_SESSION['uname'];12

                    if(isset($_SESSION['login'])&&$_SESSION['login']==true){
                                        $user_id=$_SESSION['userid'];     
                        echo "<div class='idcard'><a href='cart.php' class='header-link'>";
                        echo "<i class='fa-solid fa-cart-shopping'>";
                        echo "</i><p class='title'>Cart</p></a><div>";
                        
                        //dropdown section
                        echo"
                        <nav class='header-dropdown'>
                    <ul>
                        <li>
                            <div class='idcard' style='background:white;'><a class='header-link'>
                                <i class='fa-solid fa-user'></i>
                                <p class='title'>".$_SESSION['uname']."</p></a></div>
                            <ul >
                                <li><div class='idcard d-links'><a href='logout.php' class='header-link'>
                                <i class='fa-solid fa-user'>
                                </i><p class='title'>Log Out</p></a></div></li>
                                
                                <li><div class='idcard d-links'><a href='userOrders.php?user_id=".$user_id."' class='header-link'>
                                <i class='fa-solid fa-clipboard-list'>
                                 </i><p class='title'>My Orders</p></a></div></li>
                            </ul>
                        </li>
                    </ul>
                </nav>";

                    }
                    else{
                        echo "<div class='idcard'><a href='login.php' class='header-link'>";
                        echo "<i class='fa-regular fa-user'></i>";
                        echo "<p class='title'>Account</p></a></div>";
                     
                    }
                    echo"</div>";
                    ?>
    </header>


</body>

</html>
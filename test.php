<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #cart-items {
        position: relative;
        border-radius: 10px;
        padding: 20px;
        height: auto;
        width: 350px;
        background-color: rgba(250, 250, 250, 1);
        outline: 1px solid rgba(220, 220, 220, 1);
        margin-bottom: 20px;
    }

    .items {
        width: 300px;
        height: 80px;
        /* background-color: blue; */
        display: flex;
        gap: 10px;
        padding: 10px;
        position: relative;
        margin: 10px;
        border: 1px solid black;
        border-radius: 9px;
    }
    </style>

</head>

<body>
    <?php
        include('db_conn.php');
        include('utility.php');
        order_mail($conn,37,'aaush22222@gmail.com');
    ?>
</body>

</html>
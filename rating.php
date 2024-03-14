<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rating</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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
    </style>
</head>

<body>
    <div class="rating-css">
        <input type="hidden" name="item_id" value="<?php  echo $item_id; ?>">
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
</body>

</html>
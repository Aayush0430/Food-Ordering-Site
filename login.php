<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login page</title>
    <style>
    #body-cover {
        position: absolute;
        /* filter: contrast(80%); */
        /* filter: blur(0.6px); */

        z-index: -1;
        background-image: url(img/back8.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
    }

    #black-cover {
        height: 100vh;
        width: 100vw;
        opacity: 0.7;
        background-color: black;
    }

    body {}

    #login_form {

        /* opacity: 0.5; */
        margin: auto;
        margin-top: 10px;
        width: 50%;
        height: 70%;
        /* border: 1px solid black; */
        border-radius: 10px;
        padding: 20px;
        font-size: 0.9rem;
    }

    button {
        margin-left: 40%;
    }

    .not-registered p {
        margin: 10px;

        font-size: 0.8rem;
        font-weight: 600;
        text-align: center;
    }

    .not-registered {
        display: flex;
        justify-content: center;
    }

    .not-registered a {
        /* text-decoration: ; */
        margin-top: 10px;

        color: lightgray;
        font-size: small;
    }

    .form-control {
        font-size: 0.8rem;
    }

    .btn {
        padding: 5px 20px;
        border-radius: 15px;
        color: white;
        transition: all 0.4s ease;
    }

    .btn:hover {
        transform: scale(1.1);
    }
    </style>
</head>

<body>
    <div id="body-cover">
        <div id="black-cover"></div>
    </div>
    <?php
    include("header.php");
    ?>
    <?php
    if(isset($_GET["status"])){
        $status=$_GET["status"];
        if($status== "notmatch"){
            echo'
            <div id="unmatch" class="alert alert-warning alert-dismissible fade show"style="text-align:center;width:100vw;position:absolute;" role="alert">
            Credentials didn\'t match!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ';
        }
    }
    ?>
    <?php
    if(isset($_GET["status"])){
        $status=$_GET["status"];
        if($status== "notexist"){
            echo'
            <div id="unmatch" class="alert alert-warning alert-dismissible fade show"style="text-align:center;width:100vw;position:absolute;" role="alert">
            User doesn\'t exist!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ';
        }
    }
    ?>
    <div id="login_form">
        <center>
            <h2 style="color:white;">Login Page</h2>
        </center>
        <form action="logincheck.php" autocomplete="off" method="POST" class="container "
            style="width:500px;margin-top:30px;border:1px solid white;color:white;font-size:1rem;padding:40px;border-radius:15px;background:rgba(0, 0, 0, 0.3);">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Username</label>
                <input style="background:none;color:white;border-radius:15px;" type="text" class="form-control"
                    id="username" name="username" placeholder="Username" required>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Enter Password</label>
                <input style="background:none;color:white;border-radius:15px;" type="password" class="form-control"
                    id="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="not-registered">
                <p>Not registered! </p><a href="signup.php">Signup now</a>
            </div>
        </form>
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
    const alertdiv = document.getElementById("unmatch");
    window.addEventListener("load", () => {
        setTimeout(() => {
            alertdiv.style.display = "none";
            // alertdiv.style.opacity = "0";
        }, 2000)

    })
    </script>a
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .header-dropdown {
        background-color: #333;
        position: relative;
        z-index: 999;
    }

    .header-dropdown ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background: black;
    }

    .header-dropdown li {
        display: inline-block;
    }

    .header-dropdown li a {
        color: white;
        display: block;
        padding: 10px 20px;
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

    /* Change the background color of dropdown links on hover */
    .header-dropdown ul ul li a:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Dropdown</a>
                <ul>
                    <li><a href="#">Option 1</a></li>
                    <li><a href="#">Option 2</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

</body>

</html>
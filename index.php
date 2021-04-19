<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="./css/main.css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="Place for your Title Picture" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>George Hollywood | Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/main.css">

</head>
<body>

<!-- De Navbar -->
<?php include("./basics/navbar.php"); ?>  

<div class="row" id="content">
            <div class="col-12">
                <?php
                if (isset($_GET["content"])) {
                    include("./" . $_GET["content"] . ".php");
                } else {
                    include("./content/home.php");
                }
                ?>
               
            </div>
        </div>




<script src="./js/main.js"></script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" type="image/x-icon" href="Place for your Title Picture" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/main.css">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="./css/navbar.css">
    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>

<!-- De Navbar -->
<?php
include("./basics/navbar.php");
?>


<div class="row" id="content">
            <div class="col-12">
                <?php
                if (isset($_GET["content"])) {
                    include("./" . $_GET["content"] . ".php");
                } else {
                    include("./home.php");
                }
                ?>
                
               
            </div>
        </div>




<script src="./js/main.js"></script>


</body>
</html>

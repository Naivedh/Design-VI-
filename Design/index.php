<!DOCTYPE html>


<?php 
session_start();
    if(isset($_SESSION['user_name']))
    {
     $user_name = $_SESSION['user_name'];
    }
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner</title>


    <style>
        .image img {
            width: 200px; 
            height: auto;
            padding: 10px;
            margin: 10px;
        }
    </style>

</head>

<body>
    <?php include ("nav.php") ?>
    <div class="image">
        <img src="img/travel.png" alt="travel">
    </div>
    <div class="main-center">
        <br>
        <button type="button" class="btn  btn-lg"> 
            <a href="
            <?php if (isset($user_name)){
                    echo 'Inbuilt_package.php';
                    }
                  else{
                    echo 'sign_in.php'; }?>"
            style="color: black;">
            InBuiltPackages
            </a>
        </button>
        <button type="button" class="btn  btn-lg"> 
        <a href="
        <?php   if (isset($user_name)){
                    echo 'create_package.php';
                    }
                else{
                    echo 'sign_in.php'; 
                    }
                    ?>"
            style="color: black;">
            Create Package
        </a>
        </button>
    </div>

</body>

</html>
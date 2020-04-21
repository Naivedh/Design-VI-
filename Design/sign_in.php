<!DOCTYPE html>


<?php

session_start();

unset ($_SESSION['user_name']);

unset ($_SESSION['user_pass']);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'travel');

$name = $_POST['user_name'];
$pass = $_POST['user_pass'];
$_SESSION['flash'] = 'Welcome '. $name;

$s = "select * from  user where user_name ='$name' and user_password= '$pass'";
$msg = " ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    $msg =  "";

    $_SESSION['user_name'] = $name;
    $_SESSION['user_password'] = $pass;
   

    header("location:index.php");

}
else {

    $msg = "Username or Password is incorrect";
}
}
?>




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>
    

    <link rel="stylesheet" href="css/login.css">

</head>

<body>
<?php include ("nav.php") ?>
<div class="login">
        <form action="sign_in.php" method="POST">
            <div><?php 
                if(isset($_SESSION['signup_msg']))
                {
                    $msg = $_SESSION['signup_msg'];
                    unset ($_SESSION['signup_msg']);       
                }
            ?></div>
            <h1>Sign In</h1>
            <div class="loginbox">
                <input type="text" placeholder="Enter Your Username" name="user_name" id="user_name"><br>
                <input type="password" placeholder="Enter Your Password" name="user_pass" id="user_pass"><br>
                <input type="submit" name="submit" id="submit" value="Submit">
                <?php
                   if (isset ($msg))
                    echo "<br> <h6 style='color:#eb3528 ;'>".$msg;
                    echo "</h6>";
                ?>
            </div>
        </form>
    </div>
</body>
</html>
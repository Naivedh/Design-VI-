<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
{
include ("connect.php");

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_pass'];

$s = "select * from  user where user_name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
     $msg =  "Username already taken";

}
else {
    $reg = "insert into user(user_name, user_email, user_password) values ('$name', '$email', '$password')";
    mysqli_query($con, $reg);
    $msg="Sign Up Succesful";
    $_SESSION['signup_msg'] = $msg    ;
    header("location: sign_in.php");
    
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css">

</head>

<body>
<?php include ("nav.php") ?>

<div class="registration">
        <form action="sign_up.php" method="POST">
            <h1>Sign Up</h1>
            <div class="registrationbox">
                <input type="text" placeholder="Enter Your Username" name="user_name" id="user_name"><br>
                <input type="text" placeholder="Enter Your Email" name="user_email" id="user_email"><br>
                <input type="password" placeholder="Enter Your Password" name="user_pass" id="user_pass"><br>
                <input type="submit" name="submit" id="submit" value="Submit">
                <?php
                   if (isset ($msg))
                    echo "<br><h6 style='color:#eb3528 ;'>".$msg;
                    echo "</h6>";
                ?>
            </div>
        </form>
    </div>
</body>
</html>
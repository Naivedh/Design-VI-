<?php
        session_start();
        $_SESSION['flash'] = ' Post Updated';
        if(isset($_SESSION['user_name']))
        {
            $user_name = $_SESSION['user_name'];
       
       include ("connect.php");
        $s = "select * from user where user_name = '$user_name' ";
        $result = mysqli_query($con, $s);
      
         

if($_SERVER["REQUEST_METHOD"] == "POST")
{

include ("connect.php");


$email = $_POST['user_email'];
$pass = $_POST['user_pass'];

    $reg = "UPDATE user SET user_email = '$email', user_password='$pass' WHERE user_name = '$user_name';";
    mysqli_query($con, $reg);
    $msg="Profile Updated";
    header("location: index.php");
    
}
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    
</head>
<body>
<?php include("nav.php")
?>

<form action="" method="POST" style="width:70%; margin: 10px auto; ">
 <?php  
        if (mysqli_num_rows($result) > 0) {
          $i=0;
        while($row = mysqli_fetch_array($result)) {
 
        ?>
  <div class="form-group"> 
    <label for="user_email"><h5>Email</h5></label>
    <input type="text" class="form-control" id="user_email" name="user_email"  value="<?php echo $row['user_email']?>">
  </div>


  <div class="form-group">
    <label for="user_pass"><h5>Password</h5></label>
    <input type="text" class="form-control" id="user_pass" name="user_pass" value="<?php echo $row['user_password']?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
<?php
        }
      }

 }
else {
header('sign_in.php');
}
?>
</form>

</body>
</html>
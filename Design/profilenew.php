<?php
        session_start();
        $_SESSION['flash'] = ' Post Updated';
        if(isset($_SESSION['user_name']))
        {
          $user_name = $_SESSION['user_name'];
          include ("connect.php");
          // $s = "select * from create_package where user_name = '$user_name' ";
          // $result = mysqli_query($con, $s);

          //  while($row = mysqli_fetch_array($result)) {
          //   $newvar = unserialize($row['places']); 
          // }
          // echo print_r($newvar);
          

          $s = "select * from inbuilt where user_name = '$user_name' ";
          $result = mysqli_query($con, $s);
          $json_string = file_get_contents('create.json');
          $data = json_decode($json_string);
          
            
        
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
<style>
.x  {
  text-align: center;
}
.card {
  margin: 0 20% 0 25% ;
  text-align: left;
}
@media only screen and (max-width: 600px) {
  .card {
    margin: 0;
  }
}
.card-body {
  margin-left:0 !important;
}
</style>    
</head>
<body>
<?php include("nav.php")?>
  <div class="container-fluid x">
      <div class="row">
        <div class="col-md-12 ">
          <h2>Pre-defined Booked Packages</h2>
                <?php  
                while($row = mysqli_fetch_array($result)) {
                foreach($data as $p)
                {   
                    if($row['package'] === $p->place_name){ 
                      ?>
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $p->place_name ?></h5>
                          <p class="card-text"><?php echo $p->place_description; ?></p>
                    
                        </div>
                      </div>
                      <?php
                        
                        // foreach($p->place as $sites){
                        //     foreach($sites as $site){
                        //       echo $site 
                        // } 
                        // }
                  }
                }
              }?>

      
              <br>
        </div>
        
      </div>
      <hr>
      <div class="row">
        <div class=" col-12">
          <h2>Your Packages</h2>

        </div>
      </div>
  </div>
  <?php
    
  }
?>
</body>
</html>
<!DOCTYPE html>
<?php
        session_start();
        if(isset($_SESSION['user_name']))
        {
            $user_name = $_SESSION['user_name'];
            
            $json_string = file_get_contents('create.json');
            $data = json_decode($json_string);

           
            
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatePackage</title>

     <style>
        .active-cyan-4 input[type=text]:focus:not([readonly]) {
            border: 1px solid #4dd0e1;
            box-shadow: 0 0 0 1px #4dd0e1;
            
        }
        .active-cyan-4 {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            margin-top: 65px;
            display:flex;
           
        }
    .pt-3-half {
        padding-top: 1.4rem;
    }
    .table-down {
        margin-left: -18.2px;
    }
    .table-down, .table-up {
        font-size:25px;
    }
    .list-left li, .list-right li {
    cursor: pointer;
    }
    .form1 {
        text-align:center;
        background-color: rgb(170, 169, 169);
        width:500px;
        text-align: left;
        padding:10px;
        margin-top:0px;
        min-height:380px;
        
    }
 

    /* The container */
.container-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.container-checkbox .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-checkbox input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.container-checkbox .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.i img{
    width:500px;
    height:250px;
}
.i {
    margin: 10px 0;
    text-align:center;
}
@media only screen and (max-width: 600px) {
 .i img{
    width:300px;
    height:250px;
}
}
.col-sm-6 {
    margin: 10px 0;
}
.col-sm-6 h3 {
    text-align:center;
}

    </style> 
    
</head>

<body>
<?php include ("nav.php") ?>

<form action="" method="POST">
    <div>
        <div class="active-cyan-4 col-md-12"> <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="place"> <button type="submit" class="btn btn-primary" style="margin: 0 5px ;">Search</button>
        </div>
    </div>
</form>

  <?php   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {       
            $place = $_POST["place"];
  
    
    foreach($data as $p)
    {   
        if($place === $p->place_name){ 
            
  ?>
<h2 style="text-align:center"><?php echo $p->place_name;?></h2>
<div class=" container-fluid row">
      <div class="col-12 col-sm-6 align-items-center " >
        <h6 class=" m-4" style="line-height: 1.7rem; min-height:500px;">
        <?php
            echo $p->place_description;
        ?>
        </h6>
  </div>
  <div class="col-12 col-sm-6">

   <div class="form1">
       
    <form action="create_book.php" method="POST">
        <div class="form-check" style="padding:40px; font-size:20px; ">
            <?php 
            foreach($p->place as $sites){
                foreach($sites as $site){
                ?>
            <label class="container-checkbox">
            <input class="form-check-input" id="confirm" type="checkbox" value="<?php echo $site ?>" name="formplace[]">
                <?php
                    echo $site;
                ?>
            <br>
             <span class="checkmark"></span>
            </label>
            <?php } }?>
            <button type="submit" id="submit" class="btn btn-primary" style="margin: 5px ;">BOOK</button>   
        </div>
        
    </form>
    </div> 
  </div>
</div>


<?php
        }//if
    
    }//for
    }//postback
    else {?>
        <div class="container">
            <h2>Choose from Best Places:</h2><br>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Andaman Tour Package</h3>
                    <div class="i">
                        <img src="img/Andaman.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3>Shillong Guwahati Package</h3>
                    <div class="i">
                        <img src="img/shilong.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Mauritius Tour Package</h3>
                    <div class="i">
                        <img src="img/mauritius.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3>Goa Package</h3>
                    <div class="i">
                        <img src="img/Goa.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Adventurous Kasol Package</h3>
                    <div class="i">
                        <img src="img/kasol.jfif" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3>Himachal Family Package</h3>
                    <div class="i">
                        <img src="img/himachal.jpg" alt="">
                    </div>  
                </div>
            </div>
        </div>
        
        <?php
    }
 }//if-else

else {
header('sign_in.php');
}
?>

</body>
<script src="custom.js"></script>
<!-- <script>
    $('#submit').click(function () {
    if (!$('#confirm').is(':checked')) {
        alert('Please Select Places you want to Visit');
        return false;
    }
});
</script> -->
</html>
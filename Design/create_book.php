<!DOCTYPE html>
<?php
        session_start();
        
        if(isset($_SESSION['user_name']))
        {
            $user_name = $_SESSION['user_name'];
        

         if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if(isset($_POST['formplace'])){
                $aplace = $_POST['formplace']; 
                //store in session
                $_SESSION['place'] = $aplace;       
                
                $N = count($aplace);
            }

           

         }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookPackage</title>

<style>
    .container {
        margin-top: 3rem ;
    }
</style>
</head>

<body>
<?php include ("nav.php") ?>

<!-- ASK FOR WHATEVER DATA WE NEED NO OF PEOPLE DAY(DYNAMIC) VIA PLANE TRAIN SHOW TOTAL AMOUNT DYNAMICALLY AND BOOK  -->

<div class="container">
    <form action="create_final.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="number">Number of Members</label>
                <input type="number" class="form-control" id="number"  name="number" value="0" min="0" max="10" step="1" style="width:200px"/>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" name="inputState">
                    <option selected>Choose...</option>
                    <option>xyz</option>
                    <option>Gujarat</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="inputZip">
            </div>
        </div>

      
        <button type="submit" class="btn btn-primary">BOOK</button>
    </form>
</div>

 
</body>
<?php
 }
else {
header('sign_in.php');
}
?>
</html>
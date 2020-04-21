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
    <title>InBuiltPackages</title>
    
    <style>
        *:focus {
            outline: 0 !important;
        }
    body{
        overflow-x:hidden;
        
    }
    button, input[type="submit"], input[type="reset"] {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;

    }
    ..btn-primary.focus, .btn-primary:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{
     box-shadow: none;
    }
    @media (min-width: 576px){
       .modal-dialog {
        max-width: 800px !important;
    }
    }
    .modal-dialog{
        margin-top: 100px !important;
    }
    .modal-body {
        max-height: 300px;
        overflow-y: auto;
    }

    .table th {
        border-bottom: 1px solid #dee2e6;
    }
    .cardx {
        max-width: 100% !important;
    }
    #main-content {
        margin-top:20px;
        margin-left:150px;
    }
    @media (max-width: 576px){
        #main-content {
        margin-top:50px;
        margin-left:0px;
        width:100%;
    }
    }
    .size {
        width: 50px;
    }
    
    </style>
    
</head>

<body>
<?php include ("nav.php") ?>

    <div class="row" id="main-content">
    
    </div>
    
<script src="inbuilt.js"></script> 
</body>
</html>
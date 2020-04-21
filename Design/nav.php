    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
       
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        
        crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>

    <!-- custom -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!-- custom over -->
    
<nav class="navbar navbar-expand-md " style="background-color:#2E4057; " >
        <a class="navbar-brand" href="index.php">Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color: #000000; font-size:xx-large;">&#9776</span>
        </button>
        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarNav">
            <ul class="navbar-nav ml-auto" >
                <?php
                 if (!isset($user_name))
                    { 
                        echo'<li class="nav-item">
                        <a class="nav-link"  href="sign_up.php" style= "padding:0 20px ;" >
                        Sign-Up
                        </a></li>';
                    }
                    else 
                    {
                        echo'<li class="nav-item">
                        <a class="nav-link"  href="profile.php" style= "padding:0 20px ;">
                        Profile
                        </a></li>';
                    }
                ?>
                
                <li class="nav-item">
                    <a class="nav-link" href="sign_in.php" style= "padding:0 20px;">

                         <?php 
                        if (isset($user_name))
                            echo "Sign-Out";
                        else
                            echo "Sign-In";
                        
                        ?>

                    </a>
                </li>

            </ul>
        </div>
    </nav>
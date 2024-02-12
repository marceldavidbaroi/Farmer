<?php
 $login = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include "partials/_dbconnect.php";
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    
    
    
        $sql = "Select * from users where phone='$phone' AND password ='$password' ";

         $result = mysqli_query($conn, $sql);

         $num=mysqli_num_rows($result);
         if($num==1){
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['phone']=$phone;
            header("location: welcome.php");

         }else{
            $showError=true;
         }
         
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">

    <style>
       
        .container{
            background-image: url('image/log.jpg');
            color:white;
            padding:20px;
            margin:10px
        }
    </style>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
        if($login){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yau are loged in!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid credentials!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

        }
    ?>

    <div class="container">
        <h1 class="text-center">Log in</h1>
        <form action="/Farmer/login.php" method="POST">
           
            

            <div class="mb-3 ">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <div class="mb-3 ">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            
            
            <button type="submit" class="btn btn-success">LOG IN</button>
        </form>
    </div>


  
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
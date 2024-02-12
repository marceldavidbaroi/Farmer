<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include "partials/_dbconnect.php";
    $username = $_POST["username"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    
    //$exist=false;

    //check if the phone number is exist
    $existSql="SELECT * FROM `users` WHERE phone='$phone'";
    $result=mysqli_query($conn, $existSql);
    $numberExistRows= mysqli_num_rows($result);
    
    if($numberExistRows>0){
        $exist=true;
    }else{
        $exist=false;
    }

    if(($password == $cpassword) && $exist==false){
        $sql = "INSERT INTO `users` (`username`, `address`, `phone`, `password`, `dt`) 
        VALUES ('$username', '$address', '$phone', '$password', current_timestamp());";

         $result = mysqli_query($conn, $sql);
         if($result){
            $showAlert = true;
         }
         
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
    <title>Sign in</title>
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
  <body >
    <?php require 'partials/_nav2.php'?>
    <?php
        if($showAlert){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Signin successful!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password not same or phone number already exist!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

        }
    ?>  

    <div class="container">
        <h1 class="text-center">Sign Up with Us</h1>
        <form action="/Farmer/signup.php" method="POST">
            <div class="mb-3 ">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" id="username" name="username" >
                
            </div>
            <div class="mb-3 ">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

            <div class="mb-3 ">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <div class="mb-3 ">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3 ">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="cpasswordHelp" class="form-text">Make sure type the same password.</div>
            </div>
            
            <button type="submit" class="btn btn-success" onclick = "window.location.href='login.php';">Submit</button>
        </form>
    </div>


  
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
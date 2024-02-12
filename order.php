<?php
 session_start();
 if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
    header("location: login.php");
    exit;
 }

?>
<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include "partials/_dbconnect.php";
    $brand = $_POST["brand"];
    $item = $_POST["item"];
    $quantity = $_POST["quantity"];
    
    
    $phone = $_SESSION['phone'];
    // $password = $_POST["password"];
    // $cpassword = $_POST["cpassword"];
    
    
    //$exist=false;

    //check if the phone number is exist
    // $existSql="SELECT * FROM `users` WHERE phone='$phone'";
    // $result=mysqli_query($conn, $existSql);
    // $numberExistRows= mysqli_num_rows($result);
    
    // if($numberExistRows>0){
    //     $exist=true;
    // }else{
    //     $exist=false;
    // }

    
        $sql = "INSERT INTO `order` (`phone`,`brand`, `item`, `quantity`) 
        VALUES ('$phone', '$brand', '$item', '$quantity');";

         $result = mysqli_query($conn, $sql);
         if($result){
            $showAlert = true;
         }
         
    
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">

    <style>
       
       .container{
           background-image: url('image/fertilizer.jpg');
           color:white;
           padding:20px;
           margin:10px
       }
   </style>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
        if($showAlert){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Order successful!</strong>
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
        <h1 class="text-center">Order Now</h1>
        <form action="/Farmer/order.php" method="POST">
            <div class="mb-3 ">
                <label for="Brand" class="form-label">Brand name</label>
                <select class="form-select" aria-label="Default select example" name="brand">
                    <option selected>Open this select menu</option>
                    <option value="Syngenta">Syngenta</option>
                    <!-- <option value="2">Two</option>
                    <option value="3">Three</option> -->
                </select>
                <!-- <input type="text" class="form-control" id="username" name="username" > -->
                
                
            </div>
            
            <div class="mb-3 ">
                <label for="item" class="form-label">Item name</label>
                <select class="form-select" aria-label="Default select example" name="item">
                    <option selected>Open this select menu</option>
                    <option value="থিয়োভিট">থিয়োভিট</option>
                    <option value="স্কোর">স্কোর</option>
                    <option value="ভলিয়াম ফ্লেক্সি">ভলিয়াম ফ্লেক্সি</option>
                    <option value="সবিক্রন">সবিক্রন</option>
                </select>
                <!-- <input type="text" class="form-control" id="username" name="username" > -->
                
                
            </div>
            <div class="mb-3 ">
                <label for="address" class="form-label">Quantity</label>
                <select class="form-select" aria-label="Default select example" name="quantity">
                    <option selected>Open this select menu</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                </select>
                <!-- <input type="text" class="form-control" id="address" name="address"> -->
            </div>

           
            <button type="submit" class="btn btn-success">Order Now</button>
        </form>
    </div>


  
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
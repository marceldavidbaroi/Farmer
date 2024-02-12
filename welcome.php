<?php
 session_start();
 if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
    header("location: login.php");
    exit;
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - <?php $_SESSION['phone']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">

    <style>
      .container_dashboard{
        padding: 20px;
        width:100vw;
        display: flex;
        
      }
    </style>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    
    <div class="container2 my-3">
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo  $_SESSION['phone']?></h4>
      </div>
    </div>

    <div class="container_dashboard">
      <div class="dashboard">
        <h1>Brands available</h1>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
              <a href="#syngenta"><img class="card-img-top" src="image/syngenta.png" alt="Card image cap"></a>
            </div>
          </div>
          <!-- <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
              <a href=""><img class="card-img-top" src="image/syngenta.png" alt="Card image cap"></a>
            </div>
          </div> -->


        </div>
        <br><br>
       
        
        <div class="syngenta">
            <div class="row">`
              <h2>Syngenta</h2>
              <div class="col-sm-3">
                <div class="card" >
                <img class="card-img-top" src="image/থিয়োভিট.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">থিয়োভিট</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="https://www.syngenta.com.bd/sites/g/files/kgtney411/files/media/document/2016/07/05/thiovit.pdf" class="btn btn-primary">More</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="card" >
                <img class="card-img-top" src="image/স্কোর.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">স্কোর</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="https://www.syngenta.com.bd/sites/g/files/kgtney411/files/media/document/2017/11/20/score.pdf" class="btn btn-primary">More</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" >
                <img class="card-img-top" src="image/ভলিয়াম ফ্লেক্সি.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">ভলিয়াম ফ্লেক্সি</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="https://www.syngenta.com.bd/sites/g/files/kgtney411/files/media/document/2017/11/20/vf301.pdf" class="btn btn-primary">More</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" >
                <img class="card-img-top" src="image/সবিক্রন.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">সবিক্রন</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">More</a>
                  </div>
                </div>
              </div>
              

            </div>  



        </div>

          
      </div>   
    </div>
    


  
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
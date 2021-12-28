<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <div class= "bg-secondary" style="height:1000px">
        <?php include 'partials/_navHome.php'?>
        <h1 class="text-center text-black" style="padding:10px">YOUR-POST</h1>
        <div class="form-group  bg-secondary border border-secondary rounded-1  text-white text-center" style="padding:20px">
        <h3>WELCOME : <?php echo $_SESSION['username']?><br></h3>
        </div>
        
        <div class="form-group  bg-info border border-info rounded-pill text-white text-center " style="padding:50px">
        <h5 class="form-group bg-dark border border-info rounded-pill text-white text-center"style="padding:5px"><?php echo $_SESSION['title'] ?></h5><br>
        <h4><?php echo $_SESSION['message'] ?></h4>
        </div>
        
        <div class="form-group  bg-info border border-info rounded-pill text-white text-center " style="padding:50px">
        <h4><ol><li><?php echo $_SESSION['todo'] ?></li></ol></h4>
        </div>
        
        
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

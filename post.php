<?php
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $message = $_POST['message'];
    $title = $_POST['title'];
    $exists=false;
    if(($message == $message) && $exists==false){
        $sql="INSERT INTO `post` ( `title`, `message`) VALUES ('$title', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("location: home.php");
          
        }
    
    }
    else{
        $showError = "error";
    }
}
      
?>
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $message = $_POST['message'];
    $title =$_POST['title'];
    
     
    $sql = "Select * from post where message = '$message'AND title ='$title'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        session_start();
        $login= true;
        $_SESSION['loggedin'] = true;
        $_SESSION['message'] = $message;
        $_SESSION['title'] = $title;
        header("location: home.php");
       
        
        

    } 
    else{
        $showError = "Invalid Credentials";
    }
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

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php include 'partials/_navHome.php'?>

    <div class="container my-4">
     <h1 class="text-center">CREATE BLOG</h1>
     <form action="/assigmentLog/post.php" method="post">
        <div class="form-group " >
            <input type="text" class="form-control  border border-10 border border-primary bg-muted rounded-pill col-md-10" placeholder="TITLE..." style="padding:20px" id="title" name="title" aria-describedby="emailHelp">
        </div>
        <div class="form-group " >
            <label for="message" class="form-text text-primary col-md">write your message:</label>
            <input type="text" class="form-control  border border-10 border border-primary bg-muted rounded-pill col-md-10" placeholder="CONTENT..." style="padding:40px" id="message" name="message" aria-describedby="emailHelp">
        </div>
        <div class="btn-group btn-group-lg  bg-primary border border-primary rounded-pill col-md-2">
            <button type="submit" class="btn btn-primary">ADD-BLOG</button>
        </div>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

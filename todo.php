<?php
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $todo = $_POST['todo'];
    $exists=false;
    if(($todo == $todo) && $exists==false){
        $sql= "INSERT INTO `todo` (`todo`) VALUES ('$todo')";
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
    $message = $_POST['todo'];
    
     
    $sql = "Select * from todo where todo = '$todo'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        session_start();
        $login= true;
        $_SESSION['loggedin'] = true;
        $_SESSION['todo'] = $todo;
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

    <title>TODO</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php include 'partials/_navHome.php'?>

    <div class="container my-4">
     <h1 class="text-center">TO-DO-LIST</h1>
    <form action="/assigmentLog/todo.php" method="post">
        <div class="form-group " >
            <label for="todo" class="form-text text-dark col-md">ADD YOUR TO-DO:</label>
            <input type="text" class="form-control  border border-10 border border-danger rounded-lg col-md-10" style="padding:30px" id="todo" name="todo" aria-describedby="emailHelp">
        </div>
        <div class="btn-group btn-group-lg  bg-danger border border-danger rounded-lg col-md-2">
            <button type="submit" class="btn btn-danger">ADD</button>
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

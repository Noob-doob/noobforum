<?php
session_start();
if( !isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
{
    header("location: /imanage/partial/_login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
<?php
include_once 'partial/_navbar.php';
include_once 'partial/_caraousal.php';

?>

<!--category card-->
<div class="container my-3">
    <h4>Categories Blog</h4>
    <div class="row">
        <?php
        require 'partial/_server.php';
        $sql="SElect * from `categories`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)) {

            echo ' <div class=\"col-md-4\">
         <div class=\"card\" style=\"width: 18rem;\">
             <img src=\"https://source.unsplash.com/500x400/?'.$row['cat_name'].',coding\" class=\"card-img-top\" alt=\"...\">
             <div class=\"card-body\">
                 <h5 class=\"card-title\">'.$row['cat_name'].'</h5>
                 <p class=\"card-text\">'.substr($row['cat_desc'],0,70) .'....</p>
                 <a href=threads.php\?threadsid='.$row['cat_id'].' class=\"btn btn-primary\">View threads</a>
             </div>
         </div>

     </div>';
        }
?>
    </div>
</div>

<!--this is the end-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: cornflowerblue;
        color: white;
        text-align: center;
    }
</style>

<div class="footer">
    <p>All rights reserved by me.I am nobody but i am everybody.</p>
</div>
</html>
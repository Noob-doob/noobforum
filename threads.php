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
include_once 'partial/_server.php';
?>


<div class="container my-3">
    <h4>Discussion </h4>
    <div class="row">
        <?php
        $id=$_GET['threadsid'];
        require 'partial/_server.php';
        $sql="SElect * from `categories` where cat_id='$id'";
        $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);

            echo '<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">'.$row['cat_name'].'</h1>
        <p class="lead">'.$row['cat_desc'].'</p>
        <hr class="my-4">
        <p> Donot use hate comment .Enjoy</p>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add a new question
</button>Learn more</a>
    </div>
</div>';

        ?>
    </div>
</div>
<!--Add Question-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/imanage/partial/_savequestion.php" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Your Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
<!--             form start here-->

                    <div class="form-group">
                        <label for="thread_title">Question Title</label>
                        <input type="text" class="form-control" name="question_title" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Use less word and say more</small>
                    </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Describe Your Question or Problem</label>
                    <textarea class="form-control" name="question_desc" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>





<!--                form end here-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit"  name="sid" value="<?php echo $id?>"> Save</button>
            </div>
        </div>
        </form>
    </div>
</div>


















<!--Add Question-->









<div class="container">
    <h4><b>Discussion</b></h4>
    <?php
    $id=$_GET['threadsid'];
    require 'partial/_server.php';
    $sql="SELECT * FROM `thread_list` where thread_cat_id='$id'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
echo ' <div class="media">
        <img src="/imanage/img/demo_people.jpg" width="54px" class="mr-3" alt="...">
        <div class="media-body">
            <h3><b><a href="/imanage/thread_discussion.php?thread_num='.$row['thread_id'].'">'.$row['thread_name'].'</a></b></h3>
            <p>'.$row['thread_desc'].'</p>

        </div>
    </div>';
    }

    ?>

</div>








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


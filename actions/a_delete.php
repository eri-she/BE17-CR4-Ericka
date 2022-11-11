<?php
require_once "db_connect.php";
if ($_POST) {
   $id=$_POST['id'];
   $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];
    ($picture =="product.png")?: unlink("../pictures/$picture");

    $sql = "DELETE FROM books WHERE id = $id";
    if (mysqli_query($conn, $sql) === TRUE) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>" . $connect->error;
    }
   
} else {
    header("location: ../error.php");
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
        <?php require_once '../components/bootstrap.php'?>  
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Delete request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?=$message;?></p>
                <a href='../index.php'><button class="btn btn-outline-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>

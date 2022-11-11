<?php 
require_once 'actions/db_connect.php';
if($_GET["id"]){
    $id = $_GET["id"];
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)==1) {
        $data = mysqli_fetch_assoc($result);
        // $data[this is the name of your column in your database]
        $title = $data['title'];
        $author = $data['author'];
        $publisher = $data['publisher'];
        $isbn = $data['isbn'];
        $picture = $data['image'];
    } else {
        header("location: error.php");
    }
   
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "components/bootstrap.php"?>
</head>
<body>
    
    <div class="alert alert-danger container text-center mt-5" role="alert">
  <h3 class="mb-4">Are you sure you want to delete this record?</h3>

     <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>" />
                <input type="hidden" name="picture" value="<?= $picture ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
</div>
</body>
</html>
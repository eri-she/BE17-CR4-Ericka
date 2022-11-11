<?php
require_once "db_connect.php";
require_once "file_upload.php";
if($_POST){
    $id=$_POST['id'];
   $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];
    $picture = file_upload($_FILES['picture']);
    $uploadError = ''; 
    // if a new picture was uploaded php returns 0
    if($picture->error===0){
        // unlink is to delete previous file
        ($_POST["picture"]=="books.png")?: unlink("../pictures/$_POST[picture]");
  $sql = "UPDATE books SET title = '$title', author = '$author', publisher= '$publisher', title = '$title', isbn = '$isbn', image = '$picture->fileName' WHERE id = $id";
} else {
     $sql = "UPDATE books SET title = '$title', author = '$author', publisher= '$publisher', title = '$title', isbn = '$isbn' WHERE id = $id";
}
if (mysqli_query($conn, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
}
// end of the first conditional part.
else {
    header("location: ../error.php");
};
?>
!
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/bootstrap.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?= $class;?>" role="alert">
                <p><?=$message?></p>
                <p><?=$uploadError?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>

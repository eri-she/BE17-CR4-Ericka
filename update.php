<?php 
require_once 'actions/db_connect.php';
if($_GET["id"]){
    $id = $_GET["id"];
    $sql = "SELECT * FROM books WHERE id = {$id}";
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
        <style>
            img{
                display:block;
                margin:0 auto;
            }
        </style>
</head>
<body>
     <div class="text-center bg-light pt-4 pb-4 mb-5"><h1 class="title text-secondary">Update</h1></div>
     <img class="rounded-circle shadow mb-3"src="pictures/<?=$picture?>">
     <form action="actions/a_update.php" method= "post" enctype="multipart/form-data">
                <table class='table container'>
                    <tr>
                        <th>Book <Title></Title></th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Book Title" value="<?=$title?> "/></td>
                    </tr>    
                    <tr>
                        <th>Author</th>
                        <td><input class='form-control' type="text" name= "author" placeholder="Author" step="any" value="<?=$author?>" /></td>
                    </tr>
                     <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name= "publisher" placeholder="Publisher" step="any" value="<?=$publisher?>" /></td>
                    </tr>
                     <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name= "isbn" placeholder="ex 123-249..." step="any" value="<?=$isbn?>"/></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <!-- pass hidden values id and picture -->
                        <input type= "hidden" name= "id" value= "<?=$id?>" />
                        <input type= "hidden" name= "picture" value= "<?=$picture?>" />
                        <td><button class='btn btn-outline-primary ' type="submit">Update</button></td>
                        <td><a href="index.php"><button class='btn btn-outline-success' type="button">Go Back</button></a></td>
                    </tr>
                </table>
            </form>
</body>
</html>
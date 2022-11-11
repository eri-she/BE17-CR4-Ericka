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
        <div class="text-center bg-light pt-4 pb-4 mb-5"><h1 class="title text-secondary">Add a New Book 📘</h1></div>
    <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table container'>
                    <tr>
                        <th>Book <Title></Title></th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Book Title" /></td>
                    </tr>    
                    <tr>
                        <th>Author</th>
                        <td><input class='form-control' type="text" name= "author" placeholder="Author" step="any" /></td>
                    </tr>
                     <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name= "publisher" placeholder="Publisher" step="any" /></td>
                    </tr>
                     <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name= "isbn" placeholder="ex 123-249..." step="any" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-outline-primary ' type="submit">Add Book</button></td>
                        <td><a href="index.php"><button class='btn btn-outline-success' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
</body>
</html>
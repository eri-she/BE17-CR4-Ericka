<?php
require_once "./actions/db_connect.php";
// We can write our query and save it in a variable, the name of our table is "books"
$sql = "SELECT * FROM books";
// this function will accept 2 arguments, the connection variable and the query.
$result = mysqli_query($conn, $sql);
// conn is the conection with the database and sql is bringing all info from table.
$tbody="";


// 0 replaces the  variable i then we have the number of objets of the array
if (0 < mysqli_num_rows($result) ) {
    while ($array = mysqli_fetch_assoc($result)) {
        
        $tbody .= "
<tr>
            
           <td>" . $array['title'] . "</td>
           <td>" . $array['author'] . "</td>
           <td>" . $array['publisher'] . "</td>
           <td>" . $array['isbn'] . "</td>
            <td><img class='img-thumbnail img-fluid' src='pictures/". $array['image'] ."' width=100px height=100px</td>
           <td><a href='update.php?id=" . $array['id'] . "'class='button'><button class='btn btn-outline-primary btn-sm' type='button'>Edit ✐</button></a>
           <a href='delete.php?id=" . $array['id'] . "'class='button'><button class='btn btn-outline-danger btn-sm mt-2' type='button'>Delete</button></a></td>
            </tr>
";
    }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "components/bootstrap.php"?>
  <style>
   .title{
letter-spacing:2px;

   }
   .btn{
   display:block;
   margin:0 auto;
   }
   .button {
    text-decoration:none;
   }
  
  </style>
</head>
<body>
    <div class="text-center bg-light pt-4 pb-4"><h1 class="title text-secondary">LIBRARY 📚</h1></div>
      <a href= "create.php" class="button"><button class='btn btn-outline-primary shadow mt-3'type="button" >Add a New Book</button></a>
    <table class="table container mt-5 text-center">
  <thead>
    <tr>
   
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">ISBN</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?=$tbody?>
     
    </tr>
 
   
  </tbody>
</table>
</body>
</html>
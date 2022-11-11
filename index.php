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
   .button{
    text-decoration:none;
   }
  </style>
</head>
<body>
    <div class="text-center bg-light pt-4 pb-4"><h1 class="title text-secondary">LIBRARY 📚</h1></div>
      <a href= "create.php" class="button"><button class='btn btn-outline-info shadow mt-3'type="button" >Add a New Book</button></a>
    <table class="table container mt-5">
  <thead>
    <tr>
   
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">ISBN</th>
      <th scope="col">IMAGE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
       <td>@mdo</td>
        <td>@mdo</td>
    </tr>
 
   
  </tbody>
</table>
</body>
</html>
<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light"> Add Student</a> 
        
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S1 no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>


    </tr>
  </thead>
  <tbody>

  <?php

  $sql="select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
   while( $row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];

    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$password.'</td>
    <td>
    <button class="btn btn-primary"><a href="UPDATE.PHP?updateid='.$id.'" class="text-light">UPDATE</a></button>
    <button class="btn btn-danger"><a href="DELETE.PHP?deleteid='.$id.'" class="text-light">DELETE</a></button>

    </td>


  </tr>';

   }
  

  }
  






?>

<td>




</td>
   
    
  </tbody>
</table>
    </div>
    
</body>
</html>
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Dental Website</title>
</head>
<body>
<div class="container">
    <button type="button" class="btn btn-info my-5" ><a href="addpatient.php" style="text-decoration:none; color:white;">Add Patient</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql ="SELECT * FROM formop";
    $result=$con->query($sql);
    each($result);


    if(!$result){
    
    die("invail query: " .$con->connect_error);
    
    }
    
    while($row=$result->fetch_assoc()){
    echo"<tr>
            <td>" .$row["id"]. "</td>
            <td> " .$row["name"]. "</td>
            <td>" .$row["email"]. " </td>
            <td>" .$row["number"]. "</td>
            <td>" .$row["date"]. "</td>
            <td> 
                <a  href='update.php?id=$row[id]'> Update/a>
                <a  href='delete.php?id=$row[id]'> delete</a>
                
    </td>  
    </tr>";
    }
    
    ?>

  </tbody>
</table>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
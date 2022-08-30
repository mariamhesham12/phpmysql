<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $date=$_POST['date'];

  $sql="insert into `formop` (name, email, number, date)
  values('$name','$email','$number','$date')";

  $result=mysqli_query($con,$sql);
   if($result){
    header('location:display.php');
   }else{
     die(mysqli_error($con));
  }
}?>

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
<section class="contact" id="contact">
    <h1 class="heading">Add patient</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <div class="form_box">
        <span class="name">Your Name :</span>    
        <input type="text" name="name" autocomplete="off" placeholder="Enter your name" class="box" required>
        <span>Your Email :</span>
        <input type="email" name="email" autocomplete="off" placeholder="Enter your email" class="box" required>
        <span>Your Number :</span>
        <input type="number" name="number" autocomplete="off" placeholder="Enter your number" class="box" required>
        <span>Appointment Date :</span>
        <input type="datetime-local" name="date" autocomplete="off" class="box">
        <input type="submit" value="Add patient" name="submit" class="link-btn" ></div>
    </form>
</section>
<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
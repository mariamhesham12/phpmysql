<?php

$servername="localhost";
$username="root";
$pass="";
$database="formoperation";

$con=new mysqli($servername,$username,$pass,$database);

$id="";
$name="";
$email="";
$number="";
$date="";

$errorMessage="";
$successMessage="";


if($_SERVER['REQUEST_METHOD']=='GET')
{
    if(!isset($_GET["id"])){

header("location:display.php");
 exit;

    }
    $id=$_GET["id"];
    $sql="SELECT * FROM formop WHERE id=$id";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();
    if(!$row){
        header("location:display.php");
        exit;
    }
$name=$row["name"];
$email=$row["email"];
$number=$row["number"];
$date=$row["date"];

}
else{
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$date=$_POST["date"];
do{
    if(empty($id)||empty($name)||empty($email)||empty($number)||empty($date)){

$errorMessage="All the fields are required";
break;

    }
    $sql ="UPDATE formop set id=$id,name='$name',email='$email',number='$number',date='$date' where id=$id ";

 $result=$con->query($sql);
 if(!$result)  {
$errorMessage="inavalid query:".$con->error;

break;

 } 
$successMessage="correct add";

header("location: display.php");
 exit;
}while(true);
}
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
<section class="contact" id="contact">
    <h1 class="heading">Update your Appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <div class="form_box">
    <input type="hidden"  name ="id" value ="<?php echo $id;?>">
        <span class="name">Your Name :</span>    
        <input type="text" name="name" autocomplete="off" placeholder="Enter your name" class="box" required>
        <span>Your Email :</span>
        <input type="email" name="email" autocomplete="off" placeholder="Enter your email" class="box" required>
        <span>Your Number :</span>
        <input type="number" name="number" autocomplete="off" placeholder="Enter your number" class="box" required>
        <span>Appointment Date :</span>
        <input type="datetime-local" name="date" autocomplete="off" class="box">
        <input type="submit" value="update appointment" name="submit" class="link-btn" ></div>
    </form>
</section>
<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
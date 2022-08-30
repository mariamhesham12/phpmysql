<?php
if(isset($_GET["id"])){

$id=$_GET["id"];
$servername="localhost";
$username="root";
$pass="";
$database="formoperation";

$con=new mysqli($servername,$username,$pass,$database);

$sql="DELETE FROM formop WHERE id=$id";
$con->query($sql);

}
header("location:display.php");
 exit;
?>
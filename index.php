<?php
$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST["\' secondname'];
$address =$_REQUEST[' address'];

if(isset($_POST["btntest"]))

{
    $Shost="localhost";
    $user = "root";
    $password="";
    $db="bis level four";

   $conn = mysqli connect($host,$user,$password,$db);
  
   $insert="insert into studentsbisinfo values('$firstname','$secondname','$address')";

   mysqli_query($conn,$insert);

   if($conn){
    echo("h1 style='color:green;'>your registration is done!</h1>");
   }
   else{
    echo("h1 style='color:red;'>your registration is failed!</h1>");
   }
?>
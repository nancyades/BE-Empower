<?php
$con=new mysqli("localhost","root","","empower");
$result=$con->query("SELECT * FROM `power`");
$name=$_POST =["username"];
$password=$_POST =["pass"];
if(isset($_POST["submit"])){
  $res=$con->query("INSERT INTO `power`( `NAME`, `Password`) VALUES ('$name','$password')");
  if($result){
    echo"<script>alert('Thank you for your response')</script>";
}else{
    echo"<script>alert('some error !! try again later.....')</script>";
}
}

?>
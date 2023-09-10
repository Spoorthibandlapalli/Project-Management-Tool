<?php
$insert=true;
$update=true;
$servername="localhost";
$username="root";
$password="";
$database="pms_project";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("connection failed..!".mysqli_connect_error());
}  
 ?>
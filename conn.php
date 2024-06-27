<?php
$host="localhost";
$user="root";
$password="";
$database="sample";

$con=mysqli_connect($host,$user,$password,$database);
if($con){
    echo "Connection Successful";
}
?>
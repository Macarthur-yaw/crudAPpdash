<?php 
$username="admin";
$servername="localhost";
$db_name="quizzes";
$db_pass="macarthur1260";
$conn=mysqli_connect($servername,$username,$db_pass,$db_name);

if(!$conn){
    die("error"+mysqli_connect_error());
}




?>
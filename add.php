<?php 
include("connection.php");
$course=$_POST['courseName'];
$contentN=$_POST['content'];
$answerN=$_POST['answer'];

if(isset($course)&&isset($answerN)&&isset($contentN)){
    header("location:index.php");
}

$sql="insert into quiz(course_name,content,answer) values('$course','$contentN','$answerN')";

$results=mysqli_query($conn,$sql);
?>
<?php include("connection.php");
$course=$_POST['course'];
$contentN=$_POST['cont'];
$answerN=$_POST['answer'];
$ids=$_GET['id'];
if(isset($course)&&isset($answerN)&&isset($contentN)&&isset($ids)){
    $sql="update quiz set course_name='$course',content='$contentN',answer='$answerN' where id='$ids'";
   $queryData=mysqli_query($conn,$sql);
    header("location:index.php");  
    
}



?>

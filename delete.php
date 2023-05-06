<?php
include("connection.php");

if(isset($_GET['id'])){
    $ids=$_GET['id'];
    $sql3="delete from quiz where id='$ids'";
    $results=mysqli_query($conn,$sql3);
    header("location:index.php");
}
?>

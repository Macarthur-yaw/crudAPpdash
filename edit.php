<?php include("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>title</title>
</head>
<body>
<?php 
$id=$_GET['id'];
$sql = "SELECT * FROM quiz where id='$id'";
$queryResult=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($queryResult)){
    echo "<form action='update.php?id={$row['id']}' method='post'>";
    echo"<input type='text' name='course' value='{$row['course_name']}'>";
    echo"<input type='text' name='cont' value='{$row['content']}'>";
    echo"<input type='text' name='answer' value='{$row['answer']}'>";
    echo "<input type='submit' value='submit'";
    echo "</form";

}


?>
</body>
</html>
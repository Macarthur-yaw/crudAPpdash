<?php
include("connection.php");
$name=$_POST['Names'];
$pass=$_POST['Passwor'];

if(isset($name)&&isset($pass)){
if(($name=="Kevin") &&($pass=='1234')){
    header("Location:index.php");
    exit();
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>title</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <div id="forms">
   <form action="signin.php" method="post">
 
   <div>
   <input type="text" name="Names" >
</div>
<br>
<div>
<input type="password" name="Passwor">
</div>

<div><button>Sign in</button></div>
</form>
</div>
</body>
</html>
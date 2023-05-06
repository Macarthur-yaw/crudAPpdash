<?php include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>title</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/4e38c87c6a.js" crossorigin="anonymous"></script>
</head>
<body>
   
<header>

<nav >
    
<button id="menuView" style="padding:5px;"><i class="fa-solid fa-bars"></i></button>
        
        <div id="vertiNav">

        
        <ul>
        <i style="text-align:end;" onclick="hideNav()" class="fa-solid fa-xmark"></i>
        <li>
<button id="defaultpage" onclick="openPage('Home')"><i class="fa-solid fa-house"></i></button></li>


<li>
<button  onclick="openPage('DashBoard')" ><i class="fa-solid fa-gauge"></i></button></li>


<li>
<button  onclick="openPage('Users')" ><i class="fa-solid fa-user"></i></button></li>

<li>
<button  onclick="openPage('Courses')"><i class="fa-solid fa-book"></i></button></li>


<li >
<button style="position:absolute;bottom:5px;"><i class="fa-solid fa-right-from-bracket"></i></button></li>
        </ul>
        </div>
        <div id="horiNav" style="padding:5px;">
<input type="text" placeholder="Type the question" id="searchText">
<input type="submit" style="padding:2px;border-radius:5px;background-color:white" value="Submit">
        </div>
    </nav>
</header>

<main>
    <div id="Home" class="page">
   <div style="display: flex;justify-content:space-between">

   <div><h5>Questions</h5>
</div>
<div><a style="text-align: end;" href="new.php">
  <button style="padding: 4px;background-color:lightslategrey;color:white;border:1px lightslategray solid;"><i class="fa-solid fa-plus"></i>  Add</button>
</a>
</div>
   </div>


<h5 style="text-align:center;">Welcome, </h5>
<table><tbody>
<?php 
include("connection.php");

// Query the database
$sql = "SELECT * FROM quiz";
$result = mysqli_query($conn, $sql);

// Output the data in a table
echo "<table>";
echo "<tr><th>Course Name</th><th>Content</th><th>Answer</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr class='pages' style='text-align:center;'>";
    echo "<td class='pages'>{$row['course_name']}</td>";
    echo "<td class='pages'>{$row['content']}</td>";
    echo "<td class='pages'>{$row['answer']}</td>";
    echo "<td class='pages'><a href='Edit.php?id={$row['id']}'><button><i class='fa-solid fa-pen'></i> </button></a></td>";
    echo "<td class='pages'><a href='delete.php?id={$row['id']}'><button><i class='fa-solid fa-trash'></i></button></a></td>";
    echo "</tr>";
}
echo "</table>";

mysqli_free_result($result);

mysqli_close($conn);
?>

    </div>
    <div id="DashBoard" class="page">
        yes
    </div>
    <div id="Users"  class="page">hey</div>
    <div id="Courses" class="page">Yaw</div>
</main>
<script src="index.js"></script>
</body>
</html>

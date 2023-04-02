<?php
require_once('config/db.php');

$rn = $_GET['id'];


$query = "Delete from student_data where ID = '$rn'";



if ($con->query($query) === TRUE) {
    echo "<p style='color:green; margin: auto; text-align : center; font-size: 30px; paddig: 20px;'>Record has been deleted.</p>";
  } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href = 'index.php'>GO BACK</a></button>
</html>
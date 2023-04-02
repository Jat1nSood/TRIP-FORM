<?php

require_once('config/db.php');


if(count($_POST)>0){


    mysqli_query($con,"UPDATE student_data set id='" . $_POST['ID'] . "', name='" . $_POST['Name'] . "', age='" . $_POST['Age'] . "', gender='" . $_POST['Gender'] . "' ,email='" . $_POST['Email'] . "' WHERE phone='" . $_POST['Phone'] . "'");
    $message = "Record Modified Successfully";
    }





$result = mysqli_query($con, "select * from student_data where ID = '" . $_GET['id'] . "' ");

$row = mysqli_fetch_assoc($result);

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
<div class="container">

<a href="fetch/index.php">Admin</a>



<h1 style = 'text-align : center; margin : auto; padding : 10px;'>Edit/Update</h1>




<form style = 'display: flex;align-items: center; justify-content: center; flex-direction: column; padding : 10px;' action="index.php" method="post">

<input style = 'padding : 5px; margin : 10px;' type="text" name="id" value="<?php echo $row['id']; ?>" >
<input style = 'padding : 5px; margin : 10px;'type="text" name="name" value="<?php echo $row['Name']; ?>" >
<input style = 'padding : 5px; margin : 10px;'type="text" name="age" value="<?php echo $row['Age']; ?>" >
<input style = 'padding : 5px; margin : 10px;'type="text" name="gender" value="<?php echo $row['Gender']; ?>" >
<input style = 'padding : 5px; margin : 10px;'type="email" name="email" value="<?php echo $row['Email']; ?>" >

<button class="btn">Update</button>

</form>
</body>
</html>
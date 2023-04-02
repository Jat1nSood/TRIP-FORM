<?php



if(isset($_POST['name'])){
  
// Connection Variables

$server ="localhost";
$username ="root";
$password ="";


// database Connectiom
$con = mysqli_connect($server, $username, $password);


if(!$con){
    die("connection to this database failed" . mysqli_connect_error());
}


// echo "Success Connecting to the Database <br>";



// Collectig Databse Variables
$name = $_POST['name'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$response= $_POST['intrest'];

$sql = "INSERT INTO `us_trip`.`student_data`  (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$response', current_timestamp());";

//Exetuting Query

if($con->query($sql) == true){
   // echo "Sucessfully Inserted";

    echo "<p style='color:green; margin: auto; text-align : center; font-size: 30px; paddig: 20px;'>Thank You. Your response has been recorded.</p>";

    

   

}

else{
    echo "ERROR : $sql <br> $con ->error";
}



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
<button><a href = 'index.html'>GO BACK</a></button>
</body>
</html>





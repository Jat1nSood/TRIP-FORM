<?php





$con = mysqli_connect("localhost", "root", "", "us_trip");

$result = mysqli_query($con, "SELECT * FROM student_data");


if(!$con){

    $die("Failed to connect to database");


}


else{

    //echo"You are connected to database<br>";
}






?>








<?php
require_once('config/db.php');

// $query = "select * from student_data";


$result = mysqli_query($con, "SELECT * FROM student_data");


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <title>Document</title>
</head>
<body>

    

    


        <div class="container">


            <h1>Fetch data from Database</h1>
            
            

            <table>
                <tr>
                    <td> ID</td>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Gender</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <?php

                    $i=0;

                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <td>
                        <?php echo $row['ID']; ?>
                    </td>
                    <td>
                        <?php echo $row['Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Gender']; ?>
                    </td>
                    <td>
                        <?php echo $row['Email']; ?>
                    </td>
                    <td>
                     <button><a href = "update.php?id=<?php echo $row["ID"];?>">Edit/Update</a></button>
                    </td> 
                   
                    <td><a href="delete.php?id=<?php echo $row["ID"];?>">
                         <button>Delete</button>
                     </a>
                       
                    </td>
                </tr>

                <?php

                $i++;

                }

                    ?>
               
            </table>
    
    
        </div>
    

    
    
</body>
</html>
<?php
    $username = 'root';
    $password = '';
    $db_name = 'oop_practice';
    $server_name = 'localhost';

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn->connect_error){
       die("Some thing went wrong -> " .mysqli_connect_error()); 
    }
    else{
        echo "Successfully Connected <hr>";

        $sql = "SELECT * FROM `Student`";
        $result = $conn->query($sql);

        $count = $result->num_rows;
        echo $count;
        echo "<br>";
        
        if($count > 0){
            while ($row = $result->fetch_assoc()){
                $id = $row['ID'];
                $name = $row['name'];
                $roll = $row['roll'];
                $marks = $row['marks'];

                echo "ID : ".$id." <br>";
                echo "Name : ".$name." <br>";
                echo "Roll : ".$roll." <br>";
                echo "Marks : ".$marks." <br>";
                echo "<br>";
            }
        }
    }
?>
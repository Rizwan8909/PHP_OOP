<?php
    class Father{
        const marks = 99;

        function display(){
            echo self::marks; //Accessing inside the class
        }
    }

    $obj = new Father();
    $obj->display(); //Accessing const via method call
    
    echo "<br>". Father::marks; // Accessing const directly (outside the class)
?>
<?php
    class Father {
        
        static function display(){
            echo "Hello there";
        }
    }

    // No need to Create and object to access static function
    Father::display();
?>
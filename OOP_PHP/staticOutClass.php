<?php
    class Father{
        public static $a = 10;
        public static $b;
        function display(){
            echo self::$a ."<br>";
            echo self::$b ."<br>";
        }
    }

    Father::$b = 20; //Calling outside the class {statci property}
    $obj = new Father();
    $obj->display();
?>
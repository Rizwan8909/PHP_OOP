<?php
    class Father{
        public static $a;

        function display($x){
            self::$a = $x;
            echo self::$a;
        }
    }

    $obj = new Father();
    $obj->display(10);
?>
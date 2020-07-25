<?php
    class Father {
        function display(){
            echo "I can be overriden because I'm a normal function <br>";
        }

        final function disp(){
            echo "I can not be overriden because I'm a final function <br>";
        }
    }

    // Final Class ka child nhe bn sakta.
    final class Son extends Father {

        function display(){
             echo "I am overrided <br>";
        }
    }

    $father = new Father();
    $father->display();
    $father->disp();

    $son = new Son();
    $son->display();
?>

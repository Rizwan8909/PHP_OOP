<?php
    class Father{
        protected $a = 10;
    }
    class Son extends Father{
        protected $b = 30;
    }

    class GrandSon extends Son{
        function display(){
            echo "Value of A: $this->a <br>";
            echo "Value of A: $this->b <br>";
        }
    }

    $obj = new GrandSon;
    $obj->display();

?>
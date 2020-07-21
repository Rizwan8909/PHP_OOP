<?php
    class Father {
        public $a;
        public $b;

        function getValue($x, $y){
            $this->a = $x;
            $this->b = $y;
        }
    }

    class Son extends Father{
        public $c = 10;
        public $sum;

        function add(){
            $this->sum = $this->a + $this->b + $this->c;
            return $this->sum;
        }
    }

    class Grandson extends Son{
        function display(){
            echo "The value of A: $this->a <br>";
            echo "The value of B: $this->b <br>";
            echo "The value of C: $this->c <br>";
            echo "Sum : ".$this->add()." <br>";
        }
    }

    $obj = new Grandson();
    $obj->getValue(10, 20);
    $obj->display();
?>
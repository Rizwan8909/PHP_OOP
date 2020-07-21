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
        public $sum;

        function add(){
            $this->sum = $this->a + $this->b;;
            return $this->sum;
        }

        function displaySum(){
            echo "The value of A: $this->a <br>";
            echo "The value of B: $this->b <br>";
            echo "Sum : ".$this->add()." <br>";
        }
    }

    class Daughter extends Father{
        public $sub;

        function sub(){
            $this->sub = $this->a - $this->b;
            return $this->sub;
        }

        function displaySub(){
            echo "The value of A: $this->a <br>";
            echo "The value of B: $this->b <br>";
            echo "Sub : ".$this->sub()." <br>";
        }
    }

    $objSon = new Son();
    $objSon->getValue(10, 20);
    $objSon->displaySum();

    $objDaughter = new Daughter();
    $objDaughter->getValue(200, 20);
    $objDaughter->displaySub();
?>
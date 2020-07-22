<?php
    class Father {
        
        public $a;
        protected function __construct($x)
        {
            $this->a = $x;
        }
    }

    class Son extends Father {
        
        public $b;

        function __construct($x, $y){
            parent::__construct($x);
            $this->b = $y;
        }

        function display(){
            echo "Value of A: $this->a <br>";
            echo "Value of A: $this->b <br>";
        }
    }

    $obj = new Son(10, 20);
    $obj->display();
?>
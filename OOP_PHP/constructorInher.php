<?php
    class Father {
        public $a;

        function __construct($x)
        {
            $this->a = $x;
            echo "Parent Construct value = $this->a <br>";
        }
    }

    class Son extends Father{
        public $b;

        function __construct($x, $y) // Constructor of child
        {
            parent:: __construct($x); // Constructor of parent
            $this->b = $y;
            echo "Child Construct value = $this->b <br>";
        }

        // function display(){
        //     echo "Value of A: $this->a <br>";
        //     echo "Value of B: $this->b <br>";
        // }
    }

    $obj = new Son(10, 20);
    // $obj->display();
?>
<?php

    // Abstract class ka object nhe bn sakta
    // Abstract class main non abstract method bhi hosakty hain
    // Abstract method to abstract class main define nhe karsakty
    // Abstract method ki definition inherit class main likhty hain
    abstract class Animal{ 
        
        function eating(){
            echo "I can eat <br>";
        }
        function sleeping(){
            echo "I can sleep <br>";
        }
        function walking(){
            echo "I can walk <br>";
        }
        abstract function flying(); // Ye function inherit class main define hogay
    }

    class Dog extends Animal{
        
        function flying()
        {
           echo "I can't fly <br>"; 
        }

        function actions(){
            echo "I am a dog <br>";
            $this->walking();
            $this->sleeping();
            $this->eating();
            $this->flying();
        } 
      
    }

    class Bird extends Animal{
   
        function flying()
        {
            echo "I can fly <br>";
        }

        function actions(){
            echo "I am a Bird <br>";
            $this->walking();
            $this->sleeping();
            $this->eating();
            $this->flying();
        }
    }

    $dog = new Dog();
    $dog->actions();

    echo "<br>";
    $bird = new Bird();
    $bird->actions();
 
?>
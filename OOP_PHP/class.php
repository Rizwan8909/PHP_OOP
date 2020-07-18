<?php
    class Player {
        public $name;
        public $power;

        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }

        function setPower($power){
            $this->power = $power;
        }
        function getPower(){
            return $this->power;
        }

    }


    $player1 = new Player();
    $player1->setName("Rizwan");
    echo $player1->getName();
    $player1->setPower("Fire Monster");
    echo $player1->getPower();
    echo "<br>";

    $player2 = new Player();
    $player2->setName("Rehan");
    echo $player2->getName();
    $player2->setPower("Mr Electric");
    echo $player2->getPower();
    echo "<br>";
?>
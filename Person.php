<?php

//Здоровье человека не может быть больше 100!
class Person{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    Private $father;

    function __construct($name, $lastname, $age, $mother=null, $father=null){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->age=$age;
        $this->mother=$mother;
        $this->father=$father;
        $this->hp=100;
    }
    function sayHi($name){
        return "Hi, $name! I'm ".$this->name;
    }
    function setHP($hp){
        if($this->hp+$hp>=100)$this->hp=100;
        else $this->hp=$this->hp+$hp;
    }
    function getHP(){
        return $this->hp;
    }
    function getName(){
        return $this->name;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getAge(){
        return $this->age;
    }
    function getMother(){
        return $this->mother;
    }
    function getFather(){
        return $this->father;
    }
    function getFamily(){
        return "Hi! My name is ".$this->getName().". My lastname is ".$this->getLastname().". I'm ".$this->getAge()." years old."."<br>My father is ".$this->getFather()->getName()." ".$this->getFather()->getLastname().". He is ".$this->getFather()->getAge()." years old."."<br>My mother is ".$this->getMother()->getName()." ".$this->getMother()->getLastname().". She is ".$this->getMother()->getAge()." years old."."<br>My grandmother's on mother's side is ".$this->getMother()->getMother()->getName()." ".$this->getMother()->getMother()->getLastname().". She is ".$this->getMother()->getMother()->getAge()." years old."."<br>My grandfathers's on mother's side is ".$this->getMother()->getFather()->getName()." ".$this->getMother()->getFather()->getLastname().". He is ".$this->getMother()->getFather()->getAge()." years old."."<br>My grandmother's on fathers's side is ".$this->getFather()->getMother()->getName()." ".$this->getFather()->getMother()->getLastname().". She is ".$this->getFather()->getMother()->getAge()." years old."."<br>My grandfathers's on fathers's side is ".$this->getFather()->getFather()->getName()." ".$this->getFather()->getFather()->getLastname().". He is ".$this->getFather()->getFather()->getAge()." years old.";
    }
}

$igor=new Person("Igor", "Chernov", "55");
$elena=new Person("Elena", "Chernova", "55");
$pavel=new Person("Pavel", "Belov", "52");
$mila=new Person("Mila", "Belova", "51");
$alex=new Person("Alex", "Belov", "25", $mila, $pavel);
$olga=new Person("Olga", "Belova", "26", $elena, $igor);
$valera=new Person("Valera", "Belov", "1", $olga, $alex);

echo $valera->getFamily();
// echo $valera->getMother()->getFather()->getName();

// $medKit=50;
// $alex->setHP(-30); //fell down
// echo $alex->getHP()."<br>";
// $alex->setHP($medKit); //found medKit
// echo $alex->getHP();

// echo $alex->sayHi($igor->name);

?>

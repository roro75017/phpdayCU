<?php
class Animal { 

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    private $name;
    private $legs; 
    private $type;
    private static $numberOfAnimals = 0;
    
    public function __construct($name, $legs, $type) {
        $this->name=$name;
        $this->legs=$legs;
        $this->type=$type;
        echo "My name is " . $this->name . " and I am a " . $this->getTypeString() . "!\n";
        self::$numberOfAnimals++;
    }
    public static function getNumberOfAnimalsAlive() {
        return self::$numberOfAnimals;
    }
    public function getName() {
        return $this->name;
    }
    public function getLegs() {
        return $this->legs;
    }
    public function getTypeString() {
        switch ($this->type) {
            case self::MAMMAL:
                return "Mammal";
                break;
            case self::FISH:
                return "Fish";
                break;
            case self::BIRD:
                return "Bird";
                break;
        }
    }
    public static function AnimalCount() {
        $count=self::$numberOfAnimals;
        $plural=($count != 1) ? 's' : '';
        $isOrAre=($count != 1) ? 'are' : 'is';
    }
}
?>
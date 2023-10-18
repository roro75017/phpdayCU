<?php
class Cat extends Animal {
private $color;
public function __construct($name, $legs, $color="grey") {
        parent::__construct($name, $legs, self::MAMMAL);
        $this->color = $color;
        echo $this->getName() . ": MEEEOOWWWW\n";
    }
public function meow() {
        echo $this->getName() . " the " . $this->color . " kitty is meowing.\n";
    }
}
?>
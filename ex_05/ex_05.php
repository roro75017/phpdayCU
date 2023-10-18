<?php
class Gecko {
    private $name;
    
    public function __construct ($name = null) {
        $this->name = $name;
        echo "Hello $name!\n"; 
    }

    public function __destruct () {
        if (isset($this ->name)) {
        echo "Bye $this->name !\n"; 
    } else {
        echo "Bye !\n";
    }
    }
    
    public function getName() {
        return $this -> name;
    }
}
?>
<?php
class Hero {
    public $name;
    public $baseStrength;
    public $baseHealth;
    public $defense;
    public $level;

    public function __construct($name, $baseStrength, $baseHealth, $defense) {
        $this->name = $name;
        $this->baseStrength = $baseStrength;
        $this->baseHealth = $baseHealth;
        $this->defense = $defense;
        $this->level = 1;
    }

    public function levelUp() {
        $this->level++;
        $this->updateStats();
    }

    public function updateStats() {
    }
}

class Warrior extends Hero {
    public function __construct($name) {
        parent::__construct($name, 10, 100, 5);
    }
}

class Mage extends Hero {
    public function __construct($name) {
        parent::__construct($name, 8, 80, 3);
    }
}
?>

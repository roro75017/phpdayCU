<?php
abstract class AWeapon
{
    private $name;
    private $apcost;
    private $damage;
    private $melee = false;

    public function __construct($name, $apcost, $damage)
    {
        if (!is_string($name) || !is_int($apcost) || !is_int($damage)) {
            throw new Exception("Error in AWeapon constructor. Bad parameters.");
        }
        $this->name = $name;
        $this->apcost = $apcost;
        $this->damage = $damage;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getApcost()
    {
        return $this->apcost;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function isMelee()
    {
        return $this->melee;
    }
    abstract public function attack();
}
?>
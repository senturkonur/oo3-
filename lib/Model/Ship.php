<?php

class Ship extends AbstractShip
{
    private $jediFactor = 0;
    public function __construct($name)
    {
        parent::__construct($name);
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }
    public function isFunctional()
    {
        return !$this->underRepair;
    }
    public function getType()
    {
        return 'Empire';
    }
}

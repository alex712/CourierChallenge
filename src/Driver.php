<?php

namespace CourierChallenge;

class Driver {
    private $stamina;
    private $speed;
    private $strength;
    private $efficiency;
    private $luck;
    private $skills;

    public function __construct($stamina, $speed, $strength, $efficiency, $luck, $skills)
    {
        $this->stamina = $stamina;
        $this->speed = $speed;
        $this->strength = $strength;
        $this->efficiency = $efficiency;
        $this->luck = $luck;
        $this->skills = $skills;
    }

    public function getStamina()
    {
        return $this->stamina;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getEfficiency()
    {
        return $this->efficiency;
    }

    public function getLuck()
    {
        return $this->luck;
    }

    public function reduceStamina($impact)
    {
        $this->stamina -= $impact;
        if ($this->stamina < 0) {
            $this->stamina = 0; // Ensure stamina doesn't go below zero
        }
    }

    public function applySkills(DeliveryChallenge $challenge)
    {
        foreach ($this->skills as $skill) {
            $skill->apply($this, $challenge);
        }
    }

    public function reduceFatigue()
    {
        $this->stamina += 10; // Arbitrary value for reducing fatigue
    }
}


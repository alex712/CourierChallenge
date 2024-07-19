<?php

namespace CourierChallenge;

class QuickRoute implements Skill {
    public function apply(Driver $driver, DeliveryChallenge $challenge): void
    {
        if (rand(1, 100) <= 15) {
            $challenge->setDistance($challenge->getDistance() * 0.5);
        }
    }
}
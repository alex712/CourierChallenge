<?php

namespace CourierChallenge;
class HeavyLifting implements Skill {
    public function apply(Driver $driver, DeliveryChallenge $challenge): void
    {
        if (rand(1, 100) <= 25) {
            $driver->reduceFatigue();
        }
    }
}
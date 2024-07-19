<?php

namespace CourierChallenge;

interface Skill {
    public function apply(Driver $driver, DeliveryChallenge $challenge): void;
}

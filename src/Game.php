<?php

namespace CourierChallenge;

class Game {
    private $driver;
    private $challenges;
    private $maxDeliveries;

    public function __construct(Driver $driver, $maxDeliveries = 20)
    {
        $this->driver = $driver;
        $this->challenges = [];
        $this->maxDeliveries = $maxDeliveries;
    }

    public function addChallenge(DeliveryChallenge $challenge)
    {
        $this->challenges[] = $challenge;
    }

    public function play()
    {
        $deliveryCount = 0;
        foreach ($this->challenges as $challenge) {
            if ($deliveryCount >= $this->maxDeliveries || $this->driver->getStamina() <= 0) {
                break;
            }

            echo "New Challenge:\n";
            echo "Distance: {$challenge->getDistance()} km\n";
            echo "Weight: {$challenge->getWeight()} kg\n";
            echo "Traffic: {$challenge->getTraffic()}%\n";
            echo "Urgency: {$challenge->getUrgency()}\n";
            echo "Luck: {$challenge->getLuck()}%\n";

            if ($this->driver->getLuck() >= $challenge->getLuck()) {
                $this->handleDriverTurn($challenge);
            } else {
                $this->handleChallengeTurn($challenge);
            }

            $deliveryCount++;
        }

        if ($this->driver->getStamina() > 0) {
            echo "Game Complete. Alex finished all deliveries.\n";
        } else {
            echo "Game Over. Alex's stamina is depleted.\n";
        }
    }

    private function handleDriverTurn(DeliveryChallenge $challenge)
    {
        $this->driver->applySkills($challenge);
        $impact = $this->calculateImpact($challenge);
        if (rand(1, 100) > $this->driver->getLuck()) {
            $this->driver->reduceStamina($impact);
            echo "Impact: {$impact}\n";
        } else {
            echo "No impact, Alex got lucky!\n";
        }
        echo "Remaining Stamina: {$this->driver->getStamina()}\n";
    }

    private function handleChallengeTurn(DeliveryChallenge $challenge)
    {
        $impact = $this->calculateImpact($challenge);
        if (rand(1, 100) > $challenge->getLuck()) {
            $this->driver->reduceStamina($impact);
            echo "Impact: {$impact}\n";
        } else {
            echo "No impact, Alex got lucky!\n";
        }
        echo "Remaining Stamina: {$this->driver->getStamina()}\n";
    }

    private function calculateImpact(DeliveryChallenge $challenge)
    {
        return ($challenge->getWeight() * $challenge->getTraffic()) / $this->driver->getStrength();
    }
}

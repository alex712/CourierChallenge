<?php
namespace CourierChallenge;

class DeliveryChallenge {
    private $distance;
    private $weight;
    private $traffic;
    private $urgency;
    private $luck;

    public function __construct($distance, $weight, $traffic, $urgency, $luck)
    {
        $this->distance = $distance;
        $this->weight = $weight;
        $this->traffic = $traffic;
        $this->urgency = $urgency;
        $this->luck = $luck;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getTraffic()
    {
        return $this->traffic;
    }

    public function getUrgency()
    {
        return $this->urgency;
    }

    public function getLuck()
    {
        return $this->luck;
    }
}

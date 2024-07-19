<?php

use PHPUnit\Framework\TestCase;
use CourierChallenge\Driver;
use CourierChallenge\Game;
use CourierChallenge\QuickRoute;
use CourierChallenge\HeavyLifting;
use CourierChallenge\DeliveryChallenge;

class GameTest extends TestCase {
    public function testGamePlay()
    {
        $driver = new Driver(100, 70, 60, 60, 25, [new QuickRoute(), new HeavyLifting()]);
        $game = new Game($driver);

        $challenge1 = new DeliveryChallenge(10, 20, 40, 3, 30);
        $challenge2 = new DeliveryChallenge(15, 30, 50, 4, 25);

        $game->addChallenge($challenge1);
        $game->addChallenge($challenge2);

        $this->expectOutputRegex('/New Challenge:/');
        $game->play();
    }
}

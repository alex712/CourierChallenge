<?php
namespace CourierChallenge;

require 'vendor/autoload.php';

use CourierChallenge\Driver;
use CourierChallenge\DeliveryChallenge;
use CourierChallenge\Game;
use CourierChallenge\QuickRoute;
use CourierChallenge\HeavyLifting;

// Initialize Driver with random stats within specified ranges
$driver = new Driver(
    rand(80, 120), // Stamina
    rand(60, 90),  // Speed
    rand(50, 70),  // Strength
    rand(50, 70),  // Efficiency
    rand(15, 35),  // Luck
    [new QuickRoute(), new HeavyLifting()] // Skills
);

// Initialize Game
$game = new Game($driver);

// Create random delivery challenges
for ($i = 0; $i < 20; $i++) {
    $challenge = new DeliveryChallenge(
        rand(5, 20), // Distance
        rand(10, 50), // Weight
        rand(30, 60), // Traffic
        rand(1, 5),   // Urgency
        rand(20, 35)  // Luck
    );
    $game->addChallenge($challenge);
}

// Play the game
$game->play();

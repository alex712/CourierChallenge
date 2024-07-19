**_The Courier Challenge_**

**The Story**
In the bustling city of Deliveria, a skilled delivery driver named Alex works tirelessly to ensure
packages are delivered on time, no matter the obstacles. Alex, like all dedicated couriers, has
unique strengths and weaknesses.
After years of navigating the city, Alex has the following stats:
Stamina: 80 - 120
Speed: 60 - 90
Strength: 50 - 70
Efficiency: 50 - 70
Luck: 15% - 35% (0% means no luck, 100% lucky all the time)
Alex also possesses 2 skills:
Quick Route: A chance to find a faster route, reducing delivery time significantly; there’s a 15%
chance to use this skill every time a delivery is made.
Heavy Lifting: Can handle heavy packages more efficiently, reducing fatigue; there’s a 25%
chance to use this skill every time a heavy package is delivered.

_Gameplay_
As Alex navigates through Deliveria, various delivery challenges arise with the following
properties:
Distance: 5 - 20 km
Weight: 10 - 50 kg
Traffic: 30% - 60%
Urgency: 1 - 5 (1 being least urgent, 5 being most urgent)
Luck: 20% - 35%

Simulate a delivery scenario where Alex and a delivery challenge are initialized with
random properties within their ranges.
The first move is made by the entity with the higher urgency. If both have the same urgency, the
entity with the higher luck goes first. After a move, roles switch: the driver handles the
challenge, and the challenge affects the driver.
The impact on Alex is calculated with the following formula:

_Impact_
=
Challenge Weight
×
Traffic
÷
Driver Strength
Impact=Challenge Weight×Traffic÷Driver Strength
The impact is subtracted from Alex’s stamina. Alex can miss the impact if he gets lucky that
turn.
Alex&#39;s skills occur randomly based on their chances, so include them in each turn.
Game Over
The game ends when Alex&#39;s stamina is depleted or after 20 deliveries. Each turn, the
application must output the results: what happened, which skills were used (if any), the impact
sustained, and Alex&#39;s remaining stamina.
If Alex completes all deliveries before the maximum number of rounds is reached, declare him
the winner.

_Rules_
● Write code in plain PHP, without any frameworks (you may use third-party
libraries like PHPUnit, UI libraries/frameworks).
● Ensure your application is decoupled, code reusable, and scalable. For example,
can a new skill easily be added to our driver?
● Make sure your code is bug-free and thoroughly tested.
● There’s no time limit, take your time to devise the best approach you can think of.

**Să fie scris nativ, fără frameworks; să fie dezvoltat OOP.
Poti utiliza teste unitare.
NU trebuie să te ocupi și de interfață.
Să utilizezi Design Patterns.
Composer și Autoloader.**
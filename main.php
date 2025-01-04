<?php

$fighterONE = [
    'initiative' => 1,
    'weapon' => [
        'normal' => 3,
        'critical' => 4
    ],
    'health' => 8
];

$fighterTWO = [
    'initiative' => 0,
    'weapon' => [
        'normal' => 3,
        'critical' => 4
    ],
    'health' => 4
];

$fighterONE['rolls'] = [
    'hits' => 2,
    'crits' => 0
];

$fighterTWO['rolls'] = [
    'hits' => 1,
    'crits' => 0
];

/*

RESOLUTIONS

Fighters take turns resolving their Hits/Crits. Fighter with initiative goes first.

----------------------------------

Scenario 1
Round 1
F1 Attacks, using a Hit
F1 Hits = 1
F2 takes 3 damage
F2 Health = 1

Round 2
F2 Attacks, using a Hit
F2 Hits = 0
F1 takes 3 damage
F1 Health = 5

Round 3
F1 Attacks, using a Hit
F1 Hits = 0
F2 takes 3 damage
F2 Health = 0

Result
F1 Health = 5
F2 Health = 0 (dead)

----------------------------------
Scenario 2

Round 1
F1 Attacks, using a Hit
F1 Hits = 1
F2 takes 3 damage
F2 Health = 1

Round 2
F2 Blocks, using a Hit and removing an Unresolved Hit from F1
F2 Hits = 0
F1 Hits = 0

Result
F1 Health = 8
F2 Health = 1

----------------------------------
Scenario 3

Round 1
F1 Blocks, using a Hit and removing an Unresolved Hit from F2
F1 Hits = 1
F2 Hits = 0

Round 2
F1 Attacks, using a Hit
F1 Hits = 0
F2 Health = 1

Result
F1 Health = 8
F2 Health = 1

----------------------------------
Scenario 4

Round 1
F1 Blocks, using a Hit and removing an Unresolved Hit from F2
F1 Hits = 1
F2 Hits = 0

Round 2
F1 Blocks, using a Hit, (to no effect since F2 no longer has Unresolved Hits)
F1 Hits = 0

Result
F1 Health = 8
F2 Health = 4


In this case, a simple algorithm would have Fighter One choose the first scenario since that leaves their opponent dead.
However, Fighter Two also knows this and will most likely choose to block with their Hit to avoid dying.
In that case the best outcome for Fighter One is the second or third scenario, dealing damage and taking no damage.

 */

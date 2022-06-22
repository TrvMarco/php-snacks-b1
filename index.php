<?php

//     SNACK 1

$matches = [
    [
        'team_one' => 'Milano',
        'team_two' => 'Venezia',
        'team_one_points' => '22', 
        'team_two_points' => '30'  
    ],
    [
        'team_one' => 'Torino',
        'team_two' => 'Bari',
        'team_one_points' => '33',
        'team_two_points' => '15'  
    ],
    [
        'team_one' => 'Cagliari',
        'team_two' => 'Palermo',
        'team_one_points' => '7', 
        'team_two_points' => '21'  
    ]
];

for($i = 0; $i < count($matches); $i++){
    echo $matches[$i]['team_one'].' - '.$matches[$i]['team_two'].' | '.$matches[$i]['team_one_points'].' - '.$matches[$i]['team_two_points']."<br>";
}
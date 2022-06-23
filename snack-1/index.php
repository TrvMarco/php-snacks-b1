<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    <h2>Matches score:</h2>
    <?php for($i = 0; $i < count($matches); $i++):?>
        <p><?= $matches[$i]['team_one'].' - '.$matches[$i]['team_two'].' | '.$matches[$i]['team_one_points'].' - '.$matches[$i]['team_two_points'] ?></p>
    <?php endfor;?>
</body>
</html>
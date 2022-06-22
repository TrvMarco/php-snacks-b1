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

echo '<br><br><br>';

//     SNACK 2 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$response = "";

if(strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($age, FILTER_VALIDATE_INT)){
    $response = "Accesso consentito";
}else{
    $response = "Accesso negato";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <h1>MyForm</h1>
    <form action="">
        <input type="text" name="name" placeholder="Inserisci il tuo nome">
        <input type="email" name="email" placeholder="Inserisci la tua e-mail">
        <input type="text" name="age" placeholder="Inserisci la tua età">
        <button type="submit">Invia</button>
    </form>
    <p><strong>Nome</strong>: <?php echo $name?></p>
    <p><strong>Email</strong>: <?php echo $email?></p>
    <p><strong>Età</strong>: <?php echo $age?></p>
    <p><strong>Autorizzazione: </strong><?php echo $response?></p>
</body>
</html>
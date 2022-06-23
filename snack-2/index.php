<?php

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
    <title>Snack-2</title>
</head>
<body>
    <h2>MyForm</h2>
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
<?php

// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
// che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

// creo le tre variabili get
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


if(strlen($name) > 3 && (strpos($mail, '@') && strpos($mail, '.')) && is_numeric($age)){
    echo 'Accesso riuscito';
  } else{
    $mex = 'Accesso negato! Rincontrolla! ';
    
if(strlen($name) <= 3){
    $mex .= 'Il nome deve avere almeno 3 caratteri.  ';
    }
    if(!strpos($mail, '@') || !strpos($mail, '.')){
    $mex .= 'La mail deve contenere almeno un punto e la @. ';
    }
    if(!is_numeric($age)){
    $mex .= 'Inserisci gli anni in numeri. ';
    }    

    echo $mex;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>


<?php

$partite = [

    [
        'casa' => 'Lakers',
        'ospite' => 'Bulls',
        'puntiCasa' => '55',
        'puntiOspite' => '60',
    ],
    [
        'casa' => 'Jazz',
        'ospite' => 'Knicks',
        'puntiCasa' => '55',
        'puntiOspite' => '89',
        
    ],
    [
        'casa' => 'Cavaliers',
        'ospite' => 'Celtic',
        'puntiCasa' => '32',
        'puntiOspite' => '67',
    ],

];

$lunghezza = count($partite);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite NBA</title>
</head>
<body>

    <h2> Snack 1 </h2>
    <?php for($i = 0; $i < $lunghezza; $i++){ ?>
    <div class="">
        <ul>
            <li>
                <?php echo $partite[$i]['casa'];?> - <?php echo $partite[$i]['ospite'];?> | <?php echo $partite[$i]['puntiCasa'];?> - <?php echo $partite[$i]['puntiOspite'];?>
            </li>
        </ul>
    </div>
    <?php } ?>

</body>
</html>
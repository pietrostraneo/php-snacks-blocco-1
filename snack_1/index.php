<?php
    $matches = [
        [
            'home' => 'Happy Casa Brindisi',
            'away' => 'Vanoli Basket Cremona',
            'homeScore' => 55,
            'awayScore' => 60,
        ],
        [
            'home' => 'Estra Pistoia',
            'away' => 'Nutribullet Treviso Basket',
            'homeScore' => 45,
            'awayScore' => 20,
        ],
        [
            'home' => 'Banco di Sardegna Sassari',
            'away' => 'Dolomiti Energia Trentino',
            'homeScore' => 10,
            'awayScore' => 32,
        ],
        [
            'home' => 'Givova Scafati Basket',
            'away' => 'Emporio Armani Milano',
            'homeScore' => 15,
            'awayScore' => 50,
        ],
        [
            'home' => 'Germani Brescia',
            'away' => 'Umana Rever Venezia',
            'homeScore' => 23,
            'awayScore' => 28,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Italy, Seria A - Basketball Scores</h1>
    <ul>
        <?php foreach ($matches as $match){?>
            <li><?php echo $match['home']." - ".$match['away']." | ".$match['homeScore']." - ".$match['awayScore']?></li>
        <?php }?>
    </ul>
</body>
</html>
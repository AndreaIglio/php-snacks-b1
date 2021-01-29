<?php 

/* 



ISTRUZIONI:
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60

*/

$matches = [

    "Giornata 1" => [
        "Game 1" => [
            "Home" => [
                "name" => "Sassari",
                "points" => 69,
            ],
            "Away" => [
                "name" => "Brindisi",
                "points" => 71,
            ],

            ],
        "Game 2" => [
            "Home" => [
                "name" => "Fortitudo Bologna",
                "points" => 69,
            ],
            "Away" => [
                "name" => "Reyer Venezia",
                "points" => 71,
            ],
            ],
            ],
    "Giornata 2" => [
        "Game 1" => [
            "Home" => [
                "name" => "Brindisi",
                "points" => 65,
            ],
            "Away" => [
                "name" => "Fortitudo Bologna",
                "points" => 61,
            ],
]
    ],
            ];
// var_dump($matches);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks b1</title>
</head>
<body>
    
<?php 

for ($i = 1; $i <count($matches) + 1; $i++){ ?>

    <h1><?php  echo "Giornata $i"  ?></h1>

<?php
    foreach($matches["Giornata $i"] as $match){ ?>

     <h1><?php echo $match["Home"]["name"] . " - " . $match["Away"]["name"] . " | " . $match["Home"]["points"] . " - " . $match["Away"]["points"]  ?></h1>    
       

   <?php  }
    
}

?>
    

    
 
</body>
</html>

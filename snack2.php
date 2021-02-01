<?php
/*
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if(strlen($name)> 3 && strpos($email, "@") && strpos($email, ".") && (is_numeric($age)) ){
   echo ('You can access');
}
else {
echo ('You cannot access');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>
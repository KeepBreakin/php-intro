<?php
require_once('blackjack.php');

if(isset($_POST['hit'])){
    $game->Hit();
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
    <input type="submit" value="Hit" name="hit">
    <input type="submit" value="Stand" name="stand">

    <input type="submit" value="Surrender" name="surrender">
</form>
</body>

</html>
<?php

session_start();
// Array
$players = ['Berge', 'Samatta', 'Trossard', 'Ndongala'];

// Associative array
$playersAge = ['Berge' => '24', 'Samatta' => '26', 'Trossard' => '22'];

// Create class & object
class player
{
    public $firstName = 'Joseph';
    public $lastName = 'Aidoo';
}

$aido = new player;

// init counter = 0 ; test counter = 1; increment counter = +1
for ($i = 0; $i < 1; $i++) {
    //Push one item into array
    $players[] = 'Ito';
    print "<pre>";
    print_r($players);
    print "</pre>";

    //Push one item into Associative array
    $playersAge['Ito'] = '29';
    print "<pre>";
    print_r($playersAge);
    print "</pre>";

    // Push one item into class/object
    $aido->age = 26;
    print "<pre>";
    print_r($aido);
    print "</pre>";
}



// If statement that edits a random item above with a probability of 20%

$randomNumber = mt_rand(1, 100);

if ($randomNumber >= 20) {
    $random_key1 = array_rand($players, 4);
    echo $players[$random_key1[0]] . "<br>";
    echo $players[$random_key1[1]] . "<br>";
    echo $players[$random_key1[2]] . "<br>";
    echo $players[$random_key1[3]] . "<br>";

    echo "<br>";

    $random_key2 = array_rand($playersAge, 3);
    echo $playersAge[$random_key2[0]] . "<br>";
    echo $playersAge[$random_key2[1]] . "<br>";
    echo $playersAge[$random_key2[2]] . "<br>";
    SaveAll($players, $playersAge, $aido);
}

// Storing arrays & object inside SESSIONS
function SaveAll($players, $playersAge, $aido)
{
    $_SESSION['ArrPlayers'] = $players;
    $_SESSION['AssoArrAge'] = $playersAge;
    $_SESSION['ObjPlayer'] = $aido;
}

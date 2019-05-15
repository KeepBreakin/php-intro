<?php
session_start();
// connection DB
require_once('dbconnect.php');

//Put in variable what user has posted (title,score,soort)
if (isset($_POST['submit'])) {
    $titel = $_POST['titel'];
    $score = $_POST['score'];
    $soort = $_POST['soort'];


    //if fields empty show errorMsg through SESSION otherwise execute QUERY 
    if (empty($titel) || empty($score) || empty($soort)) {
        $_SESSION['emptyFields'] = 'There are some empty fields';
    } else {
        $sql = "INSERT INTO Top (titel,score,soort) VALUES (:titel,:score, :soort)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindvalue('titel', $titel);
        $stmt->bindvalue('score', $score);
        $stmt->bindvalue('soort', $soort);


        $stmt->execute();

        if ($stmt) {
            $_SESSION['addRecord'] = 'Record succesfully submitted';
            $capnum = 0;
            $capnum++;
            $_SESSION['capnum'] = $capnum;
        }
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="movies.css" />

    <title>Document</title>
</head>

<body>

    <div class="container">
        <form method="post" action="setup.php">
            <div class="form-input"><input type="text" name="titel" placeholder="Titel" /> </div>
            <?php if (isset($_SESSION['capnum'])) {
            echo $_SESSION['capnum'];
        } ?>
            <div class="form-input"><input type="number" name="score" placeholder="Score" min=0 max=10 /> </div>
            <div class="form-input"><select name="soort" class="soort">
                    <option value="Movie">Movie</option>
                    <option value="Show">Show</option>
                </select></div>
            <div class="form-input"><input type="hidden" name="userId" /> </div>
            <button type="submit" name="submit" class="btn-submit">Submit record</button>

        </form>

        <form action="result.php" method="get">
            <button type="submit" name="submit" class="btn-get">Show all records</button>

        </form>

        <?php
        if (isset($_SESSION['emptyFields'])) {

            echo $_SESSION['emptyFields'];
            ?>
        <?php

    } ?>
        <?php if (isset($_SESSION['addRecord'])) {
            echo $_SESSION['addRecord'];
        }
        session_destroy();
        ?>



    </div>

</body>

</html>
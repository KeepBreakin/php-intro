<?php
session_start();

require_once('dbconnect.php');
if (isset($_POST['submit'])) {
    $titel = $_POST['titel'];
    $score = $_POST['score'];
    $soort = $_POST['soort'];
    $user_id = $_POST['user_id'];

    

    if (empty($titel) || empty($score) || empty($soort)) {
        $_SESSION['emptyFields'] = 'There are some empty fields';
    } else {
        $sql = "INSERT INTO Top (titel,score,soort) VALUES (:titel, :score, :soort)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindvalue('titel', $titel);
        $stmt->bindvalue('score', $score);
        $stmt->bindvalue('soort', $soort);

        $stmt->execute();

        if ($stmt) {
            echo 'NICE!';
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
            <div class="form-input"><input type="number" name="score" placeholder="Score" min=0 max=10 /> </div>
            <div class="form-input"><select name="soort">
                    <option value="Movie">Movie</option>
                    <option value="Show">Show</option>

                </select></div>
                <div class="form-input"><input type="hidden" name="user_id" /> </div>
            <button type="submit" name="submit" class="btn-submit">Submit</button>

        </form>

        <form action="result.php" method="get">
        <button type="submit" name="submit" class="btn-get">GET</button>

</form>

        <?php
        if (isset($_SESSION['emptyFields'])) {

            echo $_SESSION['emptyFields'];
            ?>
            <?php
            session_destroy();
        } ?>
    </div>

</body>

</html>
<?php

$array = [
    ["tv-show" => "Sons of anarchy", "rating" => "9"],
    ["tv-show" => "The Office", "rating" => "8"],
    ["tv-show" => "Breaking bad", "rating" => "7"],
    ["tv-show" => "Game of Thrones", "rating" => "10"],
    ["tv-show" => "Ozark", "rating" => "6"],
    ["tv-show" => "Prison break", "rating" => "7"],
    ["tv-show" => "Weeds", "rating" => "8"],
    ["tv-show" => "Dexter", "rating" => "9"]

    
];
// echo http_build_query($array);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="loop.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <table class="table table-hover table-dark">
            <thead>
                    <th scope="col">Tv-Show</th>
                    <th scope="col">Rating</th>
            </thead>
            <tbody>

            </tbody>
            <?php
            $link = '#';
            foreach ($array as $row) {
                echo "<tr>";
                echo "<td><a href='$link'>" . $row['tv-show'] . " </a></td>";
                echo "<td><a href='$link' >" . $row['rating'] . "</a></td>";
                
                // echo "<td>" . $row['tv-show'] . "</td>";
                // echo "<td>" . $row['rating'] . "</td>";
                
            } ?>

        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
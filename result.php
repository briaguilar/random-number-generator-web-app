<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dice Roll Result</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@300..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Dice Roll Result</h1>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num_dice = $_POST["num_dice"];
                    $dice_type = $_POST["dice_type"];

                    echo "<p>Number of Dice: $num_dice</p>";
                    echo "<p>Type of Dice: $dice_type</p>";

                    $total=0;
                    $rolls = array();
                    for ($i=0; $i < $num_dice; $i++) {
                        $roll = rand(1, $dice_type);
                        $rolls[] = $roll;
                        $total += $roll;
                    }

                    echo "<p>Total Count: $total</p>";
                    echo "<p>Individual Rolls:</p>";
                    echo "<ul>";
                    foreach ($rolls as $roll) {
                        echo "<li>$roll</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No data submitted</p>";
                }
            ?>
        </div>
    </body>
</html
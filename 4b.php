<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floyd's Triangle Generator</title>
</head>
<body>

    <h2>Floyd's Triangle</h2>

    <form action="" method="post">
        <label for="rows">Enter the number of rows:</label>
        <input type="number" name="rows" id="rows" min="1" required>
        <button type="submit">Generate Floyd's Triangle</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = isset($_POST["rows"]) ? $_POST["rows"] : null;

        if (!is_numeric($rows) || $rows <= 0) {
            echo "<p>Please enter a valid positive integer for the number of rows.</p>";
        } else {
            generateFloydsTriangle($rows);
        }
    }

    function generateFloydsTriangle($rows) {
        $number = 1;

        echo "<p>Floyd's Triangle:</p>";

        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $number . " ";
                $number++;
            }
            echo "<br>";
        }
    }
    ?>

</body>
</html>

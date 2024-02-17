4a. Develop a PHP program to find the square root of a number by using the newton’s algorithm.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Root Calculator</title>
</head>
<body>

    <h2>Square Root Calculator</h2>

    <form action="" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" step="any" name="number" id="number" required>
        <button type="submit">Calculate Square Root</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = isset($_POST["number"]) ? $_POST["number"] : null;

        if (!is_numeric($number)) {
            echo "<p>Please enter a valid number.</p>";
        } else {
            $result = squareRoot($number);
            echo "<p>The square root of $number is approximately $result.</p>";
        }
    }

    function squareRoot($number) {
        // Newton's algorithm for square root
        $guess = $number / 2;
        $epsilon = 1e-10; // small value for precision

        while (abs($guess * $guess - $number) > $epsilon) {
            $guess = 0.5 * ($guess + $number / $guess);
        }

        return $guess;
    }
    ?>

</body>
</html>

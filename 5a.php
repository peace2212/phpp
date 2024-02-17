5a. Develop a PHP application that reads a list of numbers and calculates mean and standard deviation.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mean and Standard Deviation Calculator</title>
</head>
<body>

    <h2>Mean and Standard Deviation Calculator</h2>

    <form action="" method="post">
        <label for="numbers">Enter a list of numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbersInput = isset($_POST["numbers"]) ? $_POST["numbers"] : null;

        if (empty($numbersInput)) {
            echo "<p>Please enter a list of numbers.</p>";
        } else {
            $numbers = array_map('floatval', explode(',', $numbersInput));

            if (count($numbers) < 2) {
                echo "<p>Please enter at least two numbers for calculation.</p>";
            } else {
                $mean = calculateMean($numbers);
                $stdDev = calculateStandardDeviation($numbers);

                echo "<p>Mean: $mean</p>";
                echo "<p>Standard Deviation: $stdDev</p>";
            }
        }
    }

    function calculateMean($numbers) {
        $sum = array_sum($numbers);
        $count = count($numbers);
        return $count > 0 ? $sum / $count : 0;
    }

    function calculateStandardDeviation($numbers) {
        $mean = calculateMean($numbers);
        $variance = 0;

        foreach ($numbers as $number) {
            $variance += pow($number - $mean, 2);
        }

        $variance /= count($numbers);
        return sqrt($variance);
    }
    ?>

</body>
</html>

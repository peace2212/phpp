5b. Develop a PHP application that reads scores between 0 and 100 (possibly including both 0 and 100) and creates a histogram array whose elements contain the number of scores between 0 and 9, 10 and 19, etc. The last “box” in the histogram should include scores between 90 and 100. Use a function to generate the histogram.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Histogram Generator</title>
</head>
<body>

    <h2>Score Histogram Generator</h2>

    <form action="" method="post">
        <label for="scores">Enter scores (comma-separated between 0 and 100):</label>
        <input type="text" name="scores" id="scores" required>
        <button type="submit">Generate Histogram</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $scoresInput = isset($_POST["scores"]) ? $_POST["scores"] : null;

        if (empty($scoresInput)) {
            echo "<p>Please enter scores.</p>";
        } else {
            $scores = array_map('intval', explode(',', $scoresInput));

            if (validateScores($scores)) {
                $histogram = generateHistogram($scores);

                echo "<h3>Score Histogram</h3>";
                echo "<pre>";
                print_r($histogram);
                echo "</pre>";
            } else {
                echo "<p>Please enter valid scores between 0 and 100.</p>";
            }
        }
    }

    function validateScores($scores) {
        foreach ($scores as $score) {
            if (!is_numeric($score) || $score < 0 || $score > 100) {
                return false;
            }
        }
        return true;
    }

    function generateHistogram($scores) {
        $histogram = array_fill(0, 11, 0); // Initialize histogram array with 11 elements

        foreach ($scores as $score) {
            $index = floor($score / 10); // Determine the index for the histogram array
            $histogram[$index]++;
        }

        return $histogram;
    }
    ?>

</body>
</html>

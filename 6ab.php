6a. Develop PHP program to demonstrate the date() with different parameter options.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date() Function Demo</title>
</head>
<body>
    <h1>Date() Function Demo</h1>
    <p>Current Date and Time (Indian Standard Time):</p>
    <?php
    // Set timezone to Indian Standard Time
    date_default_timezone_set('Asia/Kolkata');
    ?>
    <p><?php echo date('Y-m-d H:i:s'); ?></p>
    
    <h2>Formatting Options:</h2>
    <ul>
        <li>Year-Month-Day: <?php echo date('Y-m-d'); ?></li>
        <li>Month-Day-Year: <?php echo date('m-d-Y'); ?></li>
        <li>Day-Month-Year: <?php echo date('d-m-Y'); ?></li>
        <li>Hour:Minute:Second: <?php echo date('H:i:s'); ?></li>
        <li>Day of the Week: <?php echo date('l'); ?></li>
        <li>Month Name: <?php echo date('F'); ?></li>
    </ul>
</body>
</html>

Output:

 
6.b Develop a PHP program to generate the Fibonacci series using a recursive function. 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series Generator</h1>
    <form method="post">
        <label for="terms">Enter the number of terms:</label>
        <input type="number" id="terms" name="terms">
        <button type="submit">Generate Fibonacci Series</button>
    </form>

    <?php
    // Recursive function to generate Fibonacci series
    function fibonacci($n) {
        if ($n <= 1) {
            return $n;
        } else {
            return (fibonacci($n - 1) + fibonacci($n - 2));
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = $_POST["terms"];

        echo "<h2>Fibonacci Series:</h2>";
        echo "<p>";
        for ($i = 0; $i < $terms; $i++) {
            echo fibonacci($i);
            echo ($i < $terms - 1) ? ", " : ""; // Add comma if not the last term
        }
        echo "</p>";
    }
    ?>
</body>
</html>


Output:
 

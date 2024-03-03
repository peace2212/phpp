11.	a. a. Develop a PHP program to count the occurrences of Aadhaar numbers present in a text.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhaar Number Occurrence Counter</title>
</head>
<body>
    <h1>Aadhaar Number Occurrence Counter</h1>

    <!-- Form to input text -->
    <form method="post">
        <label for="text">Enter text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>
        <button type="submit" name="submit">Count Occurrences</button>
    </form>

    <?php
    // Function to count occurrences of Aadhaar numbers in text
    function countAadhaarOccurrences($text) {
        // Regular expression to match Aadhaar numbers
        $pattern = '/\b[0-9]{4}\s[0-9]{4}\s[0-9]{4}\b/';

        // Count occurrences of Aadhaar numbers
        preg_match_all($pattern, $text, $matches);

        // Return count of occurrences
        return count($matches[0]);
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve input text from form
        $text = $_POST['text'];

        // Count occurrences of Aadhaar numbers in text
        $occurrences = countAadhaarOccurrences($text);

        // Display the count of occurrences
        echo "<h2>Occurrences of Aadhaar Numbers:</h2>";
        echo "<p>$occurrences</p>";
    }
    ?>
</body>
</html>

Output:
 
11 b. Develop a PHP program to find the occurrences of a given pattern and replace them with a text. 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Occurrence Replacer</title>
</head>
<body>
    <h1>Pattern Occurrence Replacer</h1>

    <!-- Form to input text and pattern -->
    <form method="post">
        <label for="text">Enter text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>
        <label for="pattern">Enter pattern:</label><br>
        <input type="text" id="pattern" name="pattern"><br><br>
        <label for="replacement">Enter replacement text:</label><br>
        <input type="text" id="replacement" name="replacement"><br><br>
        <button type="submit" name="submit">Replace Occurrences</button>
    </form>

    <?php
    // Function to find occurrences of a pattern and replace them with a text
    function replaceOccurrences($text, $pattern, $replacement) {
        // Perform the replacement
        $result = preg_replace($pattern, $replacement, $text, -1, $count);

        // Return the result and the count of replacements
        return array($result, $count);
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve input data from form
        $text = $_POST['text'];
        $pattern = '/' . preg_quote($_POST['pattern'], '/') . '/'; // Convert pattern to regex
        $replacement = $_POST['replacement'];

        // Perform the replacement
        list($result, $count) = replaceOccurrences($text, $pattern, $replacement);

        // Display the result and count of replacements
        echo "<h2>Replaced Text:</h2>";
        echo "<p>$result</p>";
        
    }
    ?>
</body>
</html>


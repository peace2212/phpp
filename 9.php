9 Develop a PHP program to filter the elements of an array with key names. 
Sample Input Data: 
1st array: ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black') 
2nd array: ('c2', 'c4') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Key Filter</title>
</head>
<body>
    <h1>Array Key Filter</h1>

    <!-- Form to input data -->
    <form method="post">
        <label for="array1">Enter the 1st array:</label><br>
        <input type="text" id="array1" name="array1" placeholder="Enter the 1st array (key-value pairs separated by commas)" style="width: 400px;"><br><br>
        <label for="array2">Enter the 2nd array:</label><br>
        <input type="text" id="array2" name="array2" placeholder="Enter the 2nd array (comma-separated keys)" style="width: 400px;"><br><br>
        <button type="submit" name="submit">Filter Array</button>
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Get input arrays from form
        $array1_input = $_POST['array1'];
        $array2_input = $_POST['array2'];

        // Convert input strings to arrays
        $array1 = explode(',', $array1_input);
        $array2 = explode(',', $array2_input);

        // Convert key-value pairs to associative array
        $data = [];
        foreach ($array1 as $item) {
            $key_value = explode('=>', $item);
            $key = trim($key_value[0]);
            $value = trim($key_value[1]);
            $data[$key] = $value;
        }

        // Filter elements based on keys in array2
        $filtered_array = array_filter($data, function ($key) use ($array2) {
            return in_array(trim($key), $array2);
        }, ARRAY_FILTER_USE_KEY);

        // Display the filtered array
        echo "<h2>Filtered Array:</h2>";
        echo "<pre>";
        print_r($filtered_array);
        echo "</pre>";
    }
    ?>
</body>
</html>

Output:

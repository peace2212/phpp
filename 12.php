12.	Develop a PHP program to read the contents of a HTML form and display the contents on a browser. 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Content Display</title>
</head>
<body>
    <h1>Form Content Display</h1>

    <!-- Form to input data -->
    <form method="post">
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Enter your email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve input data from form
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Display the input data
        echo "<h2>Submitted Information:</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
    }
    ?>
</body>
</html>


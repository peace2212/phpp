<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area Calculator</title>
</head>
<body>
  <h2>Area Calculator</h2>
  <form method="post">
    <label for="base">Base:</label>
    <input type="number" id="base" name="base" required><br><br>
    
    <label for="height">Height:</label>
    <input type="number" id="height" name="height" required><br><br>
    
    <input type="submit" name="calculate" value="Calculate">
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $base = $_POST['base'];
    $height = $_POST['height'];
    $areaRectangle = $base * $height;
    $areaTriangle = ($base * $height) / 2;

    echo "<br><strong>Results:</strong><br>";
    echo "The area of a rectangle with base $base and height $height is $areaRectangle square units.<br>";
    echo "The area of a triangle with base $base and height $height is $areaTriangle square units.";
  }
  ?>
</body>
</html>

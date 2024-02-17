1b) Develop a PHP program to calculate compound interest .

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compound Interest Calculator</title>
</head>
<body>
  <h2>Compound Interest Calculator</h2>
  <form method="post">
    <label for="principal">Principal Amount:</label>
    <input type="number" id="principal" name="principal" required><br><br>
    <label for="rate">Annual Interest Rate (%):</label>
    <input type="number" id="rate" name="rate" step="0.01" required><br><br>
    <label for="time">Number of Years:</label>
    <input type="number" id="time" name="time" required><br><br>
    <input type="submit" name="calculate" value="Calculate">
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $principal = $_POST['principal'];
    $rate = $_POST['rate'] / 100; // Convert percentage to decimal
    $time = $_POST['time'];
    $compound_per_year = 1;
    // Calculate compound interest
    $compound_interest = $principal * (1 + ($rate / $compound_per_year)) ** ($compound_per_year * $time) - $principal;
    echo "<br><strong>Results:</strong><br>";
    echo "Principal Amount: $principal<br>";
    echo "Annual Interest Rate: $rate<br>";
    echo "Number of Years: $time<br>";
       echo "Compound Interest: $compound_interest";
  }
  ?>
</body>
</html>

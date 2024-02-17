3. Develop a PHP Program(s) to check given number is:
(i) Odd or even 
(ii) Divisible by a given number (N)
(iii) Square of a another number
	
<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>

<h2>Number Checker</h2>

<form method="post" action="">
    Enter a number: <input type="text" name="number" required><br>
    Enter a divisor (N): <input type="text" name="divisor" required><br>
    Enter a base number: <input type="text" name="baseNumber" required><br>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $givenNumber = $_POST["number"];
    $divisor = $_POST["divisor"];
    $baseNumber = $_POST["baseNumber"];

    // Function to check if a number is odd or even
    function checkOddEven($number) {
        return ($number % 2 == 0) ? "even" : "odd";
    }

    // Function to check if a number is divisible by N
    function checkDivisibility($number, $divisor) {
        return ($number % $divisor == 0) ? "divisible by $divisor" : "not divisible by $divisor";
    }

    // Function to check if a number is the square of another number
    function checkSquare($number, $base) {
        $square = $base * $base;
        return ($number == $square) ? "is the square of $base" : "is not the square of $base";
    }

    // Output the results
    echo "Given number $givenNumber is " . checkOddEven($givenNumber) . ".<br>";
    echo "It is " . checkDivisibility($givenNumber, $divisor) . ".<br>";
    echo "And it " . checkSquare($givenNumber, $baseNumber) . ".<br>";
}
?>

</body>
</html>

Output: 

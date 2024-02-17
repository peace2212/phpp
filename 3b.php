3b. Develop a PHP Program to compute the roots of a quadratic equation by accepting the coefficients. Print the appropriate messages.

<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Solver</title>
</head>
<body>

<h2>Quadratic Equation Solver</h2>

<form method="post" action="">
    Enter coefficient a: <input type="text" name="a" required><br>
    Enter coefficient b: <input type="text" name="b" required><br>
    Enter coefficient c: <input type="text" name="c" required><br>
    <input type="submit" value="Solve">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    // Function to calculate the discriminant
    function calculateDiscriminant($a, $b, $c) {
        return $b * $b - 4 * $a * $c;
    }

    // Function to calculate the roots
    function calculateRoots($a, $b, $c) {
        $discriminant = calculateDiscriminant($a, $b, $c);

        if ($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            return "Root 1: $root1, Root 2: $root2";
        } elseif ($discriminant == 0) {
            $root = -$b / (2 * $a);
            return "Root: $root (double root)";
        } else {
            return "No real roots (complex roots)";
        }
    }

    // Output the results
    echo "Quadratic equation: $a*x^2 + $b*x + $c = 0<br>";
    $roots = calculateRoots($a, $b, $c);
    echo "Roots: $roots";
}
?>
</body>
</html>

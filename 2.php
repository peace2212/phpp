(i)	Strings represented with literals (single quote or double quote).
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Concatenation</title>
</head>
<body>

<?php
// Concatenation using literals
$string1 = 'Hello, ';
$string2 = "world!";
$result = $string1 . $string2;

echo $result;

?>

</body>
</html>

Output: Hello, world!

(ii)	Strings as variables. 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Concatenation</title>
</head>
<body>

<?php
// Concatenation using variables
$name = "John";
$greeting = "Hello, " . $name . "!";
echo $greeting;
?>

</body>
</html>
Output: Hello, John!

(iii)Multiple strings represented with literals (single quote or double quote) and          variables.
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Concatenation</title>
</head>
<body>

<?php
// Concatenation using literals and variables
$firstName = 'John';
$lastName = "Doe";
$greeting1 = "Hello, " . $firstName . ' ' . $lastName . "!";
echo $greeting1;
?>

</body>
</html>
Output: Hello, John Doe!

(iv)Strings and string variables containing single quotes as part string contents.
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Concatenation</title>
</head>
<body>

<?php
// Concatenation with strings containing single quotes
$singleQuotedString = 'It\'s a sunny day.';
$variableWithSingleQuotes = "I said, '$singleQuotedString'";
echo $variableWithSingleQuotes;
?>

</body>
</html>
Output: I said, 'It's a sunny day.'

(v)Strings containing HTML segments having elements with attributes.
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Concatenation</title>
</head>
<body>

<?php
// Concatenation with HTML segments
$element = 'div';
$className = 'my-class';
$content = 'This is PHP LAB.';
$htmlString = '<' . $element . ' class="' . $className . '">' . $content . '</' . $element . '>';
echo $htmlString;


?>

</body>
</html>
Output: This is PHP LAB.


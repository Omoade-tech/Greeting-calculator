<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREETINGS_CALCULATOR</title>
</head>
<body>
<form method="GET" action="form">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operator">Choose an operation:</label>
        <select id="operator" name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
 

$name = "Adedoyin Sodiq <br><br>";
const PI = "3.14159 <br><br>";

// Set the date format to hour
$currentHour = date("H");

// Set the code to greetings based on the hour
if ($currentHour < 12) {
    echo "Good Morning, " . $name ;
} elseif ($currentHour < 17) {
    echo "Good Afternoon, " . $name;
} else {
    echo "Good Evening, " . $name;
}

// q3 defined two variables
$num1 = 20;
$num2 = 10;

$num1 = (string) $num1;
$num2 = (float) $num2;

// defined variables operators
$operator = "/";  

if ($operator == "+") {
    $result = $num1 + $num2;
    echo "$num1 + $num2 = $result <br>";

} elseif ($operator == "-") {
    $result = $num1 - $num2;
    echo "$num1 - $num2 = $result  <br>";

} elseif ($operator == "*") {
    $result = $num1 * $num2;
    echo "$num1 * $num2 = $result  <br>";

} elseif ($operator == "/") {
    if ($num2 != 0) { 
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result  <br>";
    } else {
        echo "Error: Division by zero is not allowed.";
    }
} 

// displaying the value of pi

echo "The value of PI is:" .PI;

// the file name
echo  __FILE__ ;
echo "<br><br>";

var_dump($num1 );
echo "<br><br>";
var_dump($num2);

// $num1 = $_GET["$num1"];
// $num2 = $_GET["$num2"];
// $operator = $_GET["$operator"];
?>

    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator Using PHP</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <input type="number" name="Operand1" placeholder="Enter first number" required>
        <input type="number" name="Operand2" placeholder="Enter second number" required>
        <input type="submit" name="Calculate" value="+">
        <input type="submit" name="Calculate" value="-">
        <input type="submit" name="Calculate" value="x">
        <input type="submit" name="Calculate" value="/">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Operand1 = $_POST['Operand1'];
        $Operand2 = $_POST['Operand2'];
        $Operator = $_POST['Calculate'];

        // Validation
        if ($Operand1 == '' || $Operand2 == '') {
            echo "<p>Error: The input values are required.</p>";
        } elseif (!is_numeric($Operand1) || !is_numeric($Operand2)) {
            echo "<p>Error: The input value must be a number only.</p>";
        } elseif ($Operator == "/" && ($Operand2 == 0)) {
            echo "<p>Error: Cannot divide by zero.</p>";
        } else {
            // Perform calculation
            if ($Operator == "+") {
                $Result = $Operand1 + $Operand2;
            } elseif ($Operator == "-") {
                $Result = $Operand1 - $Operand2;
            } elseif ($Operator == "x") {
                $Result = $Operand1 * $Operand2;
            } elseif ($Operator == "/") {
                $Result = $Operand1 / $Operand2;
            }
            echo "<p>Result: $Result</p>";
        }
    }
    ?>
</body>
</html>

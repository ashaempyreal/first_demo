<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

    <h2>Simple Calculator</h2>

    <form method="post" action="">
        <label>Number 1:</label>
        <input type="number" name="num1" required><br><br>

        <label>Number 2:</label>
        <input type="number" name="num2" required><br><br>

        <label>Answer:</label>
        <input type="text" name="answer" readonly><br><br>

        <input type="submit" name="add" value="Addition">
        <input type="submit" name="subtract" value="Subtraction">
        <input type="submit" name="multiply" value="Multiplication">
        <input type="submit" name="divide" value="Division">
    </form>

    <?php
    // Function for addition
    function addition($num1, $num2) {
        return $num1 + $num2;
    }

    // Function for subtraction
    function subtraction($num1, $num2) {
        return $num1 - $num2;
    }

    // Function for multiplication
    function multiplication($num1, $num2) {
        return $num1 * $num2;
    }

    // Function for division
    function division($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Undefined (Division by zero)";
        }
    }

    // Check which button is clicked and perform the corresponding operation
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (isset($_POST['add'])) {
            $result = addition($num1, $num2);
        } elseif (isset($_POST['subtract'])) {
            $result = subtraction($num1, $num2);
        } elseif (isset($_POST['multiply'])) {
            $result = multiplication($num1, $num2);
        } elseif (isset($_POST['divide'])) {
            $result = division($num1, $num2);
        }

        // Display the result in the answer field
        echo '<script>';
        echo 'document.getElementsByName("answer")[0].value = ' . json_encode($result) . ';';
        echo '</script>';
    }
    ?>

</body>
</html>

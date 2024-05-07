<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Generate Multiplication Table</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input number from form
        $number = $_POST["number"];

        // Check if the input number is valid (not empty and greater than 0)
        if (!empty($number) && $number > 0) {
            echo "<h3>Multiplication Table of $number:</h3>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$number x $i</td><td>=</td><td>" . ($number * $i) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a valid number greater than 0.</p>";
        }
    }
    ?>
</body>
</html>
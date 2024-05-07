<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>
    <h2>Enter a String to Reverse</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="input_string">
        <input type="submit" value="Reverse">
    </form>

    <?php
    // Function to reverse a string
    function reverseString($str) {
        return strrev($str);
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if input_string is set and not empty
        if (isset($_POST["input_string"]) && !empty($_POST["input_string"])) {
            $input_string = $_POST["input_string"];
            $reversed_string = reverseString($input_string);
            echo "<h2>Reversed String:</h2>";
            echo "<p>$reversed_string</p>";
        } else {
            echo "<p>Please enter a string.</p>";
        }
    }
    ?>
</body>
</html>
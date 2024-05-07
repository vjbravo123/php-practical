<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Check Palindrome</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["inputString"])) {
        $inputString = $_POST["inputString"];
        $isPalindrome = check_palindrome($inputString);
        $result = $isPalindrome ? "is a palindrome." : "is not a palindrome.";
        echo "<p>'<strong>$inputString</strong>' $result</p>";
    }

    function check_palindrome($str) {
        // Remove spaces and non-alphanumeric characters
        $cleanedStr = preg_replace("/[^A-Za-z0-9]/", "", $str);
        // Convert to lowercase to make the check case-insensitive
        $cleanedStr = strtolower($cleanedStr);

        // Check if the cleaned string is the same forward and backward
        return $cleanedStr === strrev($cleanedStr);
    }
    ?>
</body>
</html>

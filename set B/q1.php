<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Count Vowels</title>
</head>
<body>
    <h1>Vowel Counting Tool</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Count Vowels</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["inputString"])) {
        $inputString = $_POST["inputString"];
        $vowelCount = count_vowels($inputString);
        echo "<p>Number of vowels in '<strong>$inputString</strong>': $vowelCount</p>";
    }

    function count_vowels($str) {
        // Define the vowels
        $vowels = "aeiouAEIOU";
        $count = 0;

        // Count vowels
        for ($i = 0; $i < strlen($str); $i++) {
            if (strpos($vowels, $str[$i]) !== false) {
                $count++;
            }
        }

        return $count;
    }
    ?>
</body>
</html>

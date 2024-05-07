<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Substring</title>
</head>
<body>
    <h2>Check Substring</h2>
    <form method="post" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString"><br><br>
        <input type="submit" value="Check Substring">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];

        if (strpos($inputString, 'India') !== false) {
            echo "<p>The string contains the substring 'India'.</p>";
        } else {
            echo "<p>The string does not contain the substring 'India'.</p>";
        }
    }
    ?>
</body>
</html>


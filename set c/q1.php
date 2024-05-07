<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h2>Find Largest Number</h2>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1"><br><br>

        <label for="num2">Enter second number:</label>
        <input type="text" id="num2" name="num2"><br><br>

        <label for="num3">Enter third number:</label>
        <input type="text" id="num3" name="num3"><br><br>

        <input type="submit" value="Find Largest Number">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        function findLargest($num1, $num2, $num3) {
            $max = $num1;

            if ($num2 > $max) {
                $max = $num2;
            }

            if ($num3 > $max) {
                $max = $num3;
            }

            return $max;
        }

        $largest = findLargest($num1, $num2, $num3);
        echo "<p>The largest number is: " . $largest . "</p>";
    }
    ?>
</body>
</html>


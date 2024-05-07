<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Even and Odd Numbers</title>
</head>
<body>
    <h2>Count Even and Odd Numbers</h2>
    <form method="post" action="">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numbers = array();
            $evenCount = 0;
            $oddCount = 0;

            for ($i = 1; $i <= 10; $i++) {
                $num = $_POST["num$i"];
                if (!empty($num)) {
                    $numbers[] = $num;
                }
            }

            foreach ($numbers as $number) {
                if ($number % 2 == 0) {
                    $evenCount++;
                } else {
                    $oddCount++;
                }
            }

            echo "<p>Number of even numbers: $evenCount</p>";
            echo "<p>Number of odd numbers: $oddCount</p>";
        }
        ?>

        <label for="num1">Enter number 1:</label>
        <input type="number" id="num1" name="num1"><br><br>

        <label for="num2">Enter number 2:</label>
        <input type="number" id="num2" name="num2"><br><br>

        <label for="num3">Enter number 3:</label>
        <input type="number" id="num3" name="num3"><br><br>

        <label for="num4">Enter number 4:</label>
        <input type="number" id="num4" name="num4"><br><br>

        <label for="num5">Enter number 5:</label>
        <input type="number" id="num5" name="num5"><br><br>

        <label for="num6">Enter number 6:</label>
        <input type="number" id="num6" name="num6"><br><br>

        <label for="num7">Enter number 7:</label>
        <input type="number" id="num7" name="num7"><br><br>

        <label for="num8">Enter number 8:</label>
        <input type="number" id="num8" name="num8"><br><br>

        <label for="num9">Enter number 9:</label>
        <input type="number" id="num9" name="num9"><br><br>

        <label for="num10">Enter number 10:</label>
        <input type="number" id="num10" name="num10"><br><br>

        <input type="submit" value="Count Numbers">
    </form>
</body>
</html>


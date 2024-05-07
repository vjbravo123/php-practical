<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Names Starting with 'A'</title>
</head>
<body>
    <h2>Count Names Starting with 'A'</h2>
    <form method="post" action="">
        <?php
        $classmates = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 5; $i++) {
                $name = $_POST["name$i"];
                if (!empty($name)) {
                    $classmates[] = $name;
                }
            }

            $countA = 0;
            foreach ($classmates as $name) {
                if (strtoupper(substr($name, 0, 1)) == 'A') {
                    $countA++;
                }
            }
            echo "<p>Number of names starting with 'A': $countA</p>";
        }
        ?>

        <label for="name1">Enter name 1:</label>
        <input type="text" id="name1" name="name1"><br><br>

        <label for="name2">Enter name 2:</label>
        <input type="text" id="name2" name="name2"><br><br>

        <label for="name3">Enter name 3:</label>
        <input type="text" id="name3" name="name3"><br><br>

        <label for="name4">Enter name 4:</label>
        <input type="text" id="name4" name="name4"><br><br>

        <label for="name5">Enter name 5:</label>
        <input type="text" id="name5" name="name5"><br><br>

        <input type="submit" value="Count Names">
    </form>
</body>
</html>


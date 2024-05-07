<?php
// Define the number of rows
$rows = 5;

// Loop through each row
for ($i = 1; $i <= $rows; $i++) {
    // Print '*' for each row
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    // Move to the next line after each row
    echo "\n";
}
?>
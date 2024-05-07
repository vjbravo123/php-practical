<?php
// Initialize sum
$sum = 0;

// Loop through the series
for ($i = 1; $i <= 10; $i++) {
    // Add the reciprocal of each number to the sum
    $sum += 1 / $i;
}

// Print the sum
echo "Sum of the series: " . $sum;
?>
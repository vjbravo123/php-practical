<?php
// Number of terms to display
$terms = 10;

// Initialize the first two terms of the Fibonacci series
$first = 0;
$second = 1;

// Display the first two terms
echo "$first $second ";

// Calculate and display the next terms in the Fibonacci series
for ($i = 2; $i < $terms; $i++) {
    $next = $first + $second;
    echo $next . " ";
    
    // Update the last two terms
    $first = $second;
    $second = $next;
}
?>

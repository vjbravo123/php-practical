<?php
// Function to calculate percentage
function calculatePercentage($marks) {
    $totalMarks = array_sum($marks);
    $totalSubjects = count($marks);
    $percentage = ($totalMarks / ($totalSubjects * 100)) * 100;
    return $percentage;
}

// Input name and marks
$name = "John Doe"; // You can modify this to accept user input
$subjectMarks = array(85, 90, 78); // Example marks for three subjects

// Calculate percentage
$percentage = calculatePercentage($subjectMarks);

// Print result
echo "Name: " . $name . "\n";
echo "Percentage: " . $percentage . "%";
?>
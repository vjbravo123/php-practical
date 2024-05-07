<?php
// Define the associative array
$employees = array(
    "E1001" => "John Doe",
    "E1002" => "Jane Smith",
    "E1003" => "Alice Johnson",
    "E1004" => "Bob Andrews"
);

// Print all the keys (Employee Codes)
echo "Employee Codes:<br>";
foreach (array_keys($employees) as $key) {
    echo $key . "<br>";
}

// Print a blank line for separation
echo "<br>";

// Print all the values (Employee Names)
echo "Employee Names:<br>";
foreach ($employees as $employee) {
    echo $employee . "<br>";
}
?>

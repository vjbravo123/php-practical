<?php
// Define the associative array
$employee_array = array(
    "EMP001" => "John Doe",
    "EMP002" => "Jane Smith",
    "EMP003" => "Michael Johnson",
    "EMP004" => "Emily Brown",
    "EMP005" => "David Wilson"
);

// Print all keys
echo "Employee Codes:<br>";
foreach ($employee_array as $key => $value) {
    echo "$key<br>";
}

// Print all values
echo "<br>Employee Names:<br>";
foreach ($employee_array as $key => $value) {
    echo "$value<br>";
}
?>
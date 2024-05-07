<?php
function isLowerCase($str) {
    // Using regex to check if the string contains only lowercase letters
    return preg_match('/^[a-z]+$/', $str);
}

// Example usage:
$string1 = "hello";
$string2 = "Hello";
$string3 = "HELLO";

if (isLowerCase($string1)) {
    echo "$string1 is in lowercase.<br>";
} else {
    echo "$string1 is not in lowercase.<br>";
}

if (isLowerCase($string2)) {
    echo "$string2 is in lowercase.<br>";
} else {
    echo "$string2 is not in lowercase.<br>";
}

if (isLowerCase($string3)) {
    echo "$string3 is in lowercase.<br>";
} else {
    echo "$string3 is not in lowercase.<br>";
}
?>
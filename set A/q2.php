<?php
// Given string
$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

// Find length of the string
$length = strlen($string);

// Calculate number of words
$wordCount = str_word_count($string);

// Print results
echo "Length of the string: " . $length . " characters.\n";
echo "Number of words: " . $wordCount . " words.";
?>
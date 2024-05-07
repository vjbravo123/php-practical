$marks = array(
    'Maths' => 85,
    'Science' => 78,
    'English' => 92,
    'History' => 88,
    'Geography' => 80
);

echo "Original array:\n";
foreach ($marks as $subject => $mark) {
    echo "Subject: $subject, Marks: $mark\n";
}

ksort($marks);
echo "\nSorted array:\n";
foreach ($marks as $subject => $mark) {
    echo "Subject: $subject, Marks: $mark\n";
}

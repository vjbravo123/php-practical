$string = 'the quick brown fox jumps over the lazy dog';
$pattern = '/\bthe\b/';
$replacement = 'That';
$result = preg_replace($pattern, $replacement, $string, 1);

echo "Original String: $string \n";
echo "Expected Output: $result";

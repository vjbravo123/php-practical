$names = array('Alice', 'Bob', 'Anna', 'Charlie', 'Adam', 'nikira', 'ashutosh');
echo "Names starting with 'A':\n";
foreach ($names as $name) {
    if (strtoupper(substr($name, 0, 1)) === 'A') {
        echo "$name\n";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    if (empty($name) || empty($age) || empty($address)) {
        echo "<p>Please fill in all fields (Name, Age, Address).</p>";
    } else {
        if ($age <= 18) {
            echo "<p>Age should be greater than 18.</p>";
        }
        if (!strpos($address, 'Delhi')) {
            echo "<p>Address should contain 'Delhi'.</p>";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email format.</p>";
        }
    }
}

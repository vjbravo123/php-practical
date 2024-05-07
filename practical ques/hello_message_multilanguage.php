if (isset($_POST['submit'])) {
    $language = $_POST['language'];

    switch ($language) {
        case 'english':
            echo "Hello!";
            break;
        case 'french':
            echo "Bonjour!";
            break;
        case 'spanish':
            echo "¡Hola!";
            break;
        default:
            echo "Please select a language.";
    }
}

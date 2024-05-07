function getDaysInMonth($month) {
    switch($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "There are 31 days in this month.";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "There are 30 days in this month.";
            break;
        case 2:
            echo "There are 28 or 29 days in this month.";
            break;
        default:
            echo "Invalid month number. Please enter a number from 1 to 12.";
    }
}

$month = 5;
getDaysInMonth($month);
echo "\n";
$month = 9;
getDaysInMonth($month);

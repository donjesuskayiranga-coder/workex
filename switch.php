<!DOCTYPE html>
<html>
<head>
    <title>Student Grade</title>
</head>
<body>

<h2>Find Student Grade</h2>

<form method="post">
    Enter Percentage:
    <input type="number" name="marks" required>
    <input type="submit" name="submit" value="Find Grade">
</form>

<?php
if (isset($_POST['submit'])) {

    $marks = $_POST['marks'];

    switch (true) {
        case ($marks >= 90 && $marks <= 100):
            echo "Grade: A";
            break;

        case ($marks >= 80 && $marks <= 89):
            echo "Grade: B";
            break;

        case ($marks >= 70 && $marks <= 79):
            echo "Grade: C";
            break;

        case ($marks >= 60 && $marks <= 69):
            echo "Grade: D";
            break;

        case ($marks >= 50 && $marks <= 59):
            echo "Grade: E";
            break;

        case ($marks >= 40 && $marks <= 49):
            echo "Grade: F";
            break;

        case ($marks >= 30 && $marks <= 39):
            echo "Grade: S";
            break;

        default:
            echo "Grade: U";
    }
}
?>

</body>
</html>

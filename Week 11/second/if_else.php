<html>
    <body>
        <h1> If else </h1>

<?php
$marks = 78; // Example marks

if ($marks >= 75 && $marks <= 100) {
    echo "Result: A";
} elseif ($marks >= 65 && $marks < 75) {
    echo "Result: B";
} elseif ($marks >= 55 && $marks < 65) {
    echo "Result: C";
} elseif ($marks >= 45 && $marks < 55) {
    echo "Result: D";
} else {
    echo "Result: Fail";
}
?>

</body>
</html>
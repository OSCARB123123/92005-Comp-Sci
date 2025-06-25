<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["firstname"];
    $username = $_POST["lastname"];
    $country = $_POST["country"];
    $details = $_POST["subject"];
    $date = date("Y-m-d H:i:s");
    $entry = "[$date] Name: $name | Username: $username | Country: $country | Details: $details\n";
    file_put_contents("submissions.txt", $entry, FILE_APPEND);
    echo "<h2>Thank you for your submission!</h2>";
    echo "<p><a href='form.html'>Back to form</a></p>";
}
?>

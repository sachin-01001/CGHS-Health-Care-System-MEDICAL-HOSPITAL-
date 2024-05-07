<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cghs_id = $_POST['cghs_id'];
    $mob = $_POST['mob'];
    $hospital = $_POST['hospital'];
    $address = $_POST['address'];
    $total_amount = $_POST['total_amount'];
    $opd_amount = isset($_POST['opd_amount']) ? $_POST['opd_amount'] : 0;
    $indoor_amount = isset($_POST['indoor_amount']) ? $_POST['indoor_amount'] : 0;
    $tests_amount = isset($_POST['tests_amount']) ? $_POST['tests_amount'] : 0;

    // Process the data (e.g., store in database, send email)
    // For this example, we'll just print the data
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "CGHS Ben ID No: $cghs_id<br>";
    echo "Mobile Number: $mob<br>";
    echo "Hospital/Diagnostic Center/Imaging Center: $hospital<br>";
    echo "Address: $address<br>";
    echo "Total Amount Claimed: $total_amount<br>";
    echo "OPD Treatment Amount: $opd_amount<br>";
    echo "Indoor Treatment Amount: $indoor_amount<br>";
    echo "Tests/Investigation Amount: $tests_amount<br>";
}
?>

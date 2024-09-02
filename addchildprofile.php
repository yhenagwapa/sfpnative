<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];

    $sql = "SELECT firstname, middlename, lastname, dob FROM child WHERE firstname = ? and middlename = ? and lastname = ? and dob = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fname, $mname, $lname, $dob);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($fname, $mname, $lname, $dob);
        $stmt->fetch();

        echo "<script>alert('Duplicate entry! Please check details.');</script>";

        } else {
            echo "Invalid entry.";
        }
} else {
    echo "Invalid entry.";
}

    $stmt->close();
    $conn->close();

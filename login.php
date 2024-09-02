<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT id, firstname, middlename, lastname, extname, role, password FROM users WHERE email = ? AND status='1'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $firstname, $middlename, $lastname, $extname, $role, $stored_password);
        $stmt->fetch();

        // Check if the password is correct
        if (password_verify($password, $stored_password)) {
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['middlename'] = $middlename;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['extname'] = $extname;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;

            $full_name = trim($firstname . ' ' . $middlename . ' ' . $lastname . ' ' . $extname);
            $_SESSION['full_name'] = $full_name;

            $_SESSION['login_success'] = "A simple primary alert—check it out!";
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid entry.";
        }
    } else {
        echo "Invalid entry.";
    }

    $stmt->close();
    $conn->close();
}

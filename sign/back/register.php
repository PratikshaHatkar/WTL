<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "<script>
        alert('Already have Account!');
        window.location.href = 'index.php';
        </script>";

    } else {
        // Hash the password correctly
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert into database
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                alert('Account Created');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>


